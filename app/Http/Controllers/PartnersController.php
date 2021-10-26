<?php

namespace App\Http\Controllers;


use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        $partners = Partner::all()->sortBy('name');
        return view('admin.partner.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.partner.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        request()->validate([
            'file' => 'required',
            'name' => 'nullable',
            'url' => 'nullable'
        ]);
        $partner_name = request('name');
        $url = request('url');


        if(request()->hasfile('file')) {

            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $path = $file->move('partners', $file_name);
        }

        Partner::create([
            'name' => $partner_name,
            'path' => $path,
            'url' => $url

        ]);

        return back()->with('message', 'Partner added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($partner)
    {
        //
        $partner = Partner::find($partner);
        return view('admin.partner.show',compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($partner)
    {
        //
        $partner = Partner::find($partner);
        return view('admin.partner.edit',compact('partner'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($partner)
    {
        //
        $partner = Partner::find($partner);
        $partner->update(request()->validate([
            'name' => 'nullable',
            'url' => 'nullable'
        ]));
        return back()->with('message', 'Partner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $path = $partner->path;
        if($path !=null){
            unlink($path);
        }

        $partner->delete();
        return redirect('/admin/partners')->with('message','Partner deleted successfully');
    }

    public function logoUpdate(Partner $partner){
        $old_path = $partner->path;

        request()->validate([
            'file' => 'required',
        ]);

        $path = '';
        if(request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $path = $file->move('partners', $file_name);
        }

        $partner->update([
            'path' =>$path
        ]);
        if($old_path != null){
            unlink($old_path);
        }
        return back()->with('message', 'Partner logo updated successfully');

    }
}

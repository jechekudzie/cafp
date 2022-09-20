<?php

namespace App\Http\Controllers;

use App\Models\Secretariat ;
use Illuminate\Http\Request;

class SecretariatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $secretariats = Secretariat ::all();
        return view('admin.secretariats.index',compact('secretariats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.secretariats.create');
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
        $secretariat = request()->validate([
            'name'=>'required',
            'position'=>'nullable',
            'bio'=>'nullable',
        ]);
        $image = '';

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('secretariat', $file_name);
        }
        $secretariat['image'] = $image;

        Secretariat ::create($secretariat);

        return back()->with('message','Secretariat successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($secretariat)
    {
        //
        $secretariat = Secretariat::find($secretariat);
        return view('admin.secretariats.show',compact('secretariat'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($secretariat)
    {
        //
        $secretariat = Secretariat::find($secretariat);
        return view('admin.secretariats.edit',compact('secretariat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($secretariat)
    {
        //
        $secretariat = Secretariat::find($secretariat);
        $updated = request()->validate([
            'name'=>'required',
            'position'=>'nullable',
            'bio'=>'nullable',
        ]);

        $image = $secretariat->image;

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('secretariat', $file_name);

            $old_path = $secretariat->image;
            if ($old_path != null) {
                if(file_exists($old_path)){
                    unlink($old_path);
                }

            }
        }

        $updated['image'] = $image;

        $secretariat->update($updated);

        return back()->with('message','Secretariat updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($secretariat)
    {
        //
        $secretariat = Secretariat::find($secretariat);
        $secretariat->delete();
        return redirect('/admin/staff')->with('message','Staff member deleted successfully');
    }
}

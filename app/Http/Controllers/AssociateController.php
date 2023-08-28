<?php

namespace App\Http\Controllers;

use App\Models\Associate;
use Illuminate\Http\Request;

class AssociateController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $associates = Associate ::all();
        return view('admin.associates.index',compact('associates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.associates.create');
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
        $associate = request()->validate([
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
            $image = $file->move('associate', $file_name);
        }
        $associate['image'] = $image;

        Associate ::create($associate);

        return back()->with('message','Associate successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($associate)
    {
        //
        $associate = Associate::find($associate);
        return view('admin.associates.show',compact('associate'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($associate)
    {
        //
        $associate = Associate::find($associate);
        return view('admin.associates.edit',compact('associate'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($associate)
    {
        //
        $associate = Associate::find($associate);
        $updated = request()->validate([
            'name'=>'required',
            'position'=>'nullable',
            'bio'=>'nullable',
        ]);

        $image = $associate->image;

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('associate', $file_name);

            $old_path = $associate->image;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $updated['image'] = $image;

        $associate->update($updated);

        return back()->with('message','Associate updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($associate)
    {
        //
        $associate = Associate::find($associate);
        $associate->delete();
        return redirect('/admin/associates')->with('message','Associate deleted successfully');
    }
}

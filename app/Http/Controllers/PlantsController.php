<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plants = Plant::all()->sortBy('name');
        return view('admin.plant.index',compact('plants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.plant.create');

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
        ]);
        $plant_name = request('name');
        $url = request('url');


        if(request()->hasfile('file')) {

            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $path = $file->move('plants', $file_name);
        }

        Plant::create([
            'name' => $plant_name,
            'path' => $path,
        ]);

        return back()->with('message', 'Plant added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($plant)
    {
        //
        $plant = Plant::find($plant);
        return view('admin.plant.show',compact('plant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($plant)
    {
        //
        $plant = Plant::find($plant);
        return view('admin.plant.edit',compact('plant'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($plant)
    {
        //
        $plant = Plant::find($plant);
        $name = request('name');
        $path = '';
        if(request()->hasfile('file')) {

            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $path = $file->move('plant_files', $file_name);
        }
        $plant->update([
            'name' => $name,
            'file' => $path,
        ]);

        return back()->with('message', 'Plant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        $path = $plant->path;
        if($path !=null){
            unlink($path);
        }

        $plant->delete();
        return redirect('/admin/plants')->with('message','Plant deleted successfully');
    }


}

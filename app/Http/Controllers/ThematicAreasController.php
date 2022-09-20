<?php

namespace App\Http\Controllers;

use App\Models\ThematicArea;
use Illuminate\Http\Request;

class ThematicAreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $thematic_areas = ThematicArea::all();
        return view('admin.thematics.index',compact('thematic_areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.thematics.create');
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
        $thematicArea = request()->validate([
            'name'=>'required',
            'description'=>'nullable',
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
            $image = $file->move('thematics', $file_name);
        }
        $thematicArea['image'] = $image;

        ThematicArea::create($thematicArea);

        return back()->with('message','Thematic area successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ThematicArea $thematicArea)
    {
        //
        return view('admin.thematics.show',compact('thematicArea'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($thematicArea)
    {
        //
        $thematicArea = ThematicArea::find($thematicArea);
        return view('admin.thematics.edit',compact('thematicArea'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($thematicArea)
    {
        //
        $thematicArea = ThematicArea::find($thematicArea);
        $updated = request()->validate([
            'name'=>'required',
            'description'=>'nullable',
        ]);

        $image = $thematicArea->image;

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('thematics', $file_name);

            $old_path = $thematicArea->image;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $updated['image'] = $image;

        $thematicArea->update($updated);

        return back()->with('message','Thematic area updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThematicArea $thematicArea)
    {
        //
        $thematicArea->delete();
        return redirect('/admin/thematic_areas')->with('message','Thematic area deleted successfully');
    }
}

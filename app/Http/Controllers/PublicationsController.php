<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\PublicationCategory;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publications = Publication::all();
        return view('admin.publications.index',compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $publication_categories = PublicationCategory::all();
        return view('admin.publications.create',compact('publication_categories'));
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
        $publication = request()->validate([
            'title'=>'required',
            'sub_title'=>'required',
            'publication_category_id'=>'required',
            'period'=>'required',
            'authors'=>'nullable',
            'description'=>'nullable',
        ]);
        $file = '';

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $file = $file->move('publications', $file_name);
        }
        $publication['file'] = $file;

        Publication::create($publication);

        return back()->with('message','Publication successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
        return view('admin.publications.show',compact('publication'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
        $publication_categories = PublicationCategory::all();
        return view('admin.publications.edit',compact('publication','publication_categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Publication $publication)
    {
        //
        $updated = request()->validate([
            'name'=>'required',
            'publication_category_id'=>'required',
            'description'=>'nullable',
        ]);

        $file = $publication->file;

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $file = $file->move('publications', $file_name);

            $old_path = $publication->file;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $updated['file'] = $file;

        $publication->update($updated);

        return back()->with('message','Publication updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        //
        $publication->delete();
        return redirect('/publications')->with('message','Publication deleted successfully');
    }
}

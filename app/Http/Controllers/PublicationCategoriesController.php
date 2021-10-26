<?php

namespace App\Http\Controllers;

use App\Models\PublicationCategory;
use Illuminate\Http\Request;

class PublicationCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publication_categories = PublicationCategory::all();
        return view('admin.publication_categories.index',compact('publication_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.publication_categories.create');
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
        $publicationCategory = request()->validate([
            'name'=>'required',
        ]);

        PublicationCategory::create($publicationCategory);

        return back()->with('message','Publication Category successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PublicationCategory $publicationCategory)
    {
        //
        return view('admin.publication_categories.show',compact('publicationCategory'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicationCategory $publicationCategory)
    {
        //
        return view('admin.publication_categories.edit',compact('publicationCategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PublicationCategory $publicationCategory)
    {
        //
        $publicationCategory->update(request()->validate([
            'name'=>'required',
        ]));

        return back()->with('message','PublicationCategory updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicationCategory $publicationCategory)
    {
        //
        $publicationCategory->delete();
        return redirect('/publication_categories')->with('message','Publication Category deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CouncilMember;
use Illuminate\Http\Request;

class CouncilMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $council_members = CouncilMember::all();
        return view('admin.council_members.index', compact('council_members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.council_members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $councilMember = request()->validate([
            'name' => 'required',
            'position' => 'nullable',
            'bio' => 'nullable',
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
            $image = $file->move('council_members', $file_name);
        }
        $councilMember['image'] = $image;

        CouncilMember::create($councilMember);

        return back()->with('message', 'Council Member successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($councilMember)
    {
        //
        $councilMember = CouncilMember::find($councilMember);
        return view('admin.council_members.show', compact('councilMember'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($councilMember)
    {
        //
        $councilMember = CouncilMember::find($councilMember);
        return view('admin.council_members.edit', compact('councilMember'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($councilMember)
    {
        //
        $councilMember = CouncilMember::find($councilMember);
        $updated = request()->validate([
            'name' => 'required',
            'position' => 'nullable',
            'bio' => 'nullable',
        ]);

        $image = $councilMember->image;

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('council_members', $file_name);

            $old_path = $councilMember->image;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $updated['image'] = $image;

        $councilMember->update($updated);

        return back()->with('message', 'Council Member updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($councilMember)
    {
        //
        $councilMember = CouncilMember::find($councilMember);
        $councilMember->delete();
        return redirect('/admin/board')->with('message', 'Board Member deleted successfully');
    }
}

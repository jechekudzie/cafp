<?php

namespace App\Http\Controllers;

use App\Models\Pillar;
use Illuminate\Http\Request;

class PillarsController extends Controller
{
    //
    public function index()
    {
        //
        $pillars = Pillar::all();
        return view('admin.pillars.index',compact('pillars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pillars.create');
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
        $pillar = request()->validate([
            'name'=>'required',
            'description'=>'nullable',
        ]);
        $image = '';
        $document = '';

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('pillars', $file_name);
        }
        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $document = $file->move('pillar_documents', $file_name);
        }
        $pillar['image'] = $image;
        $pillar['file'] = $document;

        Pillar::create($pillar);

        return back()->with('message','Pillar successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pillar $pillar)
    {
        //
        return view('admin.pillars.show',compact('councilMember'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pillar)
    {
        //
        $pillar = Pillar::find($pillar);
        return view('admin.pillars.edit',compact('councilMember'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($pillar)
    {
        //
        $pillar = Pillar::find($pillar);
        $updated = request()->validate([
            'name'=>'required',
            'description'=>'nullable',
        ]);

        $image = $pillar->image;

        if (request()->hasfile('image')) {
            //get the file field data and name field from form submission
            $file = request()->file('image');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $image = $file->move('pillars', $file_name);

            $old_path = $pillar->image;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $updated['image'] = $image;

        $pillar->update($updated);

        return back()->with('message','Pillar updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pillar $pillar)
    {
        //
        $pillar->delete();
        return redirect('/pillars')->with('message','Pillar deleted successfully');
    }
}

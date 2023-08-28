<?php

namespace App\Http\Controllers;

use App\Models\CapacityDevelopment;
use App\Models\CapacityDevelopmentSection;
use Illuminate\Http\Request;

class CapacityDevelopmentController extends Controller
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
        $capacity_developments = CapacityDevelopment::all();
        return view('admin.capacity_developments.index', compact('capacity_developments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.capacity_developments.create');
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
        $capacity_development = request()->validate([
            'title' => 'required',
            'document' => 'nullable',
        ]);

        CapacityDevelopment::create($capacity_development);

        return back()->with('message', 'CapacityDevelopment successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(CapacityDevelopment $capacity_development)
    {
        //
        return view('admin.capacity_developments.show', compact('capacity_development'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CapacityDevelopment $capacity_development)
    {
        //
        return view('admin.capacity_developments.edit', compact('capacity_development'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CapacityDevelopment $capacity_development)
    {
        //
        $updated = request()->validate([
            'title' => 'required',
            'document' => 'nullable',
        ]);


        $capacity_development->update($updated);

        return back()->with('message', 'Capacity Development updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CapacityDevelopment $capacity_development)
    {
        //
        $capacity_development->delete();
        return redirect('/admin/capacity_development')->with('message', 'Capacity Development deleted successfully');
    }

    public function sections(CapacityDevelopment $capacity_development)
    {
        //
        return view('admin.capacity_development_sections.index', compact('capacity_development'));
    }

    public function create_section(CapacityDevelopment $capacity_development)
    {
        return view('admin.capacity_development_sections.create', compact('capacity_development'));
    }

    public function store_section(CapacityDevelopment $capacity_development)
    {
        //
        $capacity_development_section = request()->validate([
            'title' => 'required',
            'section' => 'required',
        ]);

        $capacity_development->add_capacity_development_sections($capacity_development_section);
        return view('admin.capacity_development_sections.create', compact('capacity_development'));
    }

    public function edit_section(CapacityDevelopmentSection $capacity_development_section)
    {
        return view('admin.capacity_development_sections.edit', compact('capacity_development_section'));
    }

    public function update_section(CapacityDevelopmentSection $capacity_development_section)
    {
        //
        $capacity_development_section->update(request()->validate([
            'title' => 'required',
            'section' => 'required',
        ]));

        return view('admin.capacity_development_sections.edit', compact('capacity_development_section'));
    }


}

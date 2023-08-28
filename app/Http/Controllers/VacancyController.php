<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    //
    public function index()
    {
        //
        $vacancies = Vacancy::all();
        return view('admin.vacancies.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.vacancies.create');
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
        $vacancy = request()->validate([
            'job_title' => 'required',
            'description' => 'nullable',
        ]);

        Vacancy::create($vacancy);

        return back()->with('message', 'Vacancy successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        //
        return view('admin.vacancies.show', compact('vacancy'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy)
    {
        //
        return view('admin.vacancies.edit', compact('vacancy'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Vacancy $vacancy)
    {
        //
        $updated = request()->validate([
            'job_title' => 'required',
            'description' => 'nullable',
        ]);

        $image = $vacancy->image;

        $vacancy->update($updated);

        return back()->with('message', 'Vacancy updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        //
        $vacancy->delete();
        return redirect('/admin/vacancies')->with('message', 'Vacancy deleted successfully');
    }


    public function published(Vacancy $vacancy)
    {
        if ($vacancy->published == 1) {
            $vacancy->update([
                'published' => 0
            ]);
        } else {
            $vacancy->update([
                'published' => 1
            ]);
        }


        return back()->with('message', 'Vacancy position status updated successfully');
    }

}

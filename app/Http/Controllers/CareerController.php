<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Http\Requests\StoreCareerRequest;
use App\Http\Requests\UpdateCareerRequest;
use App\Models\InfoData;
use App\Models\User;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = User::with(['careers.career', 'studentCourses.course'])
            ->where('role', '2')
            ->get();

        $professor = User::with(['professorCourses.course'])
            ->where('role', '1')
            ->get();

        $info = InfoData::first();

        return [
            'students' => $student,
            'professor' => $professor,
            'info' => $info,
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCareerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCareerRequest $request, Career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        //
    }
}

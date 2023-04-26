<?php

namespace App\Http\Controllers;

use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class StudentCourseController extends Controller
{
    public function show(User $student): Collection|array
    {
        if ($student->role != '2')
        {
            abort(404);
        }

        return StudentCourse::with(['course'])
            ->where('student_id', $student->id)
            ->get();
    }
}

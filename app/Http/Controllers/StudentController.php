<?php

namespace App\Http\Controllers;

use App\Models\StudentCareer;
use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class StudentController
 * @author Enrique García <enramgarcia@gmail.com>
 * @since 1.0
 * @package App\Http\Controllers
 */
class StudentController extends Controller
{
    /**
     * @param $student
     * @return mixed
     */
    public function show($student): mixed
    {
        /**
         * @var User $student_data
         */
        $student_data = User::findOrFail($student);

        if ($student_data->role != '2')
        {
            abort(404);
        }

        return $student_data;
    }

    /**
     * @param User $student
     * @return Collection|array
     */
    public function data(User $student): Collection|array
    {
        if ($student->role != '2')
        {
            abort(404);
        }

        $careers = StudentCareer::with(['career'])
            ->where('student_id', $student->id)
            ->orderBy('is_active')
            ->get();

        $courses = StudentCourse::with(['course'])
            ->where('student_id', $student->id)
            ->orderBy('is_active')
            ->orderBy('start_date', 'desc')
            ->get();

        return compact('careers', 'courses');
    }
}

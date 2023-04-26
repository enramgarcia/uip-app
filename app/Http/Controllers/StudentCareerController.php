<?php

namespace App\Http\Controllers;

use App\Models\StudentCareer;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class StudentCareerController extends Controller
{
    public function show(User $student): Collection|array
    {
        if ($student->role != '2')
        {
            abort(404);
        }

        return StudentCareer::with(['career'])
            ->where('student_id', $student->id)
            ->get();
    }
}

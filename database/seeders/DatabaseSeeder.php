<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Career;
use App\Models\CareerCourse;
use App\Models\Course;
use App\Models\CourseProfessor;
use App\Models\InfoData;
use App\Models\StudentCareer;
use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            "careers" => [
                [
                    "id" => 1,
                    "name" => "Ing. de Sistemas y Computación",
                    "code" => "IS-1209",
                    "is_active" => true
                ],
                [
                    "id" => 2,
                    "name" => "Lic. en Desarrollo de Software",
                    "code" => "LC-7819",
                    "is_active" => true
                ],
                [
                    "id" => 3,
                    "name" => "Ing. de Sistemas y Redes",
                    "code" => "IS-3410",
                    "is_active" => true
                ]
            ],
            "courses" => [
                [
                    "id" => 1,
                    "name" => "Desarrollo de Software I",
                    "code" => "DS-120",
                    "is_active" => true
                ],
                [
                    "id" => 2,
                    "name" => "Desarrollo de Software II",
                    "code" => "DS-121",
                    "is_active" => true
                ],
                [
                    "id" => 3,
                    "name" => "Desarrollo de Software III",
                    "code" => "DS-122",
                    "is_active" => true
                ],
                [
                    "id" => 4,
                    "name" => "Desarrollo de Software IV",
                    "code" => "DS-123",
                    "is_active" => true
                ],
                [
                    "id" => 5,
                    "name" => "Desarrollo de Software V",
                    "code" => "DS-124",
                    "is_active" => true
                ],
                [
                    "id" => 6,
                    "name" => "Redes I",
                    "code" => "RD-309",
                    "is_active" => true
                ],
                [
                    "id" => 7,
                    "name" => "Redes II",
                    "code" => "RD-310",
                    "is_active" => true
                ],
                [
                    "id" => 8,
                    "name" => "Estructura de Datos I",
                    "code" => "ED-491",
                    "is_active" => true
                ],
                [
                    "id" => 9,
                    "name" => "Estructura de Datos II",
                    "code" => "ED-492",
                    "is_active" => true
                ],
                [
                    "id" => 10,
                    "name" => "Calculo I",
                    "code" => "MT-238",
                    "is_active" => true
                ],
                [
                    "id" => 11,
                    "name" => "Calculo II",
                    "code" => "MT-239",
                    "is_active" => true
                ]
            ],
            "students" => [
                [
                    "id" => 2,
                    "name" => "Enrique",
                    "last_name" => "García",
                    "email" => "egarcia@domain.com",
                    "phone" => "+507 4213-9909",
                    "graduated" => false,
                    "is_active" => true
                ],
                [
                    "id" => 3,
                    "name" => "John",
                    "last_name" => "Doe",
                    "email" => "j.doe@domain.com",
                    "phone" => "+507 1239-8493",
                    "graduated" => true,
                    "is_active" => false
                ],
                [
                    "id" => 4,
                    "name" => "Jane",
                    "last_name" => "Doe",
                    "email" => "jane.doe@domain.com",
                    "phone" => "+507 129-4138",
                    "graduated" => false,
                    "is_active" => true
                ]
            ],
            "professors" => [
                [
                    "id" => 5,
                    "name" => "Abdiel",
                    "last_name" => "Martinez",
                    "email" => "amartinez@domain.com",
                    "phone" => "+507 876-5432",
                    "is_active" => true
                ],
                [
                    "id" => 6,
                    "name" => "Mate",
                    "last_name" => "Maticas",
                    "email" => "mmaticas@domain.com",
                    "phone" => "+507 453-1239",
                    "is_active" => true
                ],
                [
                    "id" => 7,
                    "name" => "Mgtr. Algo",
                    "last_name" => "Ritmo",
                    "email" => "mgtr.algoritmo@domain.com",
                    "phone" => "+507 653-8239",
                    "is_active" => true
                ],
                [
                    "id" => 8,
                    "name" => "Dr. Red",
                    "last_name" => "Inalambrica",
                    "email" => "dr.r.im@domain.com",
                    "phone" => "+507 645-6139",
                    "is_active" => true
                ]
            ],
            "careers_courses" => [
                [
                    "career_id" => 1,
                    "course_id" => 1,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 2,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 3,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 4,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 5,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 6,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 8,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 9,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 10,
                    "is_active" => true
                ],
                [
                    "career_id" => 1,
                    "course_id" => 11,
                    "is_active" => true
                ],
                [
                    "career_id" => 2,
                    "course_id" => 1,
                    "is_active" => true
                ],
                [
                    "career_id" => 2,
                    "course_id" => 2,
                    "is_active" => true
                ],
                [
                    "career_id" => 2,
                    "course_id" => 3,
                    "is_active" => true
                ],
                [
                    "career_id" => 2,
                    "course_id" => 4,
                    "is_active" => true
                ],
                [
                    "career_id" => 2,
                    "course_id" => 5,
                    "is_active" => true
                ],
                [
                    "career_id" => 3,
                    "course_id" => 1,
                    "is_active" => true
                ],
                [
                    "career_id" => 3,
                    "course_id" => 2,
                    "is_active" => true
                ],
                [
                    "career_id" => 3,
                    "course_id" => 6,
                    "is_active" => true
                ],
                [
                    "career_id" => 3,
                    "course_id" => 7,
                    "is_active" => true
                ],
                [
                    "career_id" => 3,
                    "course_id" => 10,
                    "is_active" => true
                ],
                [
                    "career_id" => 3,
                    "course_id" => 11,
                    "is_active" => true
                ]
            ],
            "courses_professors" => [
                [
                    "course_id" => 1,
                    "professor_id" => 5
                ],
                [
                    "course_id" => 2,
                    "professor_id" => 5
                ],
                [
                    "course_id" => 3,
                    "professor_id" => 5
                ],
                [
                    "course_id" => 4,
                    "professor_id" => 5
                ],
                [
                    "course_id" => 5,
                    "professor_id" => 5
                ],
                [
                    "course_id" => 6,
                    "professor_id" => 8
                ],
                [
                    "course_id" => 7,
                    "professor_id" => 8
                ],
                [
                    "course_id" => 8,
                    "professor_id" => 7
                ],
                [
                    "course_id" => 9,
                    "professor_id" => 7
                ],
                [
                    "course_id" => 10,
                    "professor_id" => 6
                ],
                [
                    "course_id" => 11,
                    "professor_id" => 6
                ]
            ],
            "students_careers" => [
                [
                    "student_id" => 2,
                    "career_id" => 1,
                    "start_date" => "2020-01-01",
                    "end_date" => null,
                    "is_active" => true
                ],
                [
                    "student_id" => 3,
                    "career_id" => 2,
                    "start_date" => "2018-01-01",
                    "end_date" => "2020-05-01",
                    "is_active" => false
                ],
                [
                    "student_id" => 3,
                    "career_id" => 1,
                    "start_date" => "2020-05-01",
                    "end_date" => "2022-12-01",
                    "is_active" => false
                ],
                [
                    "student_id" => 4,
                    "career_id" => 3,
                    "start_date" => "2023-01-01",
                    "end_date" => null,
                    "is_active" => true
                ]
            ],
            "students_courses" => [
                [
                    "student_id" => 2,
                    "course_id" => 1,
                    "start_date" => "2020-01-01",
                    "end_date" => "2020-05-01",
                    "grade" => 95,
                    "is_active" => false
                ],
                [
                    "student_id" => 2,
                    "course_id" => 10,
                    "start_date" => "2020-01-01",
                    "end_date" => "2020-05-01",
                    "grade" => 88,
                    "is_active" => false
                ],
                [
                    "student_id" => 2,
                    "course_id" => 2,
                    "start_date" => "2020-05-01",
                    "end_date" => "2020-09-01",
                    "grade" => 98,
                    "is_active" => false
                ],
                [
                    "student_id" => 2,
                    "course_id" => 3,
                    "start_date" => "2020-09-01",
                    "end_date" => "2020-12-15",
                    "grade" => 93,
                    "is_active" => false
                ],
                [
                    "student_id" => 2,
                    "course_id" => 4,
                    "start_date" => "2021-01-01",
                    "end_date" => "2021-05-01",
                    "grade" => 95.2,
                    "is_active" => false
                ],
                [
                    "student_id" => 2,
                    "course_id" => 11,
                    "start_date" => "2021-01-01",
                    "end_date" => "2021-05-01",
                    "grade" => 82.1,
                    "is_active" => false
                ],
                [
                    "student_id" => 2,
                    "course_id" => 5,
                    "start_date" => "2021-05-01",
                    "end_date" => "2021-09-01",
                    "grade" => 95,
                    "is_active" => false
                ],
                [
                    "student_id" => 2,
                    "course_id" => 1,
                    "start_date" => "2020-01-01",
                    "end_date" => "2020-05-01",
                    "grade" => 95,
                    "is_active" => false
                ],
                [
                    "student_id" => 3,
                    "course_id" => 1,
                    "start_date" => "2020-01-01",
                    "end_date" => "2020-05-01",
                    "grade" => 95,
                    "is_active" => false
                ]
            ],
            "info" => [
                "start_day" => "lunes",
                "end_day" => "viernes",
                "start_time" => "08:00:00",
                "end_time" => "17:00:00",
                "phone" => "+507 123-4567",
                "email" => "contact@domain.com",
                "address" => "Ricardo J. Alfaro"
            ]
        ];

        $careers = $data['careers'];
        $courses = $data['courses'];
        $students = $data['students'];
        $professors = $data['professors'];
        $careers_courses = $data['careers_courses'];
        $courses_professors = $data['courses_professors'];
        $students_careers = $data['students_careers'];
        $students_courses = $data['students_courses'];

        User::create([
            'name' => 'System',
            'last_name' => 'Administrator',
            'role' => '0',
            'email' => 'sys.admin@domain.com',
            'password' => Hash::make('secret123')
        ]);

        foreach ($careers as $career)
        {
            Career::create($career);
        }

        foreach ($courses as $course)
        {
            Course::create($course);
        }

        foreach ($careers_courses as $career_course)
        {
            CareerCourse::create($career_course);
        }

        foreach ($students as $student)
        {
            User::create([
                'name' => $student['name'],
                'last_name' => $student['last_name'],
                'role' => '2',
                'email' => $student['email'],
                'password' => Hash::make('secret'),
            ]);
        }

        foreach ($professors as $professor)
        {
            User::create([
                'name' => $professor['name'],
                'last_name' => $professor['last_name'],
                'role' => '1',
                'email' => $professor['email'],
                'password' => Hash::make('secret'),
            ]);
        }

        foreach ($courses_professors as $courses_professor)
        {
            CourseProfessor::create([
                'course_id' => $courses_professor['course_id'],
                'professor_id' => $courses_professor['professor_id'],
            ]);
        }

        foreach ($students_careers as $students_career)
        {
            StudentCareer::create($students_career);
        }

        foreach ($students_courses as $students_course)
        {
            StudentCourse::create($students_course);
        }

        InfoData::create($data['info']);
    }
}

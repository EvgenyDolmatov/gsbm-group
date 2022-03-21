<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Quiz;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    public function myCourses()
    {
        return view('app.account.my-courses.courses-list', [
            'courses' => Course::all(),
        ]);
    }

    public function quizType(Quiz $quiz)
    {
        return view('app.account.my-courses.quiz-type', [
            'quiz' => $quiz
        ]);
    }
}

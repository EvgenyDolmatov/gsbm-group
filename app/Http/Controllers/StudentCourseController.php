<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Quiz;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    public function myCourses()
    {
        $user = auth()->user();

        return view('app.account.my-courses.courses-list', [
            'user' => $user,
            'groups' => $user->groups,
        ]);
    }

    public function quizType(Quiz $quiz)
    {
        return view('app.account.my-courses.quiz-type', [
            'quiz' => $quiz
        ]);
    }

    public function practisePage(Course $course)
    {
        return view('app.account.my-courses.practise-page', [
            'course' => $course,
        ]);
    }
}

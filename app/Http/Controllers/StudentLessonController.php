<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class StudentLessonController extends Controller
{
    public function lessonShow(Lesson $lesson)
    {
        return view('app.account.my-courses.lesson-show', [
            'lesson' => $lesson,
        ]);
    }
}

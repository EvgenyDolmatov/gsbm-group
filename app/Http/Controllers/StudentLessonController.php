<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\UserResult;
use Illuminate\Http\Request;

class StudentLessonController extends Controller
{
    public function lessonShow(Lesson $lesson)
    {
        return view('app.account.my-courses.lesson-show', [
            'lesson' => $lesson,
            'user' => auth()->user(),
        ]);
    }

    public function passLesson(Lesson $lesson)
    {
        $user = auth()->user();
        UserResult::create([
            "user_id" => $user->id,
            "stage_id" => $lesson->stage->id,
            "is_passed" => 1
        ]);

        return back()->with("lessonPassed", "Отлично! Теперь Вы можете перейти к прохождению теста. ");
    }
}

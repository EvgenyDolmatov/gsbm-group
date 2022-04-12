<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function create(Course $course)
    {
        return view('app.account.courses.quizzes.create', [
            'course' => $course,
        ]);
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255']
        ]);

        $quiz = Quiz::add($request->all(), $course);

        return redirect()->route('questions.create', $quiz);
    }

    public function show(Course $course, Quiz $quiz)
    {
        return view('app.account.courses.quizzes.show', [
            'course' => $course,
            'quiz' => $quiz,
        ]);
    }

    public function edit(Course $course, Quiz $quiz)
    {
        return view('app.account.courses.quizzes.edit', [
            'courses' => Course::all()->sortBy('title'),
            'course' => $course,
            'quiz' => $quiz,
        ]);
    }

    public function update(Request $request, Course $course, Quiz $quiz)
    {
        $request->validate([
            'course_id' => ['required'],
            'title' => ['required', 'string', 'max:255'],
        ]);

        $quiz->update($request->all());
        return redirect()->route('quizzes.show', [$course, $quiz]);
    }

    public function destroy(Course $course, Quiz $quiz)
    {
        $quiz->remove();
        return back();
    }
}

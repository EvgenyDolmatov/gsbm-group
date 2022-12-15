<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStage;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function create(Course $course)
    {
        return view('app.account.courses.quizzes.create', [
            'course' => $course,
            'lessons' => $course->lessons
        ]);
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255']
        ]);

        $quiz = Quiz::add($request->all(), $course);
        CourseStage::addQuizStage($course, $quiz);

        if ($request->has('related_lessons')) {
            $lessonIds = [];
            foreach ($request->input('related_lessons') as $lesId) {
                if ($lesId) $lessonIds[] = $lesId;
            }
            $quiz->relatedLessons()->sync($lessonIds);
        }

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
            'lessons' => $course->lessons
        ]);
    }

    public function update(Request $request, Course $course, Quiz $quiz)
    {
        $request->validate([
            'course_id' => ['required'],
            'title' => ['required', 'string', 'max:255'],
        ]);

        $quiz->update($request->all());

        if ($request->has('related_lessons')) {
            $lessonIds = [];
            foreach ($request->input('related_lessons') as $lesId) {
                if ($lesId) $lessonIds[] = $lesId;
            }
            $quiz->relatedLessons()->sync($lessonIds);
        }

        return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course, Quiz $quiz)
    {
        $quiz->remove();
        return back();
    }
}

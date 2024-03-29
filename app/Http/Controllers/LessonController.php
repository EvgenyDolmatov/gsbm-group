<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStage;
use App\Models\Lesson;
use App\Models\LessonAttachment;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function create(Course $course)
    {
        return view('app.account.courses.lessons.create', [
            'course' => $course
        ]);
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        $lesson = Lesson::add($request->all(), $course);
        CourseStage::create([
            "course_id" => $course->id,
            "lesson_id" => $lesson->id,
            "type" => "lesson"
        ]);

        $files = $request->file('files');
        if ($files) {
            foreach ($files as $file) {
                LessonAttachment::uploadFile($lesson, $file);
            }
        }

        return redirect()->route('courses.show', $course);
    }

    public function edit(Course $course, Lesson $lesson)
    {
        return view('app.account.courses.lessons.edit', [
            'courses' => Course::all(),
            'course' => $course,
            'lesson' => $lesson,
        ]);
    }

    public function update(Request $request, Course $course, Lesson $lesson)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        $lesson->update($request->all());
        $files = $request->file('files');
        if ($files) {
            foreach ($files as $file) {
                LessonAttachment::uploadFile($lesson, $file);
            }
        }

        return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course, Lesson $lesson)
    {
        $lesson->remove();
        return back();
    }
}

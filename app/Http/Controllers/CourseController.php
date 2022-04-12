<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudyArea;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('app.account.courses.courses', [
            'courses' => Course::all()->sortBy('title'),
        ]);
    }

    public function create()
    {
        return view('app.account.courses.create', [
            'studyAreas' => StudyArea::all()->sortBy('name'),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'study_area_id' => ['required'],
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
        ]);

        $course = Course::create($request->all());
        return redirect()->route('courses.show', $course);
    }

    public function show(Course $course)
    {
        return view('app.account.courses.show', [
            'course' => $course,
        ]);
    }

    public function edit(Course $course)
    {
        return view('app.account.courses.edit', [
            'course' => $course,
            'studyAreas' => StudyArea::all(),
        ]);
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'study_area_id' => ['required'],
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
        ]);

        $course->update($request->all());
        return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course)
    {
        $course->remove();
        return back();
    }
}

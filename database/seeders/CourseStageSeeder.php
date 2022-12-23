<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseStage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            foreach ($course->lessons as $lesson) {
                if (!$lesson->stage) {
                    CourseStage::addLessonStage($course, $lesson);
                }
            }
            foreach ($course->quizzes as $quiz) {
                if (!$quiz->stage) {
                    CourseStage::addQuizStage($course, $quiz);
                }
            }
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseStage extends Model
{
    use HasFactory;

    protected $fillable = ["course_id", "lesson_id", "quiz_id", "type"];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    public static function addLessonStage($course, $lesson): static
    {
        $stage = new static();
        $stage->course_id = $course->id;
        $stage->lesson_id = $lesson->id;
        $stage->type = "lesson";
        $stage->save();

        return $stage;
    }

    public static function addQuizStage($course, $quiz): static
    {
        $stage = new static();
        $stage->course_id = $course->id;
        $stage->quiz_id = $quiz->id;
        $stage->type = "quiz";
        $stage->save();

        return $stage;
    }
}

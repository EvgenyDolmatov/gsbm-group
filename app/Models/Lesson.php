<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Lesson extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['title', 'content', 'course_id'];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(LessonAttachment::class);
    }

    public function relatedQuizzes()
    {
        return $this->belongsToMany(Quiz::class);
    }

    public function stage()
    {
        return $this->hasOne(CourseStage::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public static function add(array $input, $course)
    {
        $lesson = new static;
        $lesson->fill($input);
        $lesson->course_id = $course->id;
        $lesson->save();

        return $lesson;
    }

    public function remove()
    {
        $files = $this->attachments;

        if ($files) {
            foreach ($files as $file) {
                $file->removeFile();
            }
        }
        $this->delete();
    }
}

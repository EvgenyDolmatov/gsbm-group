<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Course extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

    protected $fillable = ['title', 'description', 'study_area_id', 'price'];

    public function studyArea()
    {
        return $this->belongsTo(StudyArea::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function remove()
    {
        foreach ($this->quizzes as $quiz) {
            $quiz->remove();
        }
        $this->delete();
    }
}

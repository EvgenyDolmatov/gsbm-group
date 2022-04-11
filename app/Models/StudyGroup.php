<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudyGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'study_area_id', 'course_id'];

    public function direction()
    {
        return $this->belongsTo(StudyArea::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function students()
    {
        return $this->hasMany(User::class, 'group_id');
    }

    public static function add(array $input)
    {
        $course = Course::find($input['course_id']);

        $group = new static;
        $group->fill($input);
        $group->study_area_id = $course->study_area_id;
        $group->save();

        return $group;
    }
}

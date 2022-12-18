<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserResult extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "stage_id", "points", "is_passed", "time_spent", "is_exam"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function stage(): BelongsTo
    {
        return $this->belongsTo(CourseStage::class);
    }

    public function details(): HasMany
    {
        return $this->hasMany(UserResultDetail::class, "result_id");
    }

    public function getAnswerByQuestion($q) : array
    {
        $userAnswer = $this->details->where("question_id", $q->id)->first()->answer;
        return explode(',', $userAnswer);
    }

    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d.m.Y');
    }
}

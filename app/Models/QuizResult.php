<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuizResult extends Model
{
    use HasFactory;

    protected $table = 'quiz_results';
    protected $fillable = ['user_id', 'quiz_id', 'points', 'time_spent'];

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class, "quiz_id");
    }

    public static function add($time_spent, $quiz)
    {
        $calcResult = $quiz->calculateResult();

        $res = new static;
        $res->user_id = auth()->user()->id;
        $res->quiz_id = $quiz->id;
        $res->points = $calcResult['points'];
        $res->time_spent = $time_spent;
        $res->save();

        return $res;
    }

    public function getGrade() : string
    {
        return round($this->points/20);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserResultDetail extends Model
{
    use HasFactory;

    protected $fillable = ["result_id", "question_id", "answer"];

    public function result(): BelongsTo
    {
        return $this->belongsTo(UserResult::class, 'result_id');
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}

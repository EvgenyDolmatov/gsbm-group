<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserResult extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "stage_id", "points", "is_passed", "time_spent"];

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
}

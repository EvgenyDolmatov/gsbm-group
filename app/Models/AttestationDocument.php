<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttestationDocument extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["study_area_id", "type", "number", "valid_from", "valid_to"];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function studyArea(): BelongsTo
    {
        return $this->belongsTo(StudyArea::class);
    }

    public static function add(array $input, $employee): static
    {
        $doc = new static();
        $doc->fill($input);
        $doc->user_id = $employee->id;
        $doc->save();

        return $doc;
    }
}

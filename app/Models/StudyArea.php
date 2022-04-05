<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyArea extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function groups()
    {
        return $this->belongsTo(StudyGroup::class);
    }

}

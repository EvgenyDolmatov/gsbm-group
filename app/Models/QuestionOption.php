<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionOption extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['question_id', 'value', 'is_correct'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function getInput($count) : string
    {
        $questionType = $this->question->type;
        $inputType = 'radio';
        $is_checked = null;

        if ($questionType == 'multiple') {
            $inputType = 'checkbox';
        }

        if ($this->is_correct) {
            $is_checked = 'checked';
        }

        $str = '<div class="option-group d-flex justify-content-end mb-3">';
        $str .= '<input type="text" name="options[]" class="form-control" value="'.$this->value.'">';
        $str .= '<input type="'.$inputType.'" name="is_correct[]" class="form-radio is-correct" value="'.$count.'" '.$is_checked.'>';
        $str .= '</div>';

        return $str;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['question_text', 'type'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function options()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class);
    }

    public static function add(array $input, $quiz)
    {
        $q = new static;
        $q->fill($input);
        $q->quiz_id = $quiz->id;
        $q->save();

        return $q;
    }

    public function addOptions(array $input)
    {
        foreach ($this->options as $option) {
            $option->delete();
        }

        foreach ($input['options'] as $key => $option) {

            in_array($key + 1, $input['is_correct']) ?
                $is_correct = 1 :
                $is_correct = 0;

            if ($option != null) {
                QuestionOption::create([
                    'question_id' => $this->id,
                    'value' => $option,
                    'is_correct' => $is_correct,
                ]);
            }
        }
    }

    public function remove()
    {
        foreach ($this->options as $option) {
            $option->delete();
        }
        $this->delete();
    }

    public function getInputType() : string
    {
        if ($this->type === 'single')
            return 'radio';
        return 'checkbox';
    }

    public function getInputName() : string
    {
        if ($this->type === 'single')
            return 'question_'.$this->id;
        return 'question_'.$this->id.'[]';
    }

    public function getFormClass() : string
    {
        if ($this->type === 'single')
            return 'form-radio';
        return 'form-checkbox';
    }

    public function getInputChecked($option)
    {
        $inputName = str_replace('[]', '', $this->getInputName());

        if (gettype(old($inputName)) == 'string') {
            if (old($inputName) == $option->id) {
                return 'checked';
            }
        }

        if (old($inputName) && gettype(old($inputName)) == 'array') {
            if (in_array($option->id, old($inputName))) {
                return 'checked';
            }
        }

        return false;
    }

    public function isAnswerIncorrect($result): bool
    {
        $options = $this->options;
        foreach ($options as $option) {
            if ($option->isAnswerIncorrect($result)) {
                return true;
            }
        }
        return false;
    }
}

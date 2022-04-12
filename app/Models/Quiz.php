<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Quiz extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

    protected $fillable = ['title', 'description', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function results()
    {
        return $this->hasMany(QuizResult::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public static function add(array $input, $course)
    {
        $quiz = new static;
        $quiz->fill($input);
        $quiz->course_id = $course->id;
        $quiz->save();

        return $quiz;
    }

    public function remove()
    {
        foreach ($this->questions as $question) {
            $question->remove();
        }
        $this->delete();
    }

    /*
     * Сохраняем ответы пользователя
     */
    public function storeAnswers(array $input)
    {
        $user = auth()->user();
        foreach ($this->questions as $question) {

            $field = $input['question_' . $question->id];

            if (is_array($field)) {
                $answer = implode(',', $field);
            } else {
                $answer = $field;
            }

            $answerExists = QuestionAnswer::where([
                ['user_id', $user->id],
                ['question_id', $question->id],
            ])->first();

            if ($answerExists) {
                $answerExists->update(['answer' => $answer]);
            } else {
                QuestionAnswer::create([
                    'user_id' => $user->id,
                    'question_id' => $question->id,
                    'answer' => $answer,
                ]);
            }
        }
    }

    /*
     * Возвращаем все ответы пользователя по тесту
     */
    public function getAnswersByUser()
    {
        $user = auth()->user();
        $questionIds = array();

        foreach ($this->questions as $question) {
            $questionIds[] = $question->id;
        }

        return QuestionAnswer::where('user_id', $user->id)->whereIn('question_id', $questionIds)->get();
    }

    /*
     * Высчитываем количество баллов за тест
     */
    public function calculateResult()
    {
        $userPoints = 0;
        $wrongAnswers = array();
        $maxPoints = count($this->getAnswersByUser()); // Максимальное количество баллов за тест
        $answers = $this->getAnswersByUser(); // Все ответы пользователя

        $answersArr = array(); // Массив ответов пользователя
        $optionsArr = array(); // Массив правильных ответов

        // Преобразуем ответы пользователя в массив
        foreach ($answers as $answer) {
            $answersArr[$answer->question->id] = explode(',', $answer->answer);
        }

        // Заполняем массив правильных ответов
        foreach ($this->questions as $question) {
            foreach ($question->options as $option) {
                if ($option->is_correct == 1) {
                    $optionsArr[$option->question->id][] = $option->id;
                }
            }
        }

        // Баллы за каждый ответ
        foreach ($optionsArr as $key => $option) {

            $totalPoints = count($option); // Максимальное количество баллов за вопрос
            $questionPoints = $totalPoints; // Количество баллов пользователя

            $diff = array_diff($option, $answersArr[$key]); // Сравниваем ответы пользователя с правильными ответами

            // Если между ответами пользователя и правильными ответами есть разница, то вычитаем баллы
            if (!empty($diff)) {
                $questionPoints -= count($diff);
                $wrongAnswers[] = '№'.$key;
            }

            $userPoints += $questionPoints;
        }

        return array(
            'points' => round(($userPoints * 100) / $maxPoints), // Возвращаем процент правильных ответов от 0 до 100
            'wrongAnswers' => $wrongAnswers, // Возвращаем номера неверных ответов
        );
    }

    public function getResult()
    {
        return QuizResult::where('user_id', auth()->user()->id)->where('quiz_id', $this->id)->first();
    }

    public function getGrade()
    {
        return round($this->getResult()->points/20);
    }

    public function isPassed()
    {
        $user = auth()->user();

        $result = QuizResult::where('user_id', $user->id)->where('quiz_id', $this->id)->first();

        if ($result && $result->points >= 50) {
            return true;
        }
        return false;
    }
}

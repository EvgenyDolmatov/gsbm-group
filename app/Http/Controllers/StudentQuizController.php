<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;

class StudentQuizController extends Controller
{
    public function show(Quiz $quiz)
    {
        return view('app.education.quiz-page', [
            'quiz' => $quiz,
        ]);
    }

    public function storeAnswers(Request $request, Quiz $quiz)
    {
        $rules = array();
        foreach ($quiz->questions as $question) {
            $rules['question_' . $question->id] = ['required'];
        }
        $request->validate($rules);

        // Сохраняем все ответы
        $quiz->storeAnswers($request->all());
        $calcResult = $quiz->calculateResult();

        // Считаем результат
        if ($quiz->result) {
            $quiz->result->update(['points' => $calcResult['points']]);
        } else {
            QuizResult::add($quiz);
        }

        return redirect()->route('account.quiz.result', $quiz);
    }

    public function quizResult(Quiz $quiz)
    {
        return view('app.education.quiz-result', [
            'quiz' => $quiz
        ]);
    }
}

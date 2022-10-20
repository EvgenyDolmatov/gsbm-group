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
        $emptyQ = [];
        foreach ($quiz->questions as $question) {
            if (!array_key_exists('question_' . $question->id, $request->all())) {
                $emptyQ['question_' . $question->id] = 0;
            }
        }

        // Сохраняем все ответы
        $quiz->storeAnswers(array_merge($request->all(), $emptyQ));
        $calcResult = $quiz->calculateResult();

        // Считаем результат
        if ($quiz->result) {
            $quiz->result->update(['points' => $calcResult['points']]);
        } else {
            QuizResult::add($request->time_spent, $quiz);
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

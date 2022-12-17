<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\UserResult;
use Illuminate\Http\Request;

class StudentQuizController extends Controller
{
    public function show(Quiz $quiz)
    {
        return view('app.education.quiz-page', [
            'quiz' => $quiz,
        ]);
    }

    public function showExam(Quiz $quiz)
    {
        return view('app.education.exam-page', [
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

        // Создаем результат
        $userRes = UserResult::create([
            "user_id" => auth()->user()->id,
            "stage_id" => $quiz->stage->id,
        ]);

        // Сохраняем все ответы
        $quiz->storeAnswers($userRes, array_merge($request->all(), $emptyQ));
        $calcResult = $quiz->calculateResult();

        // Считаем результат
        $userRes->update([
            'points' => $calcResult['points'],
            "time_spent" => $request->time_spent,
            "is_passed" => $calcResult['points'] >= 50 ? 1 : 0,
            "is_exam" => $request->has('is_exam') ? 1 : 0,
        ]);

        return redirect()->route('account.quiz.result', $userRes);
    }

    public function showResult(UserResult $result)
    {
        return view('app.education.quiz-result', [
            'result' => $result
        ]);
    }

    public function showMistakes(Quiz $quiz, UserResult $result)
    {
        return view("app.education.mistakes-page", [
            'quiz' => $quiz,
            'result' => $result,
        ]);
    }
}

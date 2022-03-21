<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Quiz $quiz)
    {
        return view('app.account.courses.quizzes.questions.create', [
            'quiz' => $quiz,
        ]);
    }

    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'type' => ['required'],
            'question_text' => ['required'],
//            'options[]' => ['required'],
        ]);

        $question = Question::add($request->all(), $quiz);
        $question->addOptions($request->all());

        return redirect()->route('quizzes.show', [$quiz->course, $quiz]);
    }

    public function edit(Quiz $quiz, Question $question)
    {
        return view('app.account.courses.quizzes.questions.edit', [
            'quiz' => $quiz,
            'question' => $question,
        ]);
    }

    public function update(Request $request, Quiz $quiz, Question $question)
    {
        $request->validate([
            'type' => ['required'],
            'question_text' => ['required'],
//            'options' => ['required'],
        ]);

        $question->update($request->all());
        $question->addOptions($request->all());

        return redirect()->route('quizzes.show', [$quiz->course, $quiz]);
    }

    public function destroy(Quiz $quiz, Question $question)
    {
        $question->remove();
        return back();
    }
}

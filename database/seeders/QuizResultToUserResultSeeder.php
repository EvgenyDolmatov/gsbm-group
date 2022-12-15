<?php

namespace Database\Seeders;

use App\Models\QuestionAnswer;
use App\Models\QuizResult;
use App\Models\UserResult;
use App\Models\UserResultDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class QuizResultToUserResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (QuizResult::all() as $result) {
            $uRes = UserResult::create([
                "user_id" => $result->user_id,
                "stage_id" => $result->quiz->stage->id,
                "points" => $result->points,
                "time_spent" => $result->time_spent,
                "is_passed" => $result->points >= 50 ? 1 : 0,
            ]);

            $qIds = [];
            foreach ($result->quiz->questions as $q) {
                $qIds[] = $q->id;
            }

            $answers = QuestionAnswer::where("user_id", $result->user_id)->whereIn("question_id", $qIds)->get();
            foreach ($answers as $answer) {
                UserResultDetail::create([
                    "result_id" => $uRes->id,
                    "question_id" => $answer->question_id,
                    "answer" => $answer->answer,
                ]);
            }
        }

        Schema::dropIfExists('quiz_results');
        Schema::dropIfExists('question_answers');
    }
}

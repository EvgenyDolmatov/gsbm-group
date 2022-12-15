<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_result_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("result_id")->references('id')->on('user_results')->cascadeOnDelete();
            $table->foreignId("question_id")->references("id")->on("questions")->cascadeOnDelete();
            $table->string("answer");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_result_details');
    }
};

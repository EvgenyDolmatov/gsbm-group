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
        Schema::create('crm_med_inspections', function (Blueprint $table) {
            $table->id();
            $table->foreignId("employee_id")->references("id")->on("crm_employees")->cascadeOnDelete();
            $table->string("type")->nullable();
            $table->date("inspection_date");
            $table->date("next_inspection_date")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crm_med_inspections');
    }
};

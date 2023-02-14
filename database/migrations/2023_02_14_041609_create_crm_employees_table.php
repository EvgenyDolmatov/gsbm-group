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
//        Schema::create('crm_employees', function (Blueprint $table) {
//            $table->id();
//            $table->string("surname");
//            $table->string("name");
//            $table->string("middle_name")->nullable();
//            $table->string("phone")->nullable();
//            $table->string("email")->nullable();
//            $table->date("birthday")->nullable();
//            $table->unsignedBigInteger("company_id")->nullable();
//            $table->foreign("company_id")->references("id")->on("crm_companies");
//            $table->unsignedBigInteger("profession_id")->nullable();
//            $table->foreign("profession_id")->references("id")->on("crm_professions");
//            $table->integer("profession_discharge")->nullable();
//            $table->timestamps();
//            $table->softDeletes();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crm_employees');
    }
};

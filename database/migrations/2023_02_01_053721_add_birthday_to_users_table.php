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
        Schema::table('users', function (Blueprint $table) {
            $table->date("birthday")->nullable()->after("phone");
            $table->unsignedBigInteger("company_id")->nullable()->after("is_staff");
            $table->foreign("company_id")->references("id")->on("companies");
            $table->unsignedBigInteger("profession_id")->nullable()->after("company_id");
            $table->foreign("profession_id")->references("id")->on("professions");
            $table->integer("profession_discharge")->nullable()->after("profession_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

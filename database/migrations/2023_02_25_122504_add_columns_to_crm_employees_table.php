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
        Schema::table('crm_employees', function (Blueprint $table) {
            $table->enum("sex", ["male", "female"])->after("birthday")->default("male");
            $table->integer("height")->after("sex")->nullable();
            $table->integer("clothing_size")->after("height")->nullable();
            $table->integer("shoe_size")->after("clothing_size")->nullable();
            $table->date("employment_date")->after("profession_discharge")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crm_employees', function (Blueprint $table) {
            //
        });
    }
};

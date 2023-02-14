<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('users', function (Blueprint $table) {
//            $table->dropForeign("users_company_id_foreign");
//            $table->dropColumn("company_id");
//            $table->dropForeign("users_profession_id_foreign");
//            $table->dropColumn("profession_id");
//            $table->dropColumn("profession_discharge");
//        });
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

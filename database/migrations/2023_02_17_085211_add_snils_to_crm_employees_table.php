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
            $table->string("snils")->after("birthday")->nullable();
        });

        Schema::table('crm_attestation_documents', function($table)
        {
            $table->date('valid_to')->nullable()->change();
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

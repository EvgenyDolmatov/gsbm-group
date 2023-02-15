<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::table("attestation_documents")->truncate();
        Schema::table('attestation_documents', function (Blueprint $table) {
            $table->dropForeign("attestation_documents_user_id_foreign");
            $table->dropColumn("user_id");
            $table->dropForeign("attestation_documents_study_area_id_foreign");
            $table->dropColumn("study_area_id");
            $table->foreignId("employee_id")
                ->after("id")->references("id")->on("crm_employees")->cascadeOnDelete();
            $table->foreignId("direction_id")
                ->after("employee_id")->references("id")->on("crm_directions")->cascadeOnDelete();
        });

        Schema::rename("attestation_documents", "crm_attestation_documents");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attestation_documents', function (Blueprint $table) {
            //
        });
    }
};

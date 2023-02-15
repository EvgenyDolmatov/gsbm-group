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
        Schema::create('crm_attestations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("employee_id")->references("id")->on("crm_employees")->cascadeOnDelete();
            $table->foreignId("direction_id")->references("id")->on("crm_directions")->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('crm_attestation_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId("attestation_id")->references("id")->on("crm_attestations")->cascadeOnDelete();
            $table->enum("type", ["certificate", "", "protocol"]);
            $table->string("doc_name")->nullable();
            $table->string("doc_number");
            $table->date("valid_from");
            $table->date("valid_to");
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
        Schema::dropIfExists('crm_attestations');
    }
};

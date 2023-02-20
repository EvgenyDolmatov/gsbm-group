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
        Schema::create('crm_inventory_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId("inventory_item_id")->references('id')->on("crm_inventory_items")->cascadeOnDelete();
            $table->foreignId("profession_id")->references("id")->on("crm_professions")->cascadeOnDelete();
            $table->integer("rate_per_year")->default(1);
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
        Schema::dropIfExists('crm_inventory_schedule');
    }
};

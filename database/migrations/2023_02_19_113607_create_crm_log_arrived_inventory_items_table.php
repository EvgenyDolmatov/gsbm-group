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
        Schema::create('crm_log_arrived_inventory_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->references("id")->on("users");
            $table->foreignId("inventory_item_id")->references("id")->on("crm_inventory_items");
            $table->integer("quantity")->default(1);
            $table->date("arrive_date");
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
        Schema::dropIfExists('crm_log_arrived_inventory_items');
    }
};

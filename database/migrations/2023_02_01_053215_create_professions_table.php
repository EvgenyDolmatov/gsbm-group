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
        Schema::create('professions', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("slug")->unique();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table("professions")->insert([
            ["name" => "Монтажник", "slug" => "Montazhnik"],
            ["name" => "Стропальщик", "slug" => "Stropalshchik"],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professions');
    }
};

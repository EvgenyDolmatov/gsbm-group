<?php

use App\Models\User;
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
        $user_group = [];

        foreach (User::all() as $user) {
            if ($user->group_id) {
                $user_group[$user->id] = $user->group_id;
            }
        }

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['group_id']);
            $table->dropColumn('group_id');
        });

        Schema::create('group_user', function (Blueprint $table) {
            $table->foreignId('study_group_id')->references('id')->on('study_groups');
            $table->foreignId('user_id')->references('id')->on('users');
        });

        foreach ($user_group as $userId => $groupId) {
            User::find($userId)->groups()->attach($groupId);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_user');
    }
};

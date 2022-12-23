<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class HelperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Меняем пароль пользователям
        foreach (User::all() as $user) {
            switch ($user->email) {
                case "hromcoff@mail.ru":
                    $user->update(["password" => Hash::make("Qwerty1234")]);
                case "morozovslava623@gmail.com":
                    $user->update(["password" => Hash::make("Qwerty1234")]);
                case "noskowalex2009@gmail.com":
                    $user->update(["password" => Hash::make("Qwerty1234")]);
            }
        }
    }
}

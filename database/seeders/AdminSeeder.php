<?php

namespace Database\Seeders;

use App\Mail\AdminRegisteredMail;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass = Str::random(8);
        $admin = User::create([
            'surname' => 'Верхоланцева',
            'name' => 'Александра',
            'phone' => '79091112167',
            'email' => 'averholanceva@gsbm-group.ru',
            'is_staff' => 1,
            'password' => Hash::make($pass),
        ]);
        $admin->assignRole('admin');

        Mail::to($admin->email)->send(new AdminRegisteredMail($admin, $pass));
        Mail::to('evd.work@yandex.ru')->send(new AdminRegisteredMail($admin, $pass));
    }
}

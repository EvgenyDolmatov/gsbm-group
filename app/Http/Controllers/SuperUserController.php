<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperUserController extends Controller
{
    public function setRoleToAdmin()
    {
        $user = auth()->user();
        $admin = User::where('email', 'evd.work@yandex.ru')->first();

        try {
            if ($user->email === $admin->email) {
                $user->assignRole('super-admin');
                return 'Пользователь с электронным адресом "' . $user->email . '" получил роль супер-администратора';
            } else {
                return 'Вы не можете стать супер-администратором!';
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}

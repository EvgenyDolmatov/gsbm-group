<?php

namespace App\Http\Controllers;

use App\Mail\PasswordChanged;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class AccountController extends Controller
{
    public function account()
    {
        return view('app.account.account', [
            'user' => auth()->user(),
        ]);
    }

    public function editAccount()
    {
        return view('app.account.edit-account', [
            'user' => auth()->user(),
        ]);
    }

    public function updateAccount(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'surname' => 'required|max:30',
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|unique:users,phone,' . $user->id,
        ]);

        $user->update($request->all());
        return back()->with('status', 'Данные обновлены.');
    }

    public function editPassword()
    {
        return view('app.account.edit-password', [
            'user' => auth()->user(),
        ]);
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->forceFill([
                'password' => Hash::make($request->password),
            ])->save();

            Mail::to($user->email)->send(new PasswordChanged($user));
            return back()->with('status', 'Пароль изменен.');

        } else {
            return back()->with('errorMsg', 'Текущий пароль введен неверно.');
        }
    }
}

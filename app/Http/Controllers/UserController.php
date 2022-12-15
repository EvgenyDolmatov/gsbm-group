<?php

namespace App\Http\Controllers;

use App\Mail\RegisterSuccessByAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $exceptIds = [];
        foreach (User::role(["admin", "super-admin"])->get() as $admin) {
            $exceptIds[] = $admin->id;
        }

        $users = User::all();
        if ($request->surname_q) {
            $users = User::where("surname", "like", "%".$request->surname_q."%")->get();
        }
        return view('app.account.users.users-list', [
            'students' => $users->except($exceptIds)->sortBy("surname"),
        ]);
    }

    public function create()
    {
        return view('app.account.users.user-create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ];
        $request->validate($rules);

        $user = User::withTrashed()->where('email', $request->email)->first();

        if ($user) {
            if ($user->trashed()) {
                $user->restore();
                $user->update($request->all());
            } else {
                $rules['email'][] = 'unique:users';
                $request->validate($rules);
            }
        } else {
            $pass = Str::random(8);
            $user = User::createByAdmin($request->all(), $pass);
            $user->assignRole('user');
            Mail::to($user->email)->send(new RegisterSuccessByAdmin($user, $pass));
        }

        return redirect()->route('students.index')
            ->with("created_success", "Студент " . $user->getFullName() . " успешно создан.");
    }

    public function edit(User $student)
    {
        return view('app.account.users.user-edit', [
            'student' => $student,
        ]);
    }

    public function update(Request $request, User $student)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        $student->update($request->all());
        return redirect()->route('students.index', $student);
    }

    public function destroy(User $student)
    {
        if ($student->groups()->exists()) {
            $student->groups()->detach();
        }
        $student->delete();

        return back()->with("success", "Студент " . $student->getFullName() . " успешно удален.");
    }
}

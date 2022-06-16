<?php

namespace App\Http\Controllers;

use App\Mail\RegisterSuccessByAdmin;
use App\Models\Course;
use App\Models\StudyArea;
use App\Models\StudyGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StudyGroupController extends Controller
{
    public function index()
    {
        return view('app.account.users.groups.groups', [
            'groups' => StudyGroup::all(),
        ]);
    }

    public function create()
    {
        return view('app.account.users.groups.create', [
            'courses' => Course::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'course_id' => ['required'],
        ]);

        StudyGroup::add($request->all());
        return redirect()->route('study-groups.index');
    }

    public function show(StudyGroup $studyGroup)
    {
        return view('app.account.users.groups.show', [
            'group' => $studyGroup,
            'students' => $studyGroup->students,
            'users' => User::all(),
        ]);
    }

    public function edit(StudyGroup $studyGroup)
    {
        return view('app.account.users.groups.edit', [
            'group' => $studyGroup,
            'courses' => Course::all()->sortBy('title'),
        ]);
    }

    public function update(Request $request, StudyGroup $studyGroup)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'course_id' => ['required'],
        ]);

        $studyGroup->update($request->all());
        return redirect()->route('study-groups.index');
    }

    public function addUserToGroup(Request $request, StudyGroup $group) {
        $request->validate([
            'user_id' => ['required'],
        ]);

        $group->students()->attach($request->input('user_id'));
        return back();
    }

    public function destroy(StudyGroup $studyGroup)
    {
        $studyGroup->delete();
        return redirect()->route('study-groups.index');
    }

    public function createStudent(StudyGroup $group)
    {
        return view('app.account.users.students.create', [
            'group' => $group,
        ]);
    }

    public function storeStudent(Request $request, StudyGroup $group)
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
                $user->update(['group_id' => $group->id]);
            } else {
                $rules['email'][] = 'unique:users';
                $request->validate($rules);
            }
        } else {
            $pass = Str::random(8);
            $user = User::createByAdmin($request->all(), $group, $pass);
            $user->assignRole('user');
            Mail::to($user->email)->send(new RegisterSuccessByAdmin($group, $user, $pass));
        }

        return redirect()->route('study-groups.show', $group);
    }

    public function editStudent(StudyGroup $group, User $student)
    {
        return view('app.account.users.students.edit', [
            'group' => $group,
            'student' => $student,
        ]);
    }

    public function updateStudent(Request $request, StudyGroup $group, User $student)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        $student->update($request->all());
        return redirect()->route('study-groups.show', $group);
    }

    public function destroyStudent(StudyGroup $group, User $student)
    {
//        $student->delete();
        $group->students()->detach($student->id);
        return back();
    }

    public function getGroupResults(StudyGroup $group)
    {
        return view('app.account.users.results.results', [
            'group' => $group,
            'students' => $group->students,
        ]);
    }
}

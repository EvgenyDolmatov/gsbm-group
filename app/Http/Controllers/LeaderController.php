<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\Service;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function index()
    {
        return view('app.account.leaders.leaders', [
            'leaders' => Leader::all(),
        ]);
    }

    public function create()
    {
        return view('app.account.leaders.create', [
            'services' => Service::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
           'surname' => ['required', 'string', 'max:255'],
           'name' => ['required', 'string', 'max:255'],
           'position' => ['required', 'string', 'max:255'],
           'service_id' => ['required'],
        ]);

        $leader = Leader::create($request->all());
        $leader->uploadPhoto($request->file('photo'));

        return redirect()->route('leaders.index');
    }

    public function edit(Leader $leader)
    {
        return view('app.account.leaders.edit', [
            'leader' => $leader,
            'services' => Service::all(),
        ]);
    }

    public function update(Request $request, Leader $leader)
    {
        $request->validate([
            'surname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'service_id' => ['required'],
        ]);

        $leader->update($request->all());
        $leader->uploadPhoto($request->file('photo'));

        return redirect()->route('leaders.index');
    }

    public function destroy(Leader $leader)
    {
        $leader->remove();
        return back();
    }
}

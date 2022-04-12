<?php

namespace App\Http\Controllers;

use App\Models\StudyArea;
use Illuminate\Http\Request;

class StudyAreaController extends Controller
{

    public function index()
    {
        return view('app.account.study-areas.directions', [
            'studyAreas' => StudyArea::all()->sortBy('name'),
        ]);
    }

    public function create()
    {
        return view('app.account.study-areas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        StudyArea::create(['name' => $request->name]);
        return redirect()->route('directions.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(StudyArea $direction)
    {
        return view('app.account.study-areas.edit', [
            'area' => $direction,
        ]);
    }

    public function update(Request $request, StudyArea $direction)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $direction->update($request->all());
        return redirect()->route('directions.index');
    }

    public function destroy(StudyArea $direction)
    {
        if ($direction->courses()->count()) {
            return back()->with('errMessage', 'Напрвление привязано к курсам. Удаление невозможно!');
        }
        $direction->delete();
        return redirect()->route('directions.index');
    }
}

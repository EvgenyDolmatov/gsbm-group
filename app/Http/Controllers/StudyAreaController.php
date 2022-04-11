<?php

namespace App\Http\Controllers;

use App\Models\StudyArea;
use Illuminate\Http\Request;

class StudyAreaController extends Controller
{

    public function index()
    {
        return view('app.account.study-areas.directions', [
            'studyAreas' => StudyArea::all(),
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

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

        return redirect()->route('leaders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

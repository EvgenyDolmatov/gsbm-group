<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index()
    {
        return view('crm.professions.index', [
            'professions' => Profession::all()->sortBy("name"),
        ]);
    }

    public function create()
    {
        return view('crm.professions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "unique:professions"]
        ]);

        Profession::create($request->all());

        return redirect()->route("crm.professions.list");
    }

    public function edit(Profession $profession)
    {
        return view('crm.professions.edit', [
            "profession" => $profession
        ]);
    }

    public function update(Request $request, Profession $profession)
    {
        $request->validate([
            "name" => ["required", "unique:professions,name," . $profession->id]
        ]);

        $profession->update($request->all());

        return redirect()->route("crm.professions.list");
    }

    public function destroy(Profession $profession)
    {
        foreach ($profession->users as $user) {
            $user->update(["profession_id" => null]);
        }
        $profession->delete();

        return redirect()->route("crm.professions.list");
    }
}

<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\CRM\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function index()
    {
        return view("crm.directions.index", [
            "directions" => Direction::all()->sortBy("name"),
        ]);
    }

    public function create()
    {
        return view("crm.directions.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "unique:crm_directions"]
        ]);

        Direction::create($request->all());

        return redirect()->route("crm.directions.list");
    }

    public function edit(Direction $direction)
    {
        return view('crm.directions.edit', [
            "direction" => $direction
        ]);
    }

    public function update(Request $request, Direction $direction)
    {
        $request->validate([
            "name" => ["required", "unique:crm_directions,name," . $direction->id]
        ]);

        $direction->update($request->all());

        return redirect()->route("crm.directions.list");
    }

    public function destroy(Direction $direction)
    {
        $direction->delete();
        return redirect()->route("crm.directions.list");
    }
}

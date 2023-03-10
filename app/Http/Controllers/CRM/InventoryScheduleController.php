<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\CRM\InventoryItem;
use App\Models\CRM\InventorySchedule;
use App\Models\CRM\Profession;
use Illuminate\Http\Request;

class InventoryScheduleController extends Controller
{
    public function create(InventoryItem $inventory)
    {
        return view("crm.inventory.schedules.create", [
            "item" => $inventory,
            "professions" => Profession::all()->sortBy("name"),
        ]);
    }

    public function store(Request $request, InventoryItem $inventory)
    {
        $request->validate([
            'profession_id' => ["required"],
            'rate_per_year' => ["required"],
            'period' => ["required", "numeric"],
        ]);

        $sch = InventorySchedule::where("inventory_item_id", $inventory->id)->where("profession_id", $request->input("profession_id"))->first();
        if ($sch) {
            $sch->update([
                "rate_per_year" => $request->input("rate_per_year"),
                "period" => $request->input("period") ? $request->input("period") : 1,
            ])
            ;
        } else {
            InventorySchedule::add($request->all(), $inventory);
        }

        return redirect()->route("crm.inventory.show", $inventory);
    }

    public function edit(InventoryItem $inventory, InventorySchedule $schedule)
    {
        return view("crm.inventory.schedules.edit", [
            "item" => $inventory,
            "schedule" => $schedule,
            "professions" => Profession::all()->sortBy("name"),
        ]);
    }

    public function update(Request $request, InventoryItem $inventory, InventorySchedule $schedule)
    {
        $request->validate([
            'rate_per_year' => ["required"],
        ]);

        $schedule->update([
            'rate_per_year'=>$request->input('rate_per_year'),
            "period" => $request->input("period") ? $request->input("period") : 1,
        ]);
        return redirect()->route("crm.inventory.show", $inventory);
    }

    public function destroy(InventoryItem $inventory, InventorySchedule $schedule)
    {
        $schedule->delete();
        return back();
    }
}

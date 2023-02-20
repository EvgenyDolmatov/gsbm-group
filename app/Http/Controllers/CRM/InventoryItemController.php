<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\CRM\InventoryItem;
use App\Models\CRM\InventorySchedule;
use App\Models\CRM\LogArrivedInventoryItem;
use App\Models\CRM\Profession;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InventoryItemController extends Controller
{
    public function index()
    {
        return view("crm.inventory.index", [
            'invItems' => InventoryItem::all()->sortBy("name"),
        ]);
    }

    public function create()
    {
        return view("crm.inventory.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ["required"],
        ]);

        InventoryItem::create($request->all());
        return redirect()->route("crm.inventory.list");
    }

    public function show(InventoryItem $inventory)
    {
        return view('crm.inventory.show', [
            "item" => $inventory
        ]);
    }

    public function edit(InventoryItem $inventory)
    {
        return view("crm.inventory.edit", [
            "item" => $inventory,
        ]);
    }

    public function update(Request $request, InventoryItem $inventory)
    {
        $request->validate([
            'name' => ["required"],
        ]);

        $inventory->update(["name" => $request->input("name")]);

        return redirect()->route("crm.inventory.list");
    }

    public function destroy(InventoryItem $inventory)
    {
        $inventory->delete();
        return back();
    }

    public function addQty(InventoryItem $inventory)
    {
        return view("crm.inventory.add-inventory", [
           "item" => $inventory,
        ]);
    }

    public function updateQty(Request $request, InventoryItem $inventory)
    {
        $request->validate([
            'quantity' => ["required"],
        ]);
        $inventory->update([
            "quantity" => $inventory->quantity + $request->input("quantity")
        ]);
        LogArrivedInventoryItem::create([
            "user_id" => auth()->user()->id,
            "inventory_item_id" => $inventory->id,
            "quantity" => $request->input("quantity"),
            "arrive_date" => Carbon::now(),
        ]);

        return redirect()->route("crm.inventory.show", $inventory);
    }
}

<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\CRM\Employee;
use App\Models\CRM\InventoryItem;
use App\Models\CRM\LogIssuedInventoryItem;
use Illuminate\Http\Request;
use Throwable;

class InventoryIssueController extends Controller
{
    public function index()
    {
        return view("crm.inventory-issue.index", [
            "employees" => Employee::all()->sortBy("surname"),
            "items" => InventoryItem::all()->sortBy("name"),
        ]);
    }

    public function create(Employee $employee)
    {
        return view("crm.inventory-issue.create", [
            "employee" => $employee,
            "items" => InventoryItem::all()->sortBy("name"),
        ]);
    }

    public function store(Request $request, Employee $employee)
    {
        $request->validate([
            "inventory_item_id" => ["required"],
            "quantity" => ["required", "numeric"],
            "issue_date" => ["required", "date"],
        ]);

        $issuedItem = LogIssuedInventoryItem::add($request->all(), $employee);
        $item = InventoryItem::find($issuedItem->inventory_item_id);
        $item->update(["quantity" => $item->quantity - $issuedItem->quantity]);
        return redirect()->route("crm.inventory-issue.list");
    }

    public function edit(Employee $employee, LogIssuedInventoryItem $issuedInventory)
    {
        return view("crm.inventory-issue.edit", [
            "employee" => $employee,
            "items" => InventoryItem::all()->sortBy("name"),
            "issuedInventory" => $issuedInventory,
        ]);
    }

    public function update(Request $request, Employee $employee, LogIssuedInventoryItem $issuedInventory)
    {
        $request->validate([
            "quantity" => ["required", "numeric"],
            "issue_date" => ["required", "date"],
        ]);

        try {
            $item = InventoryItem::find($issuedInventory->inventory_item_id);
            $resetQty = $item->quantity + $issuedInventory->quantity;
            $issuedInventory->update($request->all());
            $item->update(["quantity" => $resetQty - $request->quantity]);
        } catch (Throwable $e) {
            report($e);
            return false;
        }

        return redirect()->route("crm.inventory-issue.list");
    }

    public function destroy(Employee $employee, LogIssuedInventoryItem $issuedInventory)
    {
        try {
            $item = InventoryItem::find($issuedInventory->inventory_item_id);
            $item->update(["quantity" => $item->quantity + $issuedInventory->quantity]);
            $issuedInventory->delete();
        } catch (Throwable $e) {
            report($e);
            return false;
        }

        return back();
    }
}

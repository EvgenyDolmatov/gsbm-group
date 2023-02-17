<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\CRM\Employee;
use App\Models\CRM\MedInspection;
use Illuminate\Http\Request;

class MedInspectionController extends Controller
{
    public function index()
    {
        return view("crm.med-inspections.index", [
            "employees" => Employee::all()->sortBy("surname")
        ]);
    }

    public function create(Employee $employee)
    {
        return view("crm.med-inspections.create", [
            "employee" => $employee
        ]);
    }

    public function store(Request $request, Employee $employee)
    {
        $request->validate([
            "type" => ["required"],
            "inspection_date" => ["required","date"],
        ]);

        MedInspection::addByEmployee($request->all(), $employee);
        return redirect()->route("crm.med-inspections.list");
    }

    public function edit(MedInspection $medInspection)
    {
        return view("crm.med-inspections.edit", [
            "medInspection" => $medInspection
        ]);
    }

    public function update(Request $request, MedInspection $medInspection)
    {
        $request->validate([
            "inspection_date" => ["required","date"],
        ]);

        $medInspection->update($request->all());
        return redirect()->route("crm.med-inspections.list");
    }

    public function destroy(MedInspection $medInspection)
    {
        $medInspection->delete();
        return back();
    }
}

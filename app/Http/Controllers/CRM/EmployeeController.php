<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\CRM\Company;
use App\Models\CRM\Employee;
use App\Models\CRM\Profession;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view("crm.employees.index", [
            "employees" => Employee::all()->sortBy("surname"),
        ]);
    }

    public function create()
    {
        return view("crm.employees.create", [
            "companies" => Company::all()->sortBy("name"),
            "professions" => Profession::all()->sortBy("name"),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'surname' => 'required|max:30',
            'name' => 'required|max:30',
            'email' => 'nullable|email|unique:crm_employees',
            'phone' => 'nullable|unique:crm_employees',
            'clothing_size' => 'nullable|string|max:255',
            'shoe_size' => 'nullable|string|max:255',
            'height' => 'nullable|integer',
            'employment_date' => 'nullable|date',
        ]);

        Employee::create($request->all());
        return redirect()->route("crm.employees.list");
    }

    public function edit(Employee $employee)
    {
        return view("crm.employees.edit", [
            "employee" => $employee,
            "companies" => Company::all()->sortBy("name"),
            "professions" => Profession::all()->sortBy("name"),
        ]);
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'surname' => 'required|max:30',
            'name' => 'required|max:30',
            'email' => 'nullable|email|unique:crm_employees,email,' . $employee->id,
            'phone' => 'nullable|unique:crm_employees,phone,' . $employee->id,
            'clothing_size' => 'nullable|string|max:255',
            'shoe_size' => 'nullable|string|max:255',
            'height' => 'nullable|integer',
            'employment_date' => 'nullable|date',
        ]);

        $employee->update($request->all());
        return redirect()->route("crm.employees.list");
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back();
    }
}

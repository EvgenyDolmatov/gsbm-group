<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function edit(User $employee)
    {
        return view("crm.employees.edit", [
            "employee" => $employee,
            "companies" => Company::all()->sortBy("name"),
            "professions" => Profession::all()->sortBy("name"),
        ]);
    }

    public function update(Request $request, User $employee)
    {
        $request->validate([
            'surname' => 'required|max:30',
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users,email,' . $employee->id,
            'phone' => 'nullable|unique:users,phone,' . $employee->id,
        ]);

        $employee->update($request->all());

        return redirect()->route("crm.attestations.list");
    }
}

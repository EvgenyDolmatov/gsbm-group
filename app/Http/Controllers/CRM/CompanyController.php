<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view("crm.companies.index", [
            'companies' => Company::all(),
        ]);
    }

    public function create()
    {
        return view("crm.companies.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "unique:companies"]
        ]);

        Company::create($request->all());

        return redirect()->route("crm.companies.list");
    }

    public function edit(Company $company)
    {
        return view("crm.companies.edit", [
            "company" => $company
        ]);
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            "name" => ["required"]
        ]);

        $company->update($request->all());

        return redirect()->route("crm.companies.list");
    }

    public function destroy(Company $company)
    {
        foreach ($company->users as $user) {
            $user->update(["company_id" => null]);
        }
        $company->delete();

        return redirect()->route("crm.companies.list");
    }
}

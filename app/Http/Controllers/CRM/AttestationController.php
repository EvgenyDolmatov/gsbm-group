<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\AttestationDocument;
use App\Models\StudyArea;
use App\Models\User;
use Illuminate\Http\Request;

class AttestationController extends Controller
{
    public function usersList()
    {
        return view("crm.attestation.index", [
            "employees" => User::all()->sortBy("surname"),
            "studyAreas" => StudyArea::all()->sortBy("name"),
        ]);
    }

    public function addDocument(User $employee)
    {
        return view("crm.attestation.add", [
            "employee" => $employee,
            "studyAreas" => StudyArea::all()->sortBy("name"),
        ]);
    }

    public function storeDocument(Request $request, User $employee)
    {
        $request->validate([
            "study_area_id" => ["required"],
            "type" => ["required"],
            "number" => ["required"],
            "valid_from" => ["required"],
            "valid_to" => ["required"],
        ]);

        AttestationDocument::add($request->all(), $employee);
        return redirect()->route("crm.attestations.list");
    }
}

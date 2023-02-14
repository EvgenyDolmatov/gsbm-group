<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\CRM\Attestation;
use App\Models\CRM\AttestationDocument;
use App\Models\CRM\Direction;
use App\Models\CRM\Employee;
use Illuminate\Http\Request;

class AttestationController extends Controller
{
    public function usersList()
    {
        return view("crm.attestation.index", [
            "employees" => Employee::all()->sortBy("surname"),
            "directions" => Direction::all()->sortBy("name"),
        ]);
    }

    public function create(Employee $employee)
    {
        return view("crm.attestation.create", [
            "employee" => $employee,
            "directions" => Direction::all()->sortBy("name"),
        ]);
    }

    public function store(Request $request, Employee $employee)
    {
        $request->validate([
            "direction_id" => ["required"],
            "protocol_number" => ["required"],
            "protocol_valid_from" => ["required"],
            "protocol_valid_to" => ["required"],
            "certificate_valid_from" => ["required_with:certificate_number"],
            "certificate_valid_to" => ["required_with:certificate_number"],
        ]);

        // Создаем аттестацию
        $attestation = Attestation::where("employee_id", $employee->id)->where("direction_id", $request->direction_id)->first();
        if (!$attestation) {
            $attestation = Attestation::create([
                "employee_id" => $employee->id,
                "direction_id" => $request->direction_id,
            ]);
        }

        // Прикрепляем протокол к аттестации
        AttestationDocument::create([
            "attestation_id" => $attestation->id,
            "type" => "protocol",
            "doc_number" => $request->protocol_number,
            "valid_from" => $request->protocol_valid_from,
            "valid_to" => $request->protocol_valid_to,
        ]);

        // Прикрепляем свидетельство/удостоверение к аттестации
        if ($request->has("certificate_number") && $request->input("certificate_number") !== null) {
            AttestationDocument::create([
                "attestation_id" => $attestation->id,
                "type" => "certificate",
                "doc_number" => $request->certificate_number,
                "valid_from" => $request->certificate_valid_from,
                "valid_to" => $request->certificate_valid_to,
            ]);
        }

        return redirect()->route("crm.attestations.list");
    }

    public function edit(Attestation $attestation)
    {
        return view("crm.attestation.edit", [
            "attestation" => $attestation,
            "directions" => Direction::all()->sortBy("name"),
        ]);
    }

    public function update(Request $request, Attestation $attestation)
    {
        $request->validate([
            "protocol_number" => ["required"],
            "protocol_valid_from" => ["required"],
            "protocol_valid_to" => ["required"],
        ]);

        // Обновляем протокол
        $attestation->documents->where("type", "protocol")->last()->update([
            "doc_number" => $request->protocol_number,
            "valid_from" => $request->protocol_valid_from,
            "valid_to" => $request->protocol_valid_to,
        ]);

        // Создаем/обновляем свидетельство
        if ($request->has("certificate_number") && $request->input("certificate_number") !== null) {
            if ($attestation->documents->where("type", "certificate")->last()) {
                $attestation->documents->where("type", "certificate")->last()->update([
                    "doc_number" => $request->certificate_number,
                    "valid_from" => $request->certificate_valid_from,
                    "valid_to" => $request->certificate_valid_to,
                ]);
            } else {
                AttestationDocument::create([
                    "attestation_id" => $attestation->id,
                    "type" => "certificate",
                    "doc_number" => $request->certificate_number,
                    "valid_from" => $request->certificate_valid_from,
                    "valid_to" => $request->certificate_valid_to,
                ]);
            }
        }

        return redirect()->route("crm.attestations.list");
    }
}

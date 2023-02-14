<?php

use App\Http\Controllers\CRM\AttestationController;
use App\Http\Controllers\CRM\CompanyController;
use App\Http\Controllers\CRM\CRMController;
use App\Http\Controllers\CRM\DirectionController;
use App\Http\Controllers\CRM\EmployeeController;
use App\Http\Controllers\CRM\ProfessionController;
use Illuminate\Support\Facades\Route;


// CRM
Route::prefix('crm')->middleware(['role:super-admin|admin'])->group(function () {
    Route::get("/", [CRMController::class, "dashboard"])->name("crm.dashboard");

    // Attestation
    Route::prefix("attestation")->group(function (){
        Route::get("/", [AttestationController::class, "usersList"])->name("crm.attestations.list");
        Route::get("{employee}/add", [AttestationController::class, "addDocument"])->name("crm.attestation.add");
        Route::post("{employee}/add", [AttestationController::class, "storeDocument"])->name("crm.attestation.store");
    });

    // Companies
    Route::prefix("companies")->group(function (){
        Route::get("/", [CompanyController::class, "index"])->name("crm.companies.list");
        Route::get("create", [CompanyController::class, "create"])->name("crm.companies.create");
        Route::post("create", [CompanyController::class, "store"])->name("crm.companies.store");
        Route::get("{company}/edit", [CompanyController::class, "edit"])->name("crm.companies.edit");
        Route::put("{company}/edit", [CompanyController::class, "update"])->name("crm.companies.update");
        Route::delete("{company}", [CompanyController::class, "destroy"])->name("crm.companies.destroy");
    });
    // Profession
    Route::prefix("professions")->group(function (){
        Route::get("/", [ProfessionController::class, "index"])->name("crm.professions.list");
        Route::get("create", [ProfessionController::class, "create"])->name("crm.professions.create");
        Route::post("create", [ProfessionController::class, "store"])->name("crm.professions.store");
        Route::get("{profession}/edit", [ProfessionController::class, "edit"])->name("crm.professions.edit");
        Route::put("{profession}/edit", [ProfessionController::class, "update"])->name("crm.professions.update");
        Route::delete("{profession}", [ProfessionController::class, "destroy"])->name("crm.professions.destroy");
    });
    // Directions
    Route::prefix("directions")->group(function (){
        Route::get("/", [DirectionController::class, "index"])->name("crm.directions.list");
        Route::get("create", [DirectionController::class, "create"])->name("crm.directions.create");
        Route::post("create", [DirectionController::class, "store"])->name("crm.directions.store");
        Route::get("{direction}/edit", [DirectionController::class, "edit"])->name("crm.directions.edit");
        Route::put("{direction}/edit", [DirectionController::class, "update"])->name("crm.directions.update");
        Route::delete("{direction}", [DirectionController::class, "destroy"])->name("crm.directions.destroy");
    });
    // Users
    Route::prefix("employees")->group(function (){
        Route::get("{employee}/edit", [EmployeeController::class, "edit"])->name("crm.employees.edit");
        Route::put("{employee}/edit", [EmployeeController::class, "update"])->name("crm.employees.update");
    });
});


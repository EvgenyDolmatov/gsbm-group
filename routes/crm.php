<?php

use App\Http\Controllers\CRM\AttestationController;
use App\Http\Controllers\CRM\CompanyController;
use App\Http\Controllers\CRM\CRMController;
use App\Http\Controllers\CRM\DirectionController;
use App\Http\Controllers\CRM\EmployeeController;
use App\Http\Controllers\CRM\InventoryIssueController;
use App\Http\Controllers\CRM\InventoryItemController;
use App\Http\Controllers\CRM\InventoryScheduleController;
use App\Http\Controllers\CRM\MedInspectionController;
use App\Http\Controllers\CRM\ProfessionController;
use Illuminate\Support\Facades\Route;


// CRM
Route::prefix('crm')->middleware(['role:super-admin|admin|leader'])->group(function () {
    Route::get("/", [CRMController::class, "dashboard"])->name("crm.dashboard");

    // Companies
    Route::prefix("companies")->group(function () {
        Route::get("/", [CompanyController::class, "index"])->name("crm.companies.list");
        Route::group(['middleware' => ['role:super-admin|admin']], function () {
            Route::get("create", [CompanyController::class, "create"])->name("crm.companies.create");
            Route::post("create", [CompanyController::class, "store"])->name("crm.companies.store");
            Route::get("{company}/edit", [CompanyController::class, "edit"])->name("crm.companies.edit");
            Route::put("{company}/edit", [CompanyController::class, "update"])->name("crm.companies.update");
            Route::delete("{company}", [CompanyController::class, "destroy"])->name("crm.companies.destroy");
        });
    });
    // Profession
    Route::prefix("professions")->group(function () {
        Route::get("/", [ProfessionController::class, "index"])->name("crm.professions.list");
        Route::group(['middleware' => ['role:super-admin|admin']], function () {
            Route::get("create", [ProfessionController::class, "create"])->name("crm.professions.create");
            Route::post("create", [ProfessionController::class, "store"])->name("crm.professions.store");
            Route::get("{profession}/edit", [ProfessionController::class, "edit"])->name("crm.professions.edit");
            Route::put("{profession}/edit", [ProfessionController::class, "update"])->name("crm.professions.update");
            Route::delete("{profession}", [ProfessionController::class, "destroy"])->name("crm.professions.destroy");
        });
    });
    // Directions
    Route::prefix("directions")->group(function () {
        Route::get("/", [DirectionController::class, "index"])->name("crm.directions.list");
        Route::group(['middleware' => ['role:super-admin|admin']], function () {
            Route::get("create", [DirectionController::class, "create"])->name("crm.directions.create");
            Route::post("create", [DirectionController::class, "store"])->name("crm.directions.store");
            Route::get("{direction}/edit", [DirectionController::class, "edit"])->name("crm.directions.edit");
            Route::put("{direction}/edit", [DirectionController::class, "update"])->name("crm.directions.update");
            Route::delete("{direction}", [DirectionController::class, "destroy"])->name("crm.directions.destroy");
        });
    });
    // Employees
    Route::prefix("employees")->group(function () {
        Route::get("/", [EmployeeController::class, "index"])->name("crm.employees.list");
        Route::group(['middleware' => ['role:super-admin|admin']], function () {
            Route::get("create", [EmployeeController::class, "create"])->name("crm.employees.create");
            Route::post("create", [EmployeeController::class, "store"])->name("crm.employees.store");
            Route::get("{employee}/edit", [EmployeeController::class, "edit"])->name("crm.employees.edit");
            Route::put("{employee}/edit", [EmployeeController::class, "update"])->name("crm.employees.update");
            Route::delete("{employee}", [EmployeeController::class, "destroy"])->name("crm.employees.destroy");
        });
    });
    // Attestations
    Route::prefix("attestations")->group(function () {
        Route::get("/", [AttestationController::class, "usersList"])->name("crm.attestations.list");
        Route::group(['middleware' => ['permission:manage attestation']], function () {
            Route::get("{employee}/create", [AttestationController::class, "create"])->name("crm.attestations.create");
            Route::post("{employee}/create", [AttestationController::class, "store"])->name("crm.attestations.store");
            Route::get("{attestation}/edit", [AttestationController::class, "edit"])->name("crm.attestations.edit");
            Route::put("{attestation}/edit", [AttestationController::class, "update"])->name("crm.attestations.update");
            Route::delete("{attestation}", [AttestationController::class, "destroy"])->name("crm.attestations.destroy");
        });
    });
    // Medical Inspection
    Route::prefix("medical")->group(function () {
        Route::get("/", [MedInspectionController::class, "index"])->name("crm.med-inspections.list");
        Route::group(['middleware' => ['permission:manage medical']], function () {
            Route::get("{employee}/create", [MedInspectionController::class, "create"])->name("crm.med-inspections.create");
            Route::post("{employee}/create", [MedInspectionController::class, "store"])->name("crm.med-inspections.store");
            Route::get("{medInspection}/edit", [MedInspectionController::class, "edit"])->name("crm.med-inspections.edit");
            Route::put("{medInspection}/edit", [MedInspectionController::class, "update"])->name("crm.med-inspections.update");
            Route::delete("{medInspection}", [MedInspectionController::class, "destroy"])->name("crm.med-inspections.destroy");
        });
    });
    // Inventory
    Route::prefix("inventory")->group(function () {
        Route::get("/", [InventoryItemController::class, "index"])->name("crm.inventory.list");
        Route::group(['middleware' => ['permission:manage inventory']], function () {
            Route::get("create", [InventoryItemController::class, "create"])->name("crm.inventory.create");
            Route::post("create", [InventoryItemController::class, "store"])->name("crm.inventory.store");
            Route::get("{inventory}/show", [InventoryItemController::class, "show"])->name("crm.inventory.show");
            Route::get("{inventory}/edit", [InventoryItemController::class, "edit"])->name("crm.inventory.edit");
            Route::put("{inventory}/edit", [InventoryItemController::class, "update"])->name("crm.inventory.update");
            Route::delete("{inventory}", [InventoryItemController::class, "destroy"])->name("crm.inventory.destroy");
            Route::get("{inventory}/add", [InventoryItemController::class, "addQty"])->name("crm.inventory.add-qty");
            Route::put("{inventory}/add", [InventoryItemController::class, "updateQty"])->name("crm.inventory.update-qty");
            // Inventory schedule
            Route::get("{inventory}/schedule/create", [InventoryScheduleController::class, "create"])->name("crm.inventory.schedule.create");
            Route::post("{inventory}/schedule/create", [InventoryScheduleController::class, "store"])->name("crm.inventory.schedule.store");
            Route::get("{inventory}/schedule/{schedule}/edit", [InventoryScheduleController::class, "edit"])->name("crm.inventory.schedule.edit");
            Route::put("{inventory}/schedule/{schedule}/edit", [InventoryScheduleController::class, "update"])->name("crm.inventory.schedule.update");
            Route::delete("{inventory}/schedule/{schedule}", [InventoryScheduleController::class, "destroy"])->name("crm.inventory.schedule.destroy");
        });
    });
    
    Route::prefix("inventory-issue")->group(function () {
        Route::get("/", [InventoryIssueController::class, "index"])->name("crm.inventory-issue.list");
        Route::group(['middleware' => ['permission:manage inventory']], function () {
            Route::get("{employee}/create", [InventoryIssueController::class, "create"])->name("crm.inventory-issue.create");
            Route::post("{employee}/create", [InventoryIssueController::class, "store"])->name("crm.inventory-issue.store");
        });
    });
});


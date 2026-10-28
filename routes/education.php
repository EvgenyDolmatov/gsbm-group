<?php

use App\Http\Controllers\Education\SvedenController;
use App\Http\Controllers\EducationController;

Route::prefix('education')->name('education.')->group(function () {
    Route::prefix('sveden')->name('sveden.')->group(function () {
        Route::get('common', [SvedenController::class, 'commonView'])->name('common');
        Route::get('struct', [SvedenController::class, 'structView'])->name('struct');
        Route::get('document', [SvedenController::class, 'documentView'])->name('document');
        Route::get('education', [SvedenController::class, 'educationView'])->name('education');
        Route::get('eduStandards', [SvedenController::class, 'eduStandardsView'])->name('eduStandards');
        Route::get('managers', [SvedenController::class, 'managersView'])->name('managers');
        Route::get('employees', [SvedenController::class, 'employeesView'])->name('employees');
        Route::get('objects', [SvedenController::class, 'objectsView'])->name('objects');
        Route::get('piad_edu', [SvedenController::class, 'paidEduView'])->name('paidEdu');
        Route::get('budget', [SvedenController::class, 'budgetView'])->name('budget');
        Route::get('vacant', [SvedenController::class, 'vacantView'])->name('vacant');
        Route::get('grants', [SvedenController::class, 'grantsView'])->name('grants');
        Route::get('inter', [SvedenController::class, 'interView'])->name('inter');
        Route::get('catering', [SvedenController::class, 'cateringView'])->name('catering');
    });

    Route::prefix('services')->group(function (){
        Route::get('price', [EducationController::class, 'educationPrice'])->name('price');
        Route::get('outsourcing/price', [EducationController::class, 'outsourcingPrice'])->name('outsourcing.price');
    });

    Route::prefix('forms')->group(function () {
        Route::get('full-time', [EducationController::class, 'fullTimeStudyView'])->name('forms.full-time');
        Route::get('distance', [EducationController::class, 'distanceStudyView'])->name('forms.distance');
        Route::get('remote', [EducationController::class, 'remoteStudyView'])->name('forms.remote');
    });

    Route::prefix('documents')->group(function () {
        Route::get('permits', [EducationController::class, 'permitsDocsView'])->name('docs.permits');
        Route::get('local', [EducationController::class, 'localDocsView'])->name('docs.local');
    });

    Route::prefix('about')->group(function () {
        Route::get('contacts', [EducationController::class, 'contactsView'])->name('about.contacts');
        Route::get('reviews', [EducationController::class, 'reviewsView'])->name('about.reviews');
    });
});

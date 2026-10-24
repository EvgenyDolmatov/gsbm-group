<?php

namespace App\Http\Controllers\Education;

use App\Http\Controllers\Controller;

class SvedenController extends Controller
{
    public function commonView()
    {
        return view('app.education.sveden.common');
    }

    public function structView()
    {
        return view('app.education.sveden.struct');
    }

    public function documentView()
    {
        return view('app.education.sveden.document');
    }

    public function educationView()
    {
        return view('app.education.sveden.education');
    }

    public function eduStandardsView()
    {
        return view('app.education.sveden.edu-standards');
    }

    public function managersView()
    {
        return view('app.education.sveden.managers');
    }

    public function employeesView()
    {
        return view('app.education.sveden.employees');
    }

    public function objectsView()
    {
        return view('app.education.sveden.objects');
    }

    public function paidEduView()
    {
        return view('app.education.sveden.paid-edu');
    }

    public function budgetView()
    {
        return view('app.education.sveden.budget');
    }

    public function vacantView()
    {
        return view('app.education.sveden.vacant');
    }

    public function grantsView()
    {
        return view('app.education.sveden.grants');
    }

    public function interView()
    {
        return view('app.education.sveden.inter');
    }

    public function cateringView()
    {
        return view('app.education.sveden.catering');
    }
}

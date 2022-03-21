<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    /*
     * Основные сведения
     */
    public function mainInformationView()
    {
        return view('app.education.info.main-info');
    }

    public function structureView()
    {
        return view('app.education.info.structure');
    }

    public function standardsView()
    {
        return view('app.education.info.standards');
    }

    public function teachersView()
    {
        return view('app.education.info.teachers');
    }

    public function permitsDocsView()
    {
        return view('app.education.documents.docs');
    }

    /*
     * Направления обучения
     */
    public function safetyAndHealth()
    {
        return view('app.education.directions.price-safety-and-health');
    }

    /*
     * Формы обучения
     */
    public function fullTimeStudyView()
    {
        return view('app.education.study-forms.full-time');
    }

    public function distanceStudyView()
    {
        return view('app.education.study-forms.full-time');
    }

    public function remoteStudyView()
    {
        return view('app.education.study-forms.full-time');
    }

    /*
     * Документы
     */
    public function localDocsView()
    {
        return view('app.education.documents.docs');
    }

    /*
     * Об учебном центре
     */
    public function contactsView()
    {
        return view('app.education.about.contacts');
    }

    public function reviewsView()
    {
        return view('app.education.about.reviews');
    }
}

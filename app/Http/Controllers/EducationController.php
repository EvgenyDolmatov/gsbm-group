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

    /*
     * Платные услуги
     */
    public function educationPrice()
    {
        return view('app.education.services.price-education');
    }

    public function outsourcingPrice()
    {
        return view('app.education.services.price-outsourcing');
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
        return view('app.education.study-forms.distance');
    }

    public function remoteStudyView()
    {
        return view('app.education.study-forms.full-time');
    }

    /*
     * Документы
     */
    public function permitsDocsView()
    {
        return view('app.education.documents.docs-permits');
    }

    public function localDocsView()
    {
        return view('app.education.documents.docs');
    }

    public function safetyDocsView()
    {
        return view('app.education.documents.docs-safety');
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

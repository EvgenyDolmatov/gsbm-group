<?php

namespace App\Http\Controllers;

class EducationController extends Controller
{
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

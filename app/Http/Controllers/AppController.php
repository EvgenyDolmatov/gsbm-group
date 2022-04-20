<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function frontPage()
    {
        return view('app.front-page', [
            'services' => Service::all()->sortBy('priority'),
        ]);
    }

    public function contactsPage()
    {
        return view('app.contacts');
    }

    public function aboutPage()
    {
        return view('app.about');
    }

    public function licenseesPage()
    {
        return view('app.licensees');
    }

    public function privacyPolicyPage()
    {
        return view('app.privacy-policy');
    }
}

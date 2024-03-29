<?php

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CRMController extends Controller
{
    public function dashboard()
    {
        return view("crm.dashboard", [
            "user" => auth()->user(),
        ]);
    }
}

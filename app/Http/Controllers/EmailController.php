<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackConsultMail;
use App\Mail\FeedbackMail;
use App\Mail\FeedbackPartnerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function mailFeedbackData(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
        ]);

        $customer = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        );

        // info@gsbm-group.ru
        Mail::to('no-reply@gsbm-group.ru')->send(new FeedbackMail($customer));

        return back()->with('success', 'Ваше сообщение успешно отпарвлено!');
    }

    public function mailFeedbackConsultData(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'comment' => ['required'],
        ]);

        $customer = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'comment' => $request->comment,
        );

        // info@gsbm-group.ru
        Mail::to('no-reply@gsbm-group.ru')->send(new FeedbackConsultMail($customer));

        return back()->with('success', 'Ваше сообщение успешно отпарвлено!');
    }

    public function mailFeedbackPartnerData(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'comment' => ['required'],
        ]);

        $customer = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'comment' => $request->comment,
        );

        // info@gsbm-group.ru
        Mail::to('no-reply@gsbm-group.ru')->send(new FeedbackPartnerMail($customer));

        return back()->with('success', 'Ваше сообщение успешно отпарвлено!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackConsultMail;
use App\Mail\FeedbackMail;
use App\Mail\FeedbackPartnerMail;
use App\Mail\FeedbackResumeMail;
use App\Models\EmployeeRequest;
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

        Mail::to('no-reply@gsbm-group.ru')->send(new FeedbackPartnerMail($customer));

        return back()->with('success', 'Ваше сообщение успешно отпарвлено!');
    }


    public function mailFeedbackResume(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:30',
            'phone' => 'required',
            'email' => 'required|email',
            'resume' => 'required|mimes:doc,docx,pdf'
        ]);

        $employeeRequest = EmployeeRequest::create($request->all());
        $employeeRequest->uploadFile($request->file('resume'));

        Mail::to('k.zhdahina@gsbm-group.ru')->send(new FeedbackResumeMail($employeeRequest));

        return back()->with('success', 'Ваше резюме успешно отпарвлено! Мы скоро с Вами свяжемся.');
    }
}

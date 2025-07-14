<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function showForm()
    {
        return view('emails.email-form');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            // '' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::raw($request->message, function ($mail) use ($request) {
            $mail->to('gauravrathore93150@gmail.com')
                 ->subject($request->subject);
        });

        return back()->with('success', 'Email sent successfully!');
    }
}

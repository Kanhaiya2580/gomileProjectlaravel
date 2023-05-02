<?php

namespace App\Http\Controllers;

use App\Mail\SendMail as MailSendMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Version;

class SendMail extends Controller
{
    public function send_mail()
    {
        return view('send_email');
    }

    public function register(Request $request)
    {
        // $request->flash();
        // $input = $request->collect();
        // $extension = $request->file->extension();
        // $extension2 = $request->file->path();
        // dd($extension2);

        $mailaddress = $request->email;
        $details = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
        ];
        try {
            Mail::to($mailaddress)->send(new MailSendMail($details));
            return back()->with('message_sent', 'your Feedback message has been sent to your mail');
        } catch (Exception $th) {
            return back()->with('message_sent', 'somthing went wrong');
        }
    }
    public function testGit()
    {
        dd(version()->short());
        // $version = app(Version::class)->format();
        // dd($version);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use Illuminate\Support\Support\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class SendController extends Controller
{
    public function send(MailRequest $request){

        $details = [
            'email' => 'email form' . $request->email ,
            'body' => $request->message
        ];
        Mail::to('mohsenmnassri7@gmail.com')->send(new SendMail($details));
        return redirect('/welcome')->with('status','succesfull send');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ConfrimEmail;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function sendMail($email)
    {
        Mail::to($email)->send(new ConfrimEmail());
        return view('Mail.ConfirmEmail');
    }

}

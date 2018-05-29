<?php

namespace App\Http\Controllers\Email;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfirmEmailController extends Controller
{
    public function clickemaillink($token)
    {
        if (User::where('email_token', $token)) {
            User::where('email_token', $token)->update(['email_token' => NULL]);
            return redirect()->back()->with('success-message', ['Email Confirmed Successfully']);
        }
    }
}

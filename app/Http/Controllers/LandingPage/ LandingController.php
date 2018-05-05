<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  LandingController extends Controller
{
    public function home()
    {
        return view('helpmehome');

    }

    public function signUP()
    {
        return view('auth.register');
    }
}

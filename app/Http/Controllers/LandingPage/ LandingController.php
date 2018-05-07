<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  LandingController extends Controller
{
    /**
     *
     * return Application home landing page
     */
    public function home()
    {
        return view('helpmehome');

    }

    /**
     * return signup from the landing page
     */
    public function signUP()
    {
        return view('auth.register');
    }
}

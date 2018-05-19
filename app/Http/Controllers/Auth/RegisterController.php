<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\ConfrimEmail;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param RegisterRequest $Request for a new user
     */
    public function register(RegisterRequest $Request)
    {

        $user = User::create([
            'name'        => $Request->name,
            'email'       => $Request->email,
            'subject'     => $Request->subject,
            'school'      => $Request->school,
            'email_token' => str_random(16),
            'password'    => Hash::make($Request->password),

        ]);
        $this->sendMail($user->email, $user->email_token);
        return redirect('login')->with('messages');


    }

    /**
     * @param sending email and Email token to user
     * @param $token
     */
    public function sendMail($email, $token)
    {
        Mail::to($email)->send(new ConfrimEmail($token));

    }

    /*
     * On clicking email confirmation link sent
     *
     */


}

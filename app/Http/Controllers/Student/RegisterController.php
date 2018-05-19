<?php

namespace App\Http\Controllers\Student;

use App\Http\Requests\Student\CompleteRegistrationRequest;
use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SchoolLocations;

class RegisterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Returning View For completing registration
     */
    public function showRegistrationForm()
    {
        return view('student.registration.register',
            ['counties' => SchoolLocations::get(['county', 'id'])]);
    }

    public function saveRegistationForm(CompleteRegistrationRequest $request)
    {
        //dd($request->toArray());
        Detail::create([
            'userId' => auth()->user()->id,
            'county'  => $request->county,
            'school'  => $request->school,
            'admNo'   => $request->admNo,
            'form'    => $request->form,

        ]);
        return redirect('home')->with(session()->flash('success-message', ['Registration Successfull ']));


    }

}

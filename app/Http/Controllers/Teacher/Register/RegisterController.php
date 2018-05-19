<?php

namespace App\Http\Controllers\Teacher\Register;

use App\Http\Requests\Teacher\CompleteRegistrationRequest;
use App\Models\SchoolLocations;
use App\Models\TeacherDetail;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('teacher.register.register',
            ['counties' => SchoolLocations::get(['county', 'id'])]);
    }

    public function saveTeacherData(CompleteRegistrationRequest $request)
    {
        TeacherDetail::create([
            'userId'     => auth()->user()->id,
            'school'     => $request->school,
            'county'     => $request->county,
            'tscNo'      => $request->tscNo,
            'maths'      => $request->maths,
            'english'    => $request->english,
            'kishwahili' => $request->kishwahili,

        ]);
        return redirect('home')->with(session()->flash('success-message', ['Registration Successfull ']));

    }

}

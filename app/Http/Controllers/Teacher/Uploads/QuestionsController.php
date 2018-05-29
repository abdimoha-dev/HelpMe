<?php

namespace App\Http\Controllers\Teacher\Uploads;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{
    public function showClasses()
    {
        return view('dashboard.teacher.uploads.Q&A.allClasses');

    }
}

<?php

namespace App\Http\Controllers\Teacher\Uploads;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadsController extends Controller
{
    public function uploads()
    {
        return view('dashboard.teacher.uploads.upload');
    }
}

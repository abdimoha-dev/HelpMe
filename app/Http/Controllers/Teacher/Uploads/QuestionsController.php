<?php

namespace App\Http\Controllers\Teacher\Uploads;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{
    public function showQuestionsForm()
    {
        return view('dashboard.teacher.uploads.Q&A.questions');

    }

    public function saveQuestions(Request $request)
    {
//        dd($request->toArray());
        Question::create([
            'class'   => $request->class,
            'subject' => $request->subject,
            'topic'   => $request->topic,
        ]);

    }
}

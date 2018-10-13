<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Job;
use Auth;
use App\Mail\ContactEmployer;
use App\Employer;

class JobsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('jobs');
    }

    public function show(Job $job) {
        //if (Auth::user()->lang != 'en') {
            //$translator = new \Dedicated\GoogleTranslate\Translator;
            //$view = view('jobs', compact('job'))->render();
            //$result = $translator->setSourceLang('en')
                                 //->setTargetLang(Auth::user()->lang)
                                 //->translate($view);
            //return $result;
        //}
        return view('jobs', compact('job'));
    }

    public function email(Request $request) {
        $request->validate([
            'body' => 'required',
            'employerid' => 'required'
        ]);

        $employer = Employer::find($request->employerid);

        Mail::to($employer->email)->send(new ContactEmployer(Auth::user(), $request->body));


        return back();
    }

    public function chat() {
        return view('chat');
    }
}

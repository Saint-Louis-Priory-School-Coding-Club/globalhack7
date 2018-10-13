<?php

namespace App\Http\Controllers;
use Auth;
use App\Job;
use App\Employer;
use App\Experience;
use App\User;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function lang(Request $request) {
        $translator = new \Dedicated\GoogleTranslate\Translator;
        $view = view('jobs')->render();
        $result = $translator->setSourceLang('en')
                             ->setTargetLang($request->code)
                             ->translate($view);
        return $result;
    }
}

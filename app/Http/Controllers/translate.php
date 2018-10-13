<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class translate extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $translator = new \Dedicated\GoogleTranslate\Translator;
      $view = view('jobs')->render();
      $result = $translator->setSourceLang('en')
                           ->setTargetLang('fr')
                           ->translate($view);
        return $result;
    }
}

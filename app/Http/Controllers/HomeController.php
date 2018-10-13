<?php

namespace App\Http\Controllers;
use Auth;
use App\Experience;

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
        if (Auth::user()->lang) {
            return view('home');
        }

        $experiences = Experience::all();
        return view('postregistration', compact('experiences'));
    }

    public function finishReg(Request $request) {
        $request->validate([
            'sex' => 'required',
            'country' => 'required',
            'lang1' => 'required',
            'bday' => 'required',
            'experience' => 'required'
        ]);

        $user = Auth::user();

        $user->sex = $request->sex;
        $user->country = $request->country;
        $user->lang1 = $request->lang1;
        $user->lang2 = $request->lang2;
        $user->bday = $request->bday;
        $user->experiences()->attach($request->experience);
        $user->save();


        return redirect('/');
    }

    public function lang(Request $request) {
        $translator = new \Dedicated\GoogleTranslate\Translator;
        $view = view('postregistration')->render();
        $result = $translator->setSourceLang('en')
                             ->setTargetLang($request->code)
                             ->translate($view);
        return $result;
    }
}

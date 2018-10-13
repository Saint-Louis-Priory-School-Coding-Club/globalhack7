<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function show() {
        return view('jobs');
    }

    public function chat() {
        return view('chat');
    }
}

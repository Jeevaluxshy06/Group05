<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

    public function index(){
        $slmc = Auth::user()->slmc;
        return view('dashboard',compact('slmc'));
    }
}

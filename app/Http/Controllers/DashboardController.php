<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function candidate(){
        return view('candidate.dashboard');
    }
    public function admin(){
        return view('admin.dashboard');
    }
    public function mentor(){
        return view('mentor.dashboard');
    }
}

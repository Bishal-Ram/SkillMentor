<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\User;

class MentorController extends Controller
{
    //
    public function index(){
        $mentors = Mentor::with('user')
    ->whereHas('user', function ($query) {
        $query->where('role', 'mentor');
    })
    ->get();
        return view('candidate.mentors',compact('mentors'));

    }
}

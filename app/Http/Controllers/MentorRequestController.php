<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MentorRequest;

class MentorRequestController extends Controller
{
    //

public function create()
{
    return view('candidate.apply_mentor');
}


public function store(Request $request)
{
    $userId = auth()->id();

    $exists = MentorRequest::where('user_id',$userId)
                ->where('status','pending')
                ->exists();

    if($exists){
        return back()->with('error','Request already submitted');
    }

    MentorRequest::create([
        'user_id' => $userId,
        'company' => $request->company,
        'designation' => $request->designation,
        'experience_years' => $request->experience_years,
        'skills' => $request->skills,
        'hourly_rate' => $request->hourly_rate,
        'bio' => $request->bio
    ]);

    return back()->with('success','Request submitted');
}
}

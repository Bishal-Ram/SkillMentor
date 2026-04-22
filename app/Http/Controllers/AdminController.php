<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Interview;
use App\Models\Mentor;
use App\Models\MentorRequest;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
    
        return view('admin.users',compact('users'));
    }

public function interviews()
{
    $interviews = Interview::with([
        'candidate',
        'mentor.user',
        'slot'
    ])->get();

    return view('admin.interviews', compact('interviews'));
}

public function mentors()
{
    $mentors = Mentor::with('user')->get();

    return view('admin.mentors', compact('mentors'));
}

public function mentorRequests()
{
    $requests = MentorRequest::with('user')
                ->where('status','pending')
                ->get();

    return view('admin.mentor-requests',compact('requests'));
}

//approve mentor request
public function approveMentor(Request $request)
{
    $req = MentorRequest::find($request->id);

    User::where('id',$req->user_id)
        ->update(['role'=>'mentor']);

    Mentor::create([
        'user_id' => $req->user_id,
        'company' => $req->company,
        'designation' => $req->designation,
        'experience_years' => $req->experience_years,
        'skills' => $req->skills,
        'hourly_rate' => $req->hourly_rate,
        'bio' => $req->bio
    ]);

    $req->update(['status'=>'approved']);

    return back();
}
}

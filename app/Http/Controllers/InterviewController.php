<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\InterviewSlot;
use App\Models\Interview;
use Illuminate\Support\Facades\Auth;


class InterviewController extends Controller
{
    //
    public function showSlots($mentorId)
{

    $mentor = Mentor::findOrFail($mentorId);

    $slots = InterviewSlot::where('mentor_id',$mentorId)
                ->where('is_booked',false)
                ->get();

    return view('candidate.slots',compact('mentor','slots'));
}

public function bookSlot(Request $request)
{

    $user = auth()->user();

    Interview::create([

        'candidate_id' => $user->id,
        'mentor_id' => $request->mentor_id,
        'slot_id' => $request->slot_id

    ]);

    InterviewSlot::where('id',$request->slot_id)
        ->update(['is_booked' => true]);

    return redirect()->back()->with('success','Interview booked');

}
public function myInterviews()
{

    $user = auth()->user();

    $interviews = Interview::with(['mentor.user','slot'])
                    ->where('candidate_id',$user->id)
                    ->get();

    return view('candidate.my_interviews',compact('interviews'));
}
}

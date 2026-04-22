<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\InterviewSlot;
use App\Models\Interview;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;

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

public function mentorInterviews()
{
    $mentor = auth()->user()->mentor;

    if(!$mentor){
        return redirect('/mentor/dashboard');
    }

    $interviews = Interview::with([
        'candidate',
        'slot',
        'feedback'   // ✅ ADD THIS
    ])
    ->where('mentor_id',$mentor->id)
    ->get();

    return view('mentor.interviews',compact('interviews'));
}
public function markCompleted(Request $request)
{
    Interview::where('id',$request->id)
        ->update(['status' => 'completed']);

    return redirect()->back()->with('success','Interview completed');
}

//feedback

public function feedbackForm($id)
{
    $interview = Interview::findOrFail($id);

    return view('mentor.feedback', compact('interview'));
}

public function storeFeedback(Request $request)
{
    Feedback::create([
        'interview_id' => $request->interview_id,
        'rating' => $request->rating,
        'comments' => $request->comments
    ]);

    return redirect('/mentor/interviews');
}

public function performance()
{
    $interviews = Interview::with([
        'mentor.user',
        'feedback'
    ])
    ->where('candidate_id',auth()->id())
    ->get();

    return view('candidate.performance',compact('interviews'));
}

public function downloadPdf()
{
    $interviews = Interview::with([
        'mentor.user',
        'feedback',
        'slot'
    ])
    ->where('candidate_id',auth()->id())
    ->get();

    $pdf = Pdf::loadView('candidate.performance_pdf', compact('interviews'));

    return $pdf->download('performance_report.pdf');
}
}

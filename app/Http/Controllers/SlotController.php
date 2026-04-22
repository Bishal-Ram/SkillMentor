<?php
// app/Http/Controllers/SlotController.php
namespace App\Http\Controllers;
use App\Models\InterviewSlot;
use App\Models\Mentor;

use Illuminate\Http\Request;

class SlotController extends Controller
{
    //
    public function store(Request $request)
{

    $mentor = auth()->user()->mentor;

    InterviewSlot::create([
        'mentor_id' => $mentor->id,
        'date' => $request->date,
        'start_time' => $request->start_time,
        'end_time' => $request->end_time
    ]);

    return redirect()->back()->with('success','Slot Created');

}
}

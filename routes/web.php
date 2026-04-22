<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MentorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MentorRequestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    if(auth()->check()){

        if(auth()->user()->role == 'admin'){
            return redirect('/admin/dashboard');
        }

        if(auth()->user()->role == 'mentor'){
            return redirect('/mentor/dashboard');
        }

        return redirect('/candidate/dashboard');
    }

    return view('landing');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');
require __DIR__.'/auth.php';

Route::middleware(['auth','role:candidate'])->group(function(){
    Route::get('/candidate/dashboard', function () {
        return view('candidate.dashboard');
    })->name('candidate.dashboard');   
    Route::get('/mentors',[MentorController::class,'index']);
    Route::get('/mentor/{id}/slots',
    [InterviewController::class,'showSlots']);
      Route::get('/my-interviews',
        [InterviewController::class,'myInterviews']);

    Route::post('/book-slot',
    [InterviewController::class,'bookSlot']);

    Route::get('/apply-mentor',
    [MentorRequestController::class,'create']);

    Route::post('/apply-mentor',
    [MentorRequestController::class,'store']);

    Route::get('/performance',
    [InterviewController::class,'performance']);

    Route::get('/performance/pdf',
    [InterviewController::class,'downloadPdf']);

});
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');   
    Route::get('/admin/users',
    [AdminController::class,'users']);

    Route::get('/admin/interviews',
    [AdminController::class,'interviews']);

    Route::get('/admin/mentors',
    [AdminController::class,'mentors']);

    Route::get('/admin/mentor-requests',
    [AdminController::class,'mentorRequests']);

    Route::post('/admin/approve-mentor',
    [AdminController::class,'approveMentor']);
});
Route::middleware(['auth','role:mentor'])->group(function(){
    Route::get('/mentor/dashboard', function () {
        return view('mentor.dashboard');
    })->name('mentor.dashboard');   

    Route::get('/mentor/create-slot', function(){
        return view('mentor.create_slot');
    });

    Route::post('/mentor/slots',[SlotController::class,'store']);


    Route::get('/mentor/interviews',
        [InterviewController::class,'mentorInterviews']);

    Route::post('/interview/complete',
        [InterviewController::class,'markCompleted']);

    Route::get('/interview/{id}/feedback',
    [InterviewController::class,'feedbackForm']);

Route::post('/interview/feedback',
    [InterviewController::class,'storeFeedback']);
    
});


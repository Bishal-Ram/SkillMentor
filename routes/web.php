<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MentorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\InterviewController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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
});
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');   
});
Route::middleware(['auth','role:mentor'])->group(function(){
    Route::get('/mentor/dashboard', function () {
        return view('mentor.dashboard');
    })->name('mentor.dashboard');   

    Route::get('/mentor/create-slot', function(){
        return view('mentor.create_slot');
    });

    Route::post('/mentor/slots',[SlotController::class,'store']);
});

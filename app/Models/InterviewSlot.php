<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewSlot extends Model
{
    use HasFactory;
    protected $fillable = [
    'mentor_id',
    'date',
    'start_time',
    'end_time',
    'is_booked'
];
public function mentor()
{
    return $this->belongsTo(Mentor::class);
}
public function slots()
{
    return $this->hasMany(InterviewSlot::class);
}
}

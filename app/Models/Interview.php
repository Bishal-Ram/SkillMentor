<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $fillable = [
    'candidate_id',
    'mentor_id',
    'slot_id',
    'status'
];
public function candidate()
{
    return $this->belongsTo(User::class,'candidate_id');
}

public function mentor()
{
    return $this->belongsTo(Mentor::class,'mentor_id');
}

public function slot()
{
    return $this->belongsTo(InterviewSlot::class,'slot_id');
}
public function feedback()
{
    return $this->hasOne(Feedback::class);
}
}

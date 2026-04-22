<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MentorRequest extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'designation',
        'experience_years',
        'skills',
        'hourly_rate',
        'bio',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
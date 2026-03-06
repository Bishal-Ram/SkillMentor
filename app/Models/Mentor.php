<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'company',
    'designation',
    'experience_years',
    'skills',
    'hourly_rate',
    'bio'
];
public function user()
{
    return $this->belongsTo(User::class);
}
}

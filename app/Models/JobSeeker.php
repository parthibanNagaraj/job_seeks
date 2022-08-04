<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class JobSeeker extends Model
{
     use HasApiTokens, HasFactory, Notifiable;
	
	protected $fillable = [
        'name',
        'email',
        'phone',
        'experience',
		'notice_period',
		'skill',
		'job_location',
		'resume',
		'photo',
		'user_id',
		'status',
    ];
}

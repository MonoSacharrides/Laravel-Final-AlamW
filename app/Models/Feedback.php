<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'course_id',
        'rating',
        'feedback',
        'anonymous',
        'comments', // Add this field if applicable
    ];
}


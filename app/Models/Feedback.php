<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'rating', 'feedback', 'anonymous'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

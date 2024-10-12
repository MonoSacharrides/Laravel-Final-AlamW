<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;    use HasFactory;

    protected $fillable = ['name', 'course', 'description'];

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}



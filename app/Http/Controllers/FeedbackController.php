<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request, Course $course)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string|max:1000',
            'anonymous' => 'boolean',
        ]);

        Feedback::create([
            'course_id' => $course->id,
            'rating' => $validated['rating'],
            'feedback' => $validated['feedback'],
            'anonymous' => $request->has('anonymous'),
        ]);

        return redirect()->back()->with('message', 'Feedback submitted successfully!');
    }
}

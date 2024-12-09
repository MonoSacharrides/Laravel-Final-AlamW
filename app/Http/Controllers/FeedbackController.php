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
        'comments' => 'nullable|string|max:1000',
    ]);

    Feedback::create([
        'course_id' => $course->id,
        'rating' => $validated['rating'],
        'feedback' => $validated['feedback'],
        'anonymous' => $request->has('anonymous'),
        'comments' => $request->input('comments', ''),
    ]);

    return redirect()->route('show.feedback', ['course' => $course->id])
        ->with('message', 'Feedback submitted successfully!');
}




    public function index(Course $course)
    {
        $feedbacks = $course->feedbacks;

        return view('feedback.index', compact('course', 'feedbacks'));
    }

    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.edit', compact('feedback'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string|max:1000',
            'anonymous' => 'boolean',
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update([
            'rating' => $validated['rating'],
            'feedback' => $validated['feedback'],
            'anonymous' => $request->has('anonymous'),
        ]);

        // Get the course ID from the feedback
        $courseId = $feedback->course_id;

        return redirect()->route('show.feedback', ['course' => $courseId])->with('message', 'Feedback updated successfully!');
    }

    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        // Get the course ID from the feedback
        $courseId = $feedback->course_id;

        return redirect()->route('show.feedback', ['course' => $courseId])->with('message', 'Feedback deleted successfully!');
    }

    public function back($courseId)
    {
        return redirect()->route('show.feedback', ['course' => $courseId]);
    }
}



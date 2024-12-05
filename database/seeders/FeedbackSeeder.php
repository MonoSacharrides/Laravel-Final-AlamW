<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;
use App\Models\Course;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            Feedback::create([
                'course_id' => $course->id,

                'comments' => 'Great course! Learned a lot.',
                'rating' => 5,
            ]);

            Feedback::create([
                'course_id' => $course->id,

                'comments' => 'The instructor was very helpful.',
                'rating' => 4,
            ]);
        }
    }
}

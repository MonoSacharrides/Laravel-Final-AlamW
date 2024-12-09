<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            Feedback::factory()->create([
                'course_id' => $course->id,
            ]);
        }
    }
}

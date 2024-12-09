<?php

namespace Database\Factories;

use App\Models\Feedback;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;

    public function definition()
    {
        return [
            'course_id' => Course::inRandomOrder()->first()->id,
            'comments' => $this->faker->sentence(),
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}


<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CourseFactory extends Factory
{
    protected $model = \App\Models\Course::class;

    public function definition()
    {
        return [
            'course_name' => $this->faker->words(2, true),
            'teacher' => $this->faker->name(),
            'description' => $this->faker->sentence(12),
        ];
    }
}

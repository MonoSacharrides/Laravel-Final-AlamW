<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition()
    {
        static $codes = [
            'CAST', 'CON', 'COE', 'CABM', 'CABM-H', 'CRIM', 'GRAD'
        ];

        $code = array_shift($codes);

        return [
            'name' => $this->faker->unique()->randomElement([
                'CAST',
                'CON',
                'COE',
                'CABM',
                'CABM-H',
                'CRIM',
                'Graduate School'
            ]),
            'code' => $code,
            'description' => $this->faker->sentence(8),
        ];
    }
}

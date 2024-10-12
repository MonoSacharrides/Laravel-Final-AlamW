<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            ['name' => 'CAST', 'code' => 'CAST', 'description' => 'College of Arts and Sciences Technology'],
            ['name' => 'CON', 'code' => 'CON', 'description' => 'College of Nursing'],
            ['name' => 'COE', 'code' => 'COE', 'description' => 'College of Education'],
            ['name' => 'CABM', 'code' => 'CABM', 'description' => 'College of Accountancy and Business Management'],
            ['name' => 'CABM-H', 'code' => 'CABM-H', 'description' => 'College of Accountancy and Business Management - Hospitality'],
            ['name' => 'CRIM', 'code' => 'CRIM', 'description' => 'College of Criminal Justice'],
            ['name' => 'Graduate School', 'code' => 'GRAD', 'description' => 'Graduate Studies Department'],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}

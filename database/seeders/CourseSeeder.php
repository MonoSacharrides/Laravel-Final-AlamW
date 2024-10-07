<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'course_name' => 'Indigenous People',
            'teacher' => 'Prof. Sheryl Enriquez',
            'description' => 'An exploration of the cultures, histories, and contributions of Indigenous peoples worldwide.'
        ]);

        Course::create([
            'course_name' => 'Vue',
            'teacher' => 'Prof. Jhon Loyd Catalan',
            'description' => 'Master Vue.js to create engaging user interfaces and single-page applications.'
        ]);

        Course::create([
            'course_name' => 'Flutter Dart',
            'teacher' => 'Prof. Jhon Loyd Catalan',
            'description' => 'Learn to develop cross-platform applications with Flutter using the Dart programming language.'
        ]);

        Course::create([
            'course_name' => 'Laravel',
            'teacher' => 'Prof. Jhon Loyd Catalan',
            'description' => 'A comprehensive guide to building web applications using the Laravel framework.'
        ]);

        Course::create([
            'course_name' => 'Web System',
            'teacher' => 'Prof. Angela Lenteria',
            'description' => 'Design and implement dynamic web applications with modern technologies and best practices.'
        ]);

        Course::create([
            'course_name' => 'Networking',
            'teacher' => 'Prof. Rixc Rosco',
            'description' => 'Understand the principles of computer networking and explore network design and security.'
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID for the course
            $table->string('course_name'); // Course name
            $table->string('teacher'); // Teacher assigned to the course
            $table->string('description'); // Description of the course

            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses'); // Drop the courses table if it exists
    }
}

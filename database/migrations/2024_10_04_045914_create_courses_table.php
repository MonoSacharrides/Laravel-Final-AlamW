<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
{
    Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('course_name');
        $table->string('teacher');
        $table->string('description');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

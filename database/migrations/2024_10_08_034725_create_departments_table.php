<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID for the department
            $table->string('name'); // Department name
            $table->string('code')->unique(); // Unique code for the department
            $table->text('description')->nullable(); // Optional description of the department
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments'); // Drop the departments table if it exists
    }
};

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
        Schema::create('faculty_course', function (Blueprint $table) {
            $table->id('faculty_course_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('course_id');

            $table->foreign('faculty_id')->references('faculty_id')->on('faculty');
            $table->foreign('course_id')->references('course_id')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_course');
    }
};

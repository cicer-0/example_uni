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
        Schema::create('course', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('name', 255);
            $table->text('description');
            $table->integer('credit_hours');
            $table->string('level', 50);
            $table->unsignedBigInteger('department_id');

            $table->foreign('department_id')->references('department_id')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};

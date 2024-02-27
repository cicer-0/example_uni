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
        Schema::create('department', function (Blueprint $table) {
            $table->id('department_id');
            $table->unsignedBigInteger('faculty_id');
            $table->string('name', 255);
            $table->string('head', 255);
            $table->string('contact_email', 100);

            $table->foreign('faculty_id')->references('faculty_id')->on('faculty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department');
    }
};

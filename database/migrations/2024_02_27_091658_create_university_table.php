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
        Schema::create('university', function (Blueprint $table) {
            $table->id('university_id');
            $table->string('name', 255);
            $table->string('location', 100);
            $table->integer('founding_year');
            $table->string('motto', 255);
            $table->string('website', 255);
            $table->string('contact_email', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university');
    }
};

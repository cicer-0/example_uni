<?php

namespace Database\Factories;

use App\Models\Faculty;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacultyFactory extends Factory
{
    protected $model = Faculty::class;

    public function definition()
    {
        return [
            'university_id' => University::factory(),
            'name' => $this->faker->unique()->word(),
            'dean_name' => $this->faker->name(),
            'contact_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}

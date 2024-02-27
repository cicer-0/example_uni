<?php

namespace Database\Factories;

use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class UniversityFactory extends Factory
{
    protected $model = University::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company(),
            'location' => $this->faker->city(),
            'founding_year' => $this->faker->numberBetween(1800, 2022),
            'motto' => $this->faker->sentence(),
            'website' => $this->faker->url(),
            'contact_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}

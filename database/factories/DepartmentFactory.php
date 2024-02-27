<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition()
    {
        return [
            'faculty_id' => Faculty::factory(),
            'name' => $this->faker->unique()->word(),
            'head' => $this->faker->name(),
            'contact_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}

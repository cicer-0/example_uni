<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->sentence(3),
            'description' => $this->faker->paragraph(),
            'credit_hours' => $this->faker->numberBetween(1, 5),
            'level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'department_id' => Department::factory(),
        ];
    }
}

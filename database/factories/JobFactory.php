<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => rtrim($this->faker->sentence(rand(4,9)), '.'),
            'salary' => $this->faker->randomFloat(2, 30000, 150000),
        ];
    }
}

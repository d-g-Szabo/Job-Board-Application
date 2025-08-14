<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job_listings>
 */
class Job_ListingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'company_name' => fake()->company(),
            'job_type' => fake()->randomElement(['full_time', 'part_time', 'contract']),
            'location' => fake()->city(),
            'description' => fake()->paragraph(),
            'salary_range' => fake()->numberBetween(50000, 150000),
            'expires_at' => fake()->dateTimeBetween('+1 week', '+1 month'),
        ];
    }
}

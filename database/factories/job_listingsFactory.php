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

        $description = '';
        for ($i=0; $i < 5; $i++) { 
            $description .= '<p class="mb-4">' . fake()->paragraph(rand(5, 10), true) . "</p>\n";
        }

        return [
            'title' => fake()->jobTitle(),
            'company_name' => fake()->company(),
            'job_type' => fake()->randomElement(['full_time', 'part_time', 'contract']),
            'location' => fake()->city(),
            'description' => fake()->paragraph(),
            'expires_at' => fake()->dateTimeBetween('-1 week', '+1 month'),
        ];
    }
}

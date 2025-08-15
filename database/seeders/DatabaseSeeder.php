<?php

namespace Database\Seeders;

use App\Models\job_listings;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Belamov\PostgresRange\Ranges\IntegerRange;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Tag::factory(10)->create();

        // If the user is Employer, create job listings

        $tags = Tag::factory(10)->create();

        User::factory(20)->create()->each(function (User $user) use($tags) {
            if ($user->role === 'employer') {
                $minSalary = rand(50000, 80000);
                $maxSalary = rand(100000, 150000);
        
                job_listings::factory(rand(1, 4))->create([
                    'user_id' => $user->id,
                    'salary_range' => new IntegerRange($minSalary, $maxSalary),
                ])->each(function (job_listings $job) use($tags) {
                    $job->tag()->attach($tags->random(rand(1, max: 3)));
                });
            }
        });
    }


}

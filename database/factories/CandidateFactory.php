<?php

namespace Database\Factories;

use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_listing_id' => null,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'location' => $this->faker->city,
            'description' => $this->faker->paragraph,
            'linkedin' => $this->faker->url,
            'github' => $this->faker->url,
            'twitter' => $this->faker->url,
            'website' => $this->faker->url,
            'portfolio' => $this->faker->url,
            'origin' => $this->faker->word,
            'resume' => $this->faker->url,
            'rating' => $this->faker->numberBetween(0, 5),
            'order_column' => $this->faker->numberBetween(0, 100),
            'candidate_status_id' => null,
        ];
    }
}

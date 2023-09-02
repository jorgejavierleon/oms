<?php

namespace Database\Factories;

use App\Enums\JobListingStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->optional(0.8)->paragraph,
            'internal_id' => $this->faker->randomNumber(6),
            'team_id' => null,
            'status' => JobListingStatus::OPEN
        ];
    }
}

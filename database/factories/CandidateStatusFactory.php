<?php

namespace Database\Factories;

use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CandidateStatus>
 */
class CandidateStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Applied',
                'Phone Screen',
                'Interview',
                'Final Interview',
                'Reference Check',
                'Background Check',
                'Testing',
                'Waiting for Offer',
                'Offer',
                'Hired',
                'Rejected',
            ]),
            'color' => $this->faker->hexColor,
            'order_column' => $this->faker->numberBetween(1, 10),
            'is_default' => false,
            'job_listing_id' => JobListing::factory(),
        ];
    }
}

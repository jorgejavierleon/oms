<?php

namespace Database\Factories;

use App\Models\Meeting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Meeting>
 */
class MeetingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'start_at' => null,
            'end_at' => null,
            'meeting_type' => $this->faker->randomElement(['one_on_one', 'general']),
            'completed_at' => null,
        ];
    }
}

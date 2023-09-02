<?php

namespace Database\Factories;

use App\Models\OneOnOneEntry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TalkingPoint>
 */
class TalkingPointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'one_on_one_entry_id' => OneOnOneEntry::factory(),
            'description' => $this->faker->sentence,
            'is_checked' => false,
            'order_column' => 0,
            'created_by' => null,
        ];
    }
}

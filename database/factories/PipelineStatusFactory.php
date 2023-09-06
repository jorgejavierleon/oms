<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PipelineStatus>
 */
class PipelineStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'pipeline_id' => PipelineFactory::new(),
            'order_column' => $this->faker->numberBetween(1, 20),
            'color' => $this->faker->hexColor,
            'is_default' => false,
        ];
    }
}

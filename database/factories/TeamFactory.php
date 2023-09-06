<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    public function definition(): array
    {
        $teams = [
            'Accounting',
            'Administration',
            'Customer Service',
            'Engineering',
            'Finance',
            'Human Resources',
            'Information Technology',
            'Legal',
            'Marketing',
            'Production',
            'Purchasing',
            'Research and Development',
            'Sales',
            'Training',
        ];

        return [
            'name' => $this->faker->randomElement($teams),
            'description' => $this->faker->sentence,
            'leader_id' => User::factory(),
        ];
    }
}

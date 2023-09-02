<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        $firstName = $this->faker->firstName();
        $lastName = $this->faker->lastName();
        $trigram = Str::upper(Str::substr($firstName, 0, 1) . Str::substr($lastName, 0, 2));
        return [
            'position_id' => null,
            'name' =>  $firstName . ' ' . $lastName,
            'email' => fake()->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber,
            'trigram' => $trigram,
            'address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' => 'null',
            'country' => $this->faker->country,
            'emergency_contact_name' => $this->faker->name,
            'emergency_contact_phone' => $this->faker->phoneNumber,
            'birthdate' => $this->faker->dateTimeThisCentury()->format('Y-m-d H:i:s'),
            'joined_at' => $this->faker->dateTimeThisCentury()->format('Y-m-d H:i:s'),
            'exited_at' => null,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn () => [
            'email_verified_at' => null,
        ]);
    }
}

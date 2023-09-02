<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createJohnDoe();
        $users = $this->createUsers();
        foreach ($users as $user) {
            $this->addPosition($user);
            $user->save();
        }
    }

    protected function createJohnDoe(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email_verified_at' => now(),
            'position_id' => Position::first()->id,
        ]);
    }

    protected function createUsers(): mixed
    {
        return User::factory(20)->create([
            'position_id' => null,
        ]);
    }

    protected function addPosition(mixed $user): void
    {
        $position = Position::inRandomOrder()
            ->first();
        $user->position()->associate($position);
    }
}

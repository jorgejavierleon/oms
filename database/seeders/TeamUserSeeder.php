<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class TeamUserSeeder extends Seeder
{
    public function run(): void
    {
        $teams = Team::all();
        foreach ($teams as $team) {
            $team->users()->attach(
                User::inRandomOrder()
                    ->limit(rand(1, 5))
                    ->pluck('id')
                    ->toArray()
            );
        }
        $teams->each(function ($team) {
            if (! $team->users->count()) {
                return;
            }
            $team->leader_id = $team->users->random()->id;
            $team->save();
        });
    }
}

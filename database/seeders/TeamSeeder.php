<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamNames = [
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

        $teams = collect($teamNames)->random(5);
        $teams->each(function ($team) {
            Team::factory()->create([
                'name' => $team,
                'leader_id' => null
            ]);
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class DirectReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Team::all() as $team) {
            $manager = $team->leader;
            if ($manager === null) {
                continue;
            }
            $employees = $team->users()->where('users.id', '!=', $manager->id)->get();
            foreach ($employees as $employee) {
                $employee->managers()->attach($manager->id);
            }
        }
    }
}

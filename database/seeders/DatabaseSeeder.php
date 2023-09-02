<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PositionSeeder::class,
            UserSeeder::class,
            TeamSeeder::class,
            TeamUserSeeder::class,
            DirectReportSeeder::class,
            OneOnOneSuggestionSeeder::class,
            PipelineSeeder::class,
            JobListingSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Enums\JobListingStatus;
use App\Models\Candidate;
use App\Models\CandidateStatus;
use App\Models\JobListing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            JobListingStatus::OPEN->value => 2,
            JobListingStatus::CLOSED->value => 1,
            JobListingStatus::ARCHIVED->value => 3,
        ];
        foreach ($statuses as $status => $count) {
            $this->createJobListings($status, $count);
        }
    }

    protected function createJobListings(int $status, int $count): void
    {
        $jobListings = JobListing::factory()->count($count)->create(
            [
                'status' => $status,
            ]
        );

        $jobListings->each(function (JobListing $jobListing) {
            $statuses = CandidateStatus::factory()->count(3)->create([
                'job_listing_id' => $jobListing->id,
            ]);
            $jobListing->recruiters()->attach(
                User::inRandomOrder()->take(2)->pluck('id')->toArray()
            );
            $candidates = Candidate::factory()->count(10)->create([
                'job_listing_id' => $jobListing->id,
            ]);
            $candidates->each(function (Candidate $candidate) use ($statuses) {
                $candidate->update([
                    'candidate_status_id' => $statuses->random()->id,
                ]);
            });
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperCandidate
 */
class Candidate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobListing(): BelongsTo
    {
        return $this->belongsTo(JobListing::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(CandidateStatus::class, 'candidate_status_id');
    }

    public function buildSortQuery(): Builder
    {
        return static::query()
            ->where('job_listing_id', $this->job_listing_id)
            ->where('candidate_status_id', $this->candidate_status_id);
    }
}

<?php

namespace App\Models;

use App\Enums\JobListingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperJobListing
 */
class JobListing extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'status' => JobListingStatus::class
    ];

    public function recruiters(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'job_listing_user',
            'job_listing_id',
            'user_id'
        );
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function candidateStatuses(): HasMany
    {
        return $this->hasMany(CandidateStatus::class);
    }

    public function candidates(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }
}

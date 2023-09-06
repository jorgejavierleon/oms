<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperActionItem
 */
class ActionItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'due_date' => 'datetime',
    ];

    public function responsable(): BelongsTo
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }

    public function meetings(): BelongsToMany
    {
        return $this->belongsToMany(Meeting::class)
            ->withPivot('order', 'is_original');
    }

    public function originalMeetings(): BelongsToMany
    {
        return $this->belongsToMany(Meeting::class)
            ->wherePivot('is_original', true);
    }

    public function isDueThisWeek(): bool
    {
        $today = Carbon::today();
        $nextWeek = Carbon::today()->addWeek();

        return $this->due_date->between($today, $nextWeek);
    }

    public function isDueInTheFuture(): bool
    {
        $nextWeek = Carbon::today()->addWeek();

        return $this->due_date->gt($nextWeek);
    }

    public function isOverDue(): bool
    {
        $today = Carbon::today();

        return $this->due_date->lt($today);
    }

    public function dueDateColor(): string
    {
        if ($this->is_completed) {
            return 'gray';
        }

        if ($this->isOverDue()) {
            return 'red';
        }

        if ($this->isDueThisWeek()) {
            return 'yellow';
        }

        return 'gray';
    }
}

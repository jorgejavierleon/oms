<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * @mixin IdeHelperMeeting
 */
class Meeting extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'completed_at' => 'datetime',
    ];

    public const ONE_ON_ONE_TYPE = 'one_on_one';

    public const GENERAL_TYPE = 'general';

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'meeting_participants')
            ->withPivot('is_organizer', 'notes');
    }

    public function talkingPoints(): HasMany
    {
        return $this->hasMany(TalkingPoint::class)->orderBy('order_column');
    }

    public function actionItems(): BelongsToMany
    {
        return $this->belongsToMany(ActionItem::class)
            ->withPivot('order', 'is_original')
            ->orderByPivot('order');
    }

    public function notes(): MorphMany
    {
        return $this->morphMany(Note::class, 'noteable');
    }

    public function isComplete(): bool
    {
        return $this->completed_at !== null;
    }

    public function scopeOneOnOne(Builder $query): void
    {
        $query->where('meeting_type', '=', self::ONE_ON_ONE_TYPE);
    }

    public function scopeCompleted(Builder $query): void
    {
        $query->where('completed_at', '<>', null);
    }

    public function scopePending(Builder $query): void
    {
        $query->where('completed_at', '=', null);
    }
}

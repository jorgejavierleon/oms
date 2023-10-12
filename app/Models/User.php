<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Str;
use Illuminate\Support\Collection;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, Searchable, InteractsWithMedia;

    const AVATAR_MEDIA_COLLECTION = 'avatar';

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }

    public function managers(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'direct_reports',
            'employee_id',
            'manager_id'
        );
    }

    public function isManagerOf(User $user): bool
    {
        return $this->managers->contains($user);
    }

    public function directReporters(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'direct_reports',
            'manager_id',
            'employee_id'
        );
    }

    public function meetingTemplates(): HasMany
    {
        return $this->hasMany(MeetingTemplate::class);
    }

    public function actionItems(): HasMany
    {
        return $this->hasMany(ActionItem::class, 'responsable_id');
    }

    public function JobListings(): BelongsToMany
    {
        return $this->belongsToMany(JobListing::class);
    }

    protected function trigram(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getTrigramString(),
        );
    }

    public function getTrigramString(): string
    {
        $userName = Str::of($this->name)->trim();
        $words = $userName->explode(' ');
        $firstLetter = substr($words->first(), 0, 1);
        $firstLetterLastName = substr($words->last(), 0, 1);
        $lastLetter = substr($userName, -1);

        return Str::of($firstLetter)
            ->append($firstLetterLastName, $lastLetter)
            ->upper();
    }

    public function toSearchableArray(): array
    {
        return [
            'id' => (int) $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection(self::AVATAR_MEDIA_COLLECTION)
            ->useFallbackUrl('images/default-avatar.png')
            ->singleFile();
    }

    public function getAvatarUrl(): string
    {
        return $this->getFirstMediaUrl(self::AVATAR_MEDIA_COLLECTION, 'thumb');
    }

    /**
     * Without fallback.
     */
    public function getAvatarUrlOrNull(): ?string
    {
        $media = $this->getFirstMedia(self::AVATAR_MEDIA_COLLECTION);

        return $media?->getUrl('thumb');

    }

    public function getInitials(): string
    {
        $nameParts = explode(' ', $this->name);
        $initials = '';
        foreach ($nameParts as $namePart) {
            $initials .= substr($namePart, 0, 1);
        }
        $initials = substr($initials, 0, 2);

        return $initials;
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }

    /**
     * Scope a query to only include posible managers.
     */
    public function scopePosibleManagers(Builder $query, User $user): void
    {
        $query->where('id', '!=', $user->id)
            ->whereDoesntHave('managers', function (Builder $query) use ($user) {
                $query->where('manager_id', $user->id);
            });
    }

    /**
     * Scope a query to only include posible managers.
     */
    public function scopePosibleDirectReporters(Builder $query, User $user): void
    {
        $query->where('id', '!=', $user->id)
            ->whereDoesntHave('directReporters', function (Builder $query) use ($user) {
                $query->where('employee_id', $user->id);
            });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperMeetingTemplateItem
 */
class MeetingTemplateItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function template(): BelongsTo
    {
        return $this->belongsTo(MeetingTemplate::class);
    }
}

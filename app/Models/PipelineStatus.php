<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperPipelineStatus
 */
class PipelineStatus extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pipeline(): BelongsTo
    {
        return $this->belongsTo(Pipeline::class);
    }

    public function buildSortQuery(): Builder
    {
        return static::query()->where('pipeline_id', $this->pipeline_id);
    }
}

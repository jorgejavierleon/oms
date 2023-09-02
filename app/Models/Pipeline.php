<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperPipeline
 */
class Pipeline extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function statuses(): HasMany
    {
        return $this->hasMany(PipelineStatus::class);
    }
}

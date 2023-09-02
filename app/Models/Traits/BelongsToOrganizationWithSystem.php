<?php

namespace App\Models\Traits;

use App\Models\Organization;
use App\Scopes\OrganizationWithSystemScope;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToOrganizationWithSystem
{
    protected static function bootBelongsToOrganization()
    {
        static::addGlobalScope(new OrganizationWithSystemScope);
        static::creating(function ($model) {
            if (session()->has('organization_id')) {
                $model->organization_id = session()->get('organization_id');
            }
        });
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}

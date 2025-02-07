<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    /**
     * @return BelongsToMany<Agency>
     */
    public function agencies(): BelongsToMany
    {
        return $this->belongsToMany(Agency::class, 'client_agency_tier', 'client_id', 'agency_id')
            ->withPivot('tier');
    }
}

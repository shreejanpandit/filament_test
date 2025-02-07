<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'website',
    ];

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    /**
     * @return BelongsToMany<Client>
     */
    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'client_agency_tier', 'agency_id', 'client_id')
            ->withPivot('tier');
    }
}

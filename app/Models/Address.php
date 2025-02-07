<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * * @var string[]<int, string>
     */
    protected $fillable = [
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'zip_code',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * * @var array<string,string>
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function getFullAddressAttribute(): string
    {
        return ($this->address_line_1 ?? $this->address_line_2) . ' ' . $this->city . ' ' . $this->state?->name;
    }

    //    /**
    //     * @return BelongsTo<State, Address>
    //     **/
    //    public function state(): BelongsTo
    //    {
    //        return $this->belongsTo(State::class);
    //    }
}

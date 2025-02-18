<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientAgencyTier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * * @var string[]<int, string>
     */
    protected $fillable = [
        'client_id',
        'agency_id',
        'status',
        'tier',
        'global_speciality',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * * @var array<string,string>
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'agency_id' => 'integer',
        // 'status' => ApprovalStatus::class,
        // 'tier' => Tier::class,
        'global_speciality' => 'json',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    use HasFactory;

    protected $fillable = [
        'ship_id',
        'departure_at',
        'return_at',
    ];

    protected $casts = [
        'departure_at' => 'datetime',
        'return_at'    => 'datetime',
    ];

    public function getReadablePeriod($departure_at, $return_at)
    {
        return $departure_at->resource->format('d.m.Y').' - '.$return_at->resource->format('d.m.Y');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'name',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $attributes = [
        'active' => true,
    ];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function cruises()
    {
        return $this->hasMany(Cruise::class);
    }
}

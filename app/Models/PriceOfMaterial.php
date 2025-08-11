<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceOfMaterial extends Model
{
    protected $fillable = [
        'material',
        'type',
        'price_per_meter',
    ];

    protected $casts = [
        'price_per_meter' => 'decimal:2',
    ];
}

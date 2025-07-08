<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'section',
        'name', 
        'unit',
        'price',
        'link'
    ];
}

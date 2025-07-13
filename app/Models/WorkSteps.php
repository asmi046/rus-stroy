<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkSteps extends Model
{
    protected $fillable = [
        'step_number',
        'step_name',
        'description',
        'sub_description',
        'additional_description',
    ];
}

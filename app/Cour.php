<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $fillable = [
        'description',
        'price',
        'is_active',
        'image',
        'coach_id'
    ];
}

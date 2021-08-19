<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'coach_id', 'customer_id', 'cour_id', 'amount',
    ];
}

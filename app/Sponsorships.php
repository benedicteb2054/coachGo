<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Redirect;

class Sponsorships extends Model
{
    protected $fillable = [
        'sp_id', 'pa_id', 'earnings'
    ];

    function user(){
        return $this->belongsTo(User::class,'pa_id');
    }
}

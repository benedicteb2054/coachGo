<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPacks extends Model
{
    const NON_INVEST   = 'non-invest'; //Dont change it
    const INVEST         = 'invest'; //Dont change it

    protected $fillable = [
        'user_id', 'pack_id', 'is_active', 'status','reference'
    ];

    function pack(){
        return $this->belongsTo(Packs::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }
}

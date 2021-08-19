<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [
        'user_id', 'investment_id', 'user_pack_id', 'market_id', 'updated_at','created_at',
    ];

    public function pack(){
        return $this->belongsTo(Packs::class);
    }

    public function UserPack(){
        return $this->belongsTo(UserPacks::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function market(){
        return $this->belongsTo(Markets::class);
    }
}

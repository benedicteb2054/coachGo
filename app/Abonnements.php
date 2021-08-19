<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonnements extends Model
{
    protected $fillable=[
        'id','user_id','offer_id','service_id','duree_abonnement','date_debut','date_fin','total','updated_at', 'created_at'
    ];


    public function getCreatedAtAttribute($value){
        $date = \Carbon\Carbon::parse($value);
        return $date->format('Y-m-d:h:m');
    }

    public function service(){
        return $this->belongsTo(Services::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function offre(){
        return $this->belongsTo(Offers::class);
    }
}

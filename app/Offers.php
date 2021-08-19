<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $fillable=[
        'title','icon','description','offer_category_id','service_id',
            'sub_title','price','status'
    ];

    public function service(){
        return $this->belongsTo(Services::class);
    }

    public function  offerCategory(){
        return $this->belongsTo(OfferCategories::class);
    }

}

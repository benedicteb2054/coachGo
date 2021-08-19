<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferCategories extends Model
{
    protected $fillable=[
        'title','icon','description','sub_title','price','status'
    ];
}

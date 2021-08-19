<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable=[
        'title','icon','description','sub_title','price','status'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markets extends Model
{
    protected $fillable=[
        'id','closed','updated_at', 'created_at'
    ];

    public function investments(){
        return $this->hasMany(Investments::class);
    }
}

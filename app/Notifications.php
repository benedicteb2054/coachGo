<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $fillable=[
        'id', 'type', 'data', 'read_at', 'notifiable_id', 'notifiable_type', 'updated_at', 'created_at'
    ];
}

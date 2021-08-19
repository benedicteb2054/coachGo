<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Roles extends Model
{
    use SoftDeletes;
    const SUPER_ADMIN   = 1; //Dont change it
    const ADMIN         = 2; //Dont change it
    const MANAGER       = 3; //Dont change it
    const CUSTOMER      = 4; //Dont change it

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'label'
    ];

      /**
     * Check if the role is the super user
     *
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->id === static::SUPER_ADMIN;
    }

    /**
     * Check if the role is a manager
     *
     * @return bool
    */
    public function isManager()
    {
        return $this->id === static::MANAGER;
    }
      /**
     * Check if the role is a special kind
     *
     * @return bool
     */
    public function isSpecial()
    {
        return $this->id === static::CUSTOMER;
    }

    /**
     * Get the users for the role.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}

<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    const SUPER_ADMIN   = 1; //Dont change it
    const ADMIN         = 2; //Dont change it
    const MANAGER       = 3; //Dont change it
    const CUSTOMER      = 4; //Dont change it


    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'firstname','lastname','sexe','email', 'email_verified_at', "agree_conditions",
        'password', 'role_id','avatar','birthdate', 'phone_no','full_number','country', 'state', 'is_admin',
        'nric', 'city','remarks','deleted_at','latitude','longitude','image','note',
        'instagram_link','facebook_link','website_link','is_coach','level'
    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthdate' => 'date',
    ];

    function getName(){
        return $this->name;
    }
    public function getBirthdateAttribute($value){
        $date = \Carbon\Carbon::parse($value);
        return $date->format('Y-m-d');
    }
    function getEmailVerifiedAt(){
        return $this->email_verified_at;
    }
    function setEmailVerifiedAt($ev){
        $this->attributes['email_verified_at'] = $ev;
    }

    function getVerification_token(){
        return $this->getVerification_token;
    }

    /**
     * Check if the user is the super admin
     *
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->role_id == Roles::SUPER_ADMIN;
    }

    /**
     * Check if the user is the super admin or admin
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->isSuperAdmin() || $this->role_id == static::ADMIN;
    }


    public function scopeAdmin($query){
        return $query->orWhere('role_id', '=',  static::SUPER_ADMIN)
                    ->orWhere('role_id', '=',  static::ADMIN);
    }

    // public function scopeAdmin($query){
    //     return $query->orWhere('role_id', '=',  static::ADMIN);
    // }

    public function scopeManager($query){
        return $query->orWhere('role_id', '=',  static::MANAGER);
    }

    public function scopeCUSTOMER($query){
        return $query->where('role_id', '=',  static::CUSTOMER);
    }

    function getSponsorshipsCodeUrl(){
        return  env('APP_URL').'/sponsorships/pk='.$this->sponsorship_code;
    }
    /**
     * Check if the user is a Investor
     *
     * @return bool
    */
    public function isCustomer()
    {
        return $this->role_id == Roles::CUSTOMER;
    }

    function sponsorships(){
        return $this->hasMany(Sponsorships::class,'sp_id');
    }


    function role(){
        return $this->belongsTo(Roles::class);
    }

    function investments(){
        return $this->hasMany(Investments::class);
    }

    function cours(){
        return $this->hasMany(Cour::class,'coach_id');
    }
    public function scopeIsCoach($query)
    {
        return  $query->where('is_coach',true);
    }

    public static function search(Request $request){
        // dd($request->all());
        $model_user= User::isCoach()->select("users.*");

        $nom = $request->input('nom_coach');
        $department = $request->input('department');
        $ville = $request->input('ville');
        if($nom != null){
            $model_user->where('firstname', 'LIKE', "%{$nom}%")
                        ->orWhere('lastname', 'LIKE', "%{$nom}%");
        }

        if($department != null){
            $model_user->where('department','LIKE', "%{$department}%");
        }
        if($ville != null){
            $model_user->where('ville', 'LIKE', "%{$ville}%");
        }

        return $model_user->paginate(40);
    }



}

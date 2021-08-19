<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TmpUser extends Model
{
    protected $fillable = [
        'name', 'firstname','lastname','sexe','email', 'email_verified_at', "agree_conditions", 'sponsorship_code','password', 'role_id',
         'avatar', 'settings','birthdate', 'phone_no','full_number', 'country_code', 'address_1','verification_token',
        'address_2', 'postcode', 'country', 'state', 'is_admin', 'nric', 'city',
        'ssm','pa_code','company_name','facebook','instagram','payment_api_key','payment_cat_code','remarks','deleted_at',
    ];

    // protected $attribute = [
    //     'name', 'firstname','lastname','email', 'email_verified_at', "agree_conditions", 'sponsorship_code','password', 'role_id',
    //      'avatar', 'settings', 'phone_no', 'address_1','verification_token',
    //     'address_2', 'postcode', 'country', 'state', 'is_admin', 'nric', 'city',
    //     'ssm','company_name','facebook','instagram','payment_api_key','payment_cat_code','remarks','deleted_at',
    // ];

}

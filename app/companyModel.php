<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companyModel extends Model
{
    protected $table = 'companysregister';
    protected $fillable = [
        "username" , "password" , "repassword" ,
        "namecom" , "address" , "detail" , "tel" , "email"
    ];
}

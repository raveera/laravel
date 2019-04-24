<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companylist extends Model
{
    protected $fillable = [
        'username',
        'password',
        'name',
        'detail',
        'number',
        'address',
        'tel',
        'name_mentor',
        'tel_mentor',
        'e-mail'
      ];
}

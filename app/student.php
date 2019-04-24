<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
        'username',
        'password',
        'code',
        'name',
        'branch',
        'faculty',
        'year',
        'address',
        'tel',
        'e-mail'
      ];
}

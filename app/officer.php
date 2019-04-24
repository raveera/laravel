<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
    protected $fillable = [
        'username',
        'password',
        'name',
        'faculty',
        'course',
        'branch',
        'address',
        'tel',
        'e-mail'
      ];
}

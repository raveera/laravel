<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
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
        'email'
      ];
}

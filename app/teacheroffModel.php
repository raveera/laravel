<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacheroffModel extends Model
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
        'email'
      ];
}

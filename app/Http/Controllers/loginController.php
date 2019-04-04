<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginstu() {
        return view('loginstu');
    }

    public function logintea() {
        return view('logintea');
    }

    public function loginoff() {
        return view('loginoff');
    }

    public function logincom() {
        return view('logincom');
    }
}

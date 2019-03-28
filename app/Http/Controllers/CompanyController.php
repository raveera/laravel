<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){

        $companynames = [
            'TOT',
            '3BB',
            'TT&T'
        ];

        return view('company.company-list',[
            'companynames' => $companynames
        ]);
    }
}

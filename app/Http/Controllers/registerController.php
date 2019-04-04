<?php

namespace App\Http\Controllers;

use App\companyModel;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function registercom() {
        return view('registercom');
    }

    public function registerstu() {
        return view('registerstu');
    }

    public function registertea() {
        return view('registertea');
    }

    public function registeroff() {
        return view('registeroff');
    }

    public function index() {
        $companys = companyModel::all()->toArray();
        return view('company-list',compact('companys'));
    }

    public function submit(Request $request){
        $username = $request ->get('username');
        $password = $request ->get('password');
        $repassword = $request ->get('repassword');
        $namecom = $request ->get('namecom');
        $address = $request ->get('address');
        $detail = $request ->get('detail');
        $tel = $request ->get('tel');
        $email = $request ->get('email');
        $num = $request ->get('num');

        $data =[
            'username' => $username,
            'password' => $password,
            'repassword' => $repassword,
            'namecom' => $namecom,
            'address' => $address,
            'detail' => $detail,
            'tel' => $tel,
            'email' => $email,
            'num' => $num
        ];
        $companyModel = new companyModel($data);
        $companyModel->save();



    }
}

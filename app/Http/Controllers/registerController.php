<?php

namespace App\Http\Controllers;

use App\companyModel;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function registercom() {
        return view('registercom');
    }

    public function index() {
        $companys = companyModel::all()->toArray();
        return view('company-list',compact('companys'));
    }

    public function submit(Request $request){
        $username = $request ->post('username');
        $password = $request ->post('password');
        $repassword = $request ->post('repassword');
        $namecom = $request ->post('namecom');
        $address = $request ->post('address');
        $detail = $request ->post('detail');
        $tel = $request ->post('tel');
        $email = $request ->post('email');
        $num = $request ->post('num');

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

        $companys = companyModel::all()->toArray();
        return view('company-list',compact('companys'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companyModel;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys = companyModel::all();
        return view('company-list', compact('companys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registercom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_username'=>'required',
            'company_password'=> 'required',
            'company_name' => 'required',
            'company_detail' => 'required',
            'company_number' => 'required',
            'company_address' => 'required',
            'company_tel' => 'required',
            'company_name_mentor' => 'required',
            'company_tel_mentor' => 'required',
            'company_email' => 'required'
          ]);
          $company = new companyModel([
            'username' => $request->get('company_username'),
            'password'=> $request->get('company_password'),
            'name'=> $request->get('company_name'),
            'detail'=> $request->get('company_detail'),
            'number'=> $request->get('company_number'),
            'address'=> $request->get('company_address'),
            'tel'=> $request->get('company_tel'),
            'name_mentor'=> $request->get('company_name_mentor'),
            'tel_mentor'=> $request->get('company_tel_mentor'),
            'email'=> $request->get('company_email')
          ]);
          $company->save();
          return redirect('/company')->with('success', 'ลงทะเบียนเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = companyModel::find($id);

        return view('edit_registeroff', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'company_username'=>'required',
            'company_password'=> 'required',
            'company_name' => 'required',
            'company_detail' => 'required',
            'company_number' => 'required',
            'company_address' => 'required',
            'company_tel' => 'required',
            'company_name_mentor' => 'required',
            'company_tel_mentor' => 'required',
            'company_email' => 'required'
          ]);
          $company = companyModel::find($id);
          $company->username = $request->get('company_username');
          $company->password= $request->get('company_password');
          $company->name= $request->get('company_name');
          $company->detail = $request->get('company_detail');
          $company->number = $request->get('company_number');
          $company->address = $request->get('company_address');
          $company->tel = $request->get('company_tel');
          $company->name_mentor = $request->get('company_name_mentor');
          $company->tel_mentor = $request->get('company_tel_mentor');
          $company->email = $request->get('company_email');
          $company->save();

          return redirect('/company')->with('success', 'ข้อมูลอัพเดทแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = companyModel::find($id);
        $company->delete();

        return redirect('/company')->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacheroffModel;

class teacheroffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stu_company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registertea');
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
            'teacher_username'=>'required',
            'teacher_password'=> 'required',
            'teacher_name' => 'required',
            'teacher_faculty' => 'required',
            'teacher_course' => 'required',
            'teacher_branch' => 'required',
            'teacher_address' => 'required',
            'teacher_tel' => 'required',
            'teacher_email' => 'required'
          ]);
          $teacheroff = new teacheroffModel([
            'username' => $request->get('teacher_username'),
            'password'=> $request->get('teacher_password'),
            'name'=> $request->get('teacher_name'),
            'faculty'=> $request->get('teacher_faculty'),
            'course'=> $request->get('teacher_course'),
            'branch'=> $request->get('teacher_branch'),
            'address'=> $request->get('teacher_address'),
            'tel'=> $request->get('teacher_tel'),
            'email'=> $request->get('teacher_email')
          ]);
          $teacheroff->save();
          return redirect('/teacher')->with('success', 'ลงทะเบียนเรียบร้อย');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

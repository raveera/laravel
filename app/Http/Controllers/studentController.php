<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentModel;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registerstu');
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
            'student_username'=>'required',
            'student_password'=> 'required',
            'student_code' => 'required',
            'student_name' => 'required',
            'student_branch' => 'required',
            'student_faculty' => 'required',
            'student_year' => 'required',
            'student_address' => 'required',
            'student_tel' => 'required',
            'student_email' => 'required'
          ]);
          $student = new studentModel([
            'username' => $request->get('student_username'),
            'password'=> $request->get('student_password'),
            'code'=> $request->get('student_code'),
            'name'=> $request->get('student_name'),
            'branch'=> $request->get('student_branch'),
            'faculty'=> $request->get('student_faculty'),
            'year'=> $request->get('student_year'),
            'address'=> $request->get('student_address'),
            'tel'=> $request->get('student_tel'),
            'email'=> $request->get('student_email')
          ]);
          $student->save();
          return redirect('/index');
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

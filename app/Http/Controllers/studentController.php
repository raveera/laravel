<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

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
            'student_password'=>'required',
            'student_code'=>'required|integer',
            'student_name'=> 'required',
            'student_branch' => 'required',
            'student_faculty' => 'required',
            'student_year' => 'required',
            'student_address' => 'required',
            'student_tel' => 'required|integer',
            'student_email' => 'required'
        ]);
        $student = new Student([
            'student_username' => $request->get('username'),
            'student_password'=> $request->get('password'),
            'student_code'=> $request->get('code'),
            'student_name'=> $request->get('name'),
            'student_branch'=> $request->get('branch'),
            'student_faculty'=> $request->get('faculty'),
            'student_year'=> $request->get('year'),
            'student_address'=> $request->get('address'),
            'student_tel'=> $request->get('tel'),
            'student_email'=> $request->get('e-mail')
        ]);
        $student->save();
        return redirect('/students')->with('success', 'ลงทะเบียนเรียบร้อย');
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

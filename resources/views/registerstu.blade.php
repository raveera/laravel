@extends('layouts.index')
@section('title', 'ลงทะเบียนนักศึกษา')

@section('content')
        <form method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="container" id="body2">
                <h2 class="form-signin-heading" id="blackhead" align="center">@yield('title')</h2><hr>
                    @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                    @endif
                        <div class="col-md-12">
                            <div class="col-md-5 col-md-offset-1">
                                <h4 id="body"><b>บัญชีลงทะเบียน </b></h4>
                                    <div class="form-group">
                                        <label for="username">ชื่อผู้ใช้ *</label>
                                        <input type="text" class="form-control" name="student_username" id="text" placeholder="ชื่อผู้ใช้" autofocus required/>
                                    </div>
                                    <div class="form-group">
                                        <!-- Password field -->
                                        <label for="password">รหัสผ่าน *</label>
                                        <input type="password" class="form-control" name="student_password" id="myInput" placeholder="รหัสผ่าน"required/>
                                        <!-- An element to toggle between password visibility -->
                                        <input type="checkbox" onclick="myFunction()" id="showpass"><label for="showpass"> แสดงรหัสผ่าน</label>
                                        <script>
                                            function myFunction() {
                                            var x = document.getElementById("myInput");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                            }
                                        </script>
                                    </div>
                            </div>
                            <div class="col-md-5 ">
                                <h4 id="body"><b>ข้อมูลส่วนตัวนักศึกษา<b></h4>
                                    <div class="form-group">
                                        <label for="code">รหัสนักศึกษา *</label>
                                        <input type="text" class="form-control" name="student_code" id="text" placeholder="รหัสนักศึกษา"required />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">ชื่อ - นามสกุลนักศึกษา *</label>
                                        <input type="text" class="form-control" name="student_name" id="text" placeholder="ชื่อ-สกุล"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="branch">สาขาวิชา *</label>
                                        <input type="text" class="form-control" name="student_branch" id="text" placeholder="สาขาวิชา "/>
                                    </div>
                                    <div class="form-group">
                                        <label for="faculty">คณะ *</label>
                                        <input type="text" class="form-control" name="student_faculty" id="text" placeholder="คณะ "/>
                                    </div>
                                    <div class="form-group">
                                        <label for="year">ปีการศึกษา *</label>
                                            <select class="form-control" id="text" name="student_year">
                                                <option >2561</option>
                                                <option>2562</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">ที่อยู่ปัจจุบัน *</label>
                                        <input type="text" class="form-control" name="student_address" id="text" placeholder="ที่อยู่ปัจจุบัน"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">เบอร์โทรศัพท์ *</label>
                                        <input type="text" class="form-control" name="student_tel" id="text" placeholder="เบอร์โทรศัพท์"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">E-mail *</label>
                                        <input type="text" class="form-control" name="student_email" id="text" placeholder="E-mail"/>
                                    </div>
                            </div>
                            <div align="center" >
                                <label >
                                    <button class="btn btn-lg btn-primary btn" type="submit">บันทึก</button>
                                    <button class="btn btn-lg btn-defult btn"><a href="login">ยกเลิก</button></a>
                                </label>
                            </div>
                        </div>

            </div>
        </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
@endsection

@extends('layouts.index')
@section('title', 'ลงทะเบียนสถานประกอบการ')

@section('content')
        <form method="POST" action="{{ route('company.store') }}">
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
                                        <input type="text" class="form-control" name="company_username" id="text" placeholder="ชื่อผู้ใช้" autofocus required/>
                                    </div>
                                    <div class="form-group">
                                        <!-- Password field -->
                                        <label for="password">รหัสผ่าน *</label>
                                        <input type="password" class="form-control" name="company_password" id="myInput" placeholder="รหัสผ่าน"required/>
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
                                <h4 id="body"><b>ข้อมูลสถานประกอบการ<b></h4>
                                    <div class="form-group">
                                        <label for="name">ชื่อสถานประกอบการ *</label>
                                        <input type="text" class="form-control" name="company_name" id="text" placeholder="ชื่อสถานประกอบการ"required />
                                    </div>
                                    <div class="form-group">
                                        <label for="detail">รายละเอียดงาน *</label>
                                        <input type="text" class="form-control" name="company_detail" id="text" placeholder="รายละเอียดงาน"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="number">จำนวนที่รับ *</label>
                                        <input type="text" class="form-control" name="company_number" id="text" placeholder="จำนวนที่รับ"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">ที่อยู่ปัจจุบัน *</label>
                                        <input type="text" class="form-control" name="company_address" id="text" placeholder="ที่อยู่ปัจจุบัน"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">เบอร์โทรศัพท์ติดต่อ (สถานประกอบการ)*</label>
                                        <input type="text" class="form-control" name="company_tel" id="text" placeholder="เบอร์โทรศัพท์ติดต่อ (สถานประกอบการ)"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name_mentor">ชื่อพี่เลี้ยงนักศึกษา *</label>
                                        <input type="text" class="form-control" name="company_name_mentor" id="text" placeholder="ชื่อพี่เลี้ยงนักศึกษา"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel_mentor">เบอร์โทรศัพท์ติดต่อ (พี่เลี้ยง) *</label>
                                        <input type="text" class="form-control" name="company_tel_mentor" id="text" placeholder="เบอร์โทรศัพท์ติดต่อ (พี่เลี้ยง)"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail *</label>
                                        <input type="text" class="form-control" name="company_email" id="text" placeholder="E-mail"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">เพิ่มรูปสถานประกอบการ</label>
                                        <input type="file" accept="image/*" name="company_image" capture>
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

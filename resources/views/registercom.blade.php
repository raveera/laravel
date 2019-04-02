@extends('layouts.formregister')
@section('title', 'ลงทะเบียนสถานประกอบการ')

@section('head')
    <form class="form-singin" action="submitcom" method="get" >
@endsection

@section('content')
            <div class="col-sm-4" id="container1" >
              <h4 id="body"><b>ข้อมูลสถานประกอบการ<b></h4>
                <label>ชื่อสถานประกอบการ *</label>
                <input type="text" name="namecom" class="form-control" id="text" placeholder="ชื่อ-สกุล"required> <br>
                <label>รายละเอียดงาน *</label>
                <input type="text" name="detail" class="form-control" id="text" placeholder="รายละเอียดงาน"required> <br>
                <label>จำนวนที่รับ</label>
                <input type="text" name="num" class="form-control" id="text" placeholder="จำนวนที่รับ "> <br>
                <label>ที่อยู่ปัจจุบัน *</label>
                <input type="text" name="address" class="form-control" id="text" placeholder="ที่อยู่ปัจจุบัน "required> <br>
                <label>เบอร์โทรศัพท์ติดต่อ (สถานประกอบการ)*</label>
                <input type="text" name="tel" class="form-control" id="text" placeholder="เบอร์โทรศัพท์ "required> <br>
                <label>ชื่อพี่เลี้ยงนักศึกษา *</label>
                <input type="text" name="tel" class="form-control" id="text" placeholder="ชื่อพี่เลี้ยงนักศึกษา "required> <br>
                <label>เบอร์โทรศัพท์ติดต่อ (พี่เลี้ยง) *</label>
                <input type="text" name="tel" class="form-control" id="text" placeholder="เบอร์โทรศัพท์ติดต่อ"required> <br>
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" id="text" placeholder="E-mail "> <br>

                </div>
                </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

@endsection

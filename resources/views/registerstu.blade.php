@extends('layouts.formregister')
@section('title', 'ลงทะเบียนนักศึกษา')
@section('head')
    <form class="form-singin" action="submitstu" method="get" >
@endsection

@section('content')
    <div class="col-sm-4" id="container1" >
        <h4 id="body"><b>ข้อมูลส่วนตัวนักศึกษา<b></h4>
            <label>รหัสนักศึกษา *</label>
                <input type="text" class="form-control" id="text" placeholder="ชื่อ-สกุล"required> <br>
            <label>ชื่อ - นามสกุลนักศึกษา  *</label>
                <input type="password" class="form-control" id="text" placeholder="รหัสนักศึกษา "required> <br>
        <div class="form-group">
            <label for="sel1">คณะ *</label>
                <input type="text" class="form-control" id="text" placeholder="คณะ "required>
        </div>
            <label>สาขาวิชา *</label>
                <input type="text" class="form-control" id="text" placeholder="สาขาวิชา "required> <br>
        <div class="form-group">
            <label for="sel1">ชั้นปี *</label>
                <select class="form-control" id="text">
                    <option>ปี 3</option>
                    <option>ปี 4</option>
                </select>

        </div>
            <label>ที่อยู่ปัจจุบัน*</label>
                <input type="text" class="form-control" id="text" placeholder="ที่อยู่ปัจจุบัน "required> <br>
            <label>เบอร์โทรศัพท์*</label>
                <input type="text" class="form-control" id="text" placeholder="เบอร์โทรศัพท์ "required> <br>
            <label>E-mail</label>
                <input type="text" class="form-control" id="text" placeholder="E-mail "> <br>
        </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



@endsection
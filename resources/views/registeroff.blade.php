@extends('layouts.formregister')
@section('title', 'ลงทะเบียนเจ้าหน้าที่')
@section('head')
    <form class="form-singin" action="submitoff" method="get" >
@endsection

@section('content')
    <div class="col-sm-4" id="container1" >
        <h4 id="body"><b>ข้อมูลส่วนตัวเจ้าหน้าที่<b></h4>
            <label>ชื่อ - นามสกุล*</label>
                <input type="password" class="form-control" id="text" placeholder="ชื่อ-สกุล"required> <br>
            <label for="sel1">คณะ *</label>
                <input type="text" class="form-control" id="text" placeholder="คณะ "required> <br>
            <label for="sel1">หลักสูตร *</label>
                <input type="text" class="form-control" id="text" placeholder="หลักสูตร "required> <br>
            <label>สาขาวิชา *</label>
                <input type="text" class="form-control" id="text" placeholder="สาขาวิชา "required> <br>
            <label>ที่อยู่ปัจจุบัน*</label>
                <input type="text" class="form-control" id="text" placeholder="ที่อยู่ปัจจุบัน "required> <br>
            <label>เบอร์โทรศัพท์*</label>
                <input type="text" class="form-control" id="text" placeholder="เบอร์โทรศัพท์ "required> <br>
            <label>E-mail</label>
                <input type="text" class="form-control" id="text" placeholder="E-mail "> <br>

    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



@endsection

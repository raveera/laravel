@extends('layouts.index')
@section('title', 'รายชื่อสถานประกอบการ')

@section('content')
  <div class="container" id="body2">
        <p id="black">รายชื่อสถานประกอบการ</p>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>

                    <td align="center">ชื่อสถานประกอบการ</td>
                    <td align="center">รายละเอียดงาน</td>
                    <td align="center">ที่อยู่</td>
                    <td align="center">เบอร์โทร</td>
                    <td align="center">จำนวนที่รับ</td>
                    <td colspan="2" align="center"></td>

                </tr>
            </thead>
        <tbody>
                <tr>

                    <td>บริษัทนามสมมติ</td>
                    <td>รับซ่อมประกอบคอมพิวเตอร์</td>
                    <td>38/5 ถ.ผังเมือง 4 อ.เมือง จ.ยะลา</td>
                    <td>0847364483</td>
                    <td>3</td>
                    <td align="center"><a href="" class="btn btn-primary">เลือก</a></td>

                </tr>
        </tbody>
        </table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


@endsection

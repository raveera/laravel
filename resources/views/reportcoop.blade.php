@extends('layouts.index')
@section('title', 'รายงานการฝึกงาน')
@section('content')
  <div class="container" id="body2">
<table class="table">
  <thead class="thead-dark">
  <table class="table table-hover table-bordered">
    <p id="black">รายงานการฝึกงานของ นางสาวคอม พิวเตอร์</p>
    <thead>
    <tr>
      <th scope="col" class="text-center">วัน / เดือน / ปี</th>
      <th scope="col" class="text-center">สถานประกอบการ</th>
      <th scope="col" class="text-center">งานที่ปฏิบัติประจำวัน</th>
      <th scope="col" class="text-center">ปัญหา / การแก้ปัญหา</th>
      <th scope="col" class="text-center">ผู้นิเทศ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td >4 มีนาคม 2562</td>
      <td >ร้านอัพเกรด</td>
      <td >ซ่อมคอมพิวเตอร์</td>
      <td >-</td>
      <td >อาจารย์ทรงเผ่า</td>
    </tr>

    <tr>
      <td >3 มีนาคม 2562</td>
      <td >ร้านอัพเกรด</td>
      <td >ซ่อมคอมพิวเตอร์</td>
      <td >-</td>
      <td >อาจารย์ทรงเผ่า</td>
    </tr>

  </tbody>
</table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


@endsection

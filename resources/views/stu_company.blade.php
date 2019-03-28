@extends('layouts.index')
@section('title', 'ลงทะเบียน')
@section('content')
  <div class="container" id="body2">  
<table class="table">
  <thead class="thead-dark">
  <table class="table table-hover table-bordered">
    <caption>รายชื่อนักศึกษาออกฝึกงาน</caption>
    <thead>
    <tr>
      <th scope="col">ลำดับที่</th>
      <th scope="col">ชื่อ - นามสกุล</th>
      <th scope="col">สถานประกอบการ</th>
      <th scope="col">สาขาวิชา</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>นางสาวคอม พิวเตอร์</td>
      <td>ร้านอัพเกรด</td>
      <td>คอมพิวเตอร์ธุรกิจ</td>
    </tr>
   
  </tbody>
</table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  

@endsection
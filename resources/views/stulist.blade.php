@extends('layouts.index')
@section('title', 'รายชื่อนักศึกษายื่นเรื่องฝึกงาน')
@section('content')
  <div class="container" id="body2">
<table class="table">
  <thead class="thead-dark">
  <table class="table table-hover table-bordered">
    <p>รายชื่อนักศึกษาที่ยื่นเรื่องขอฝึกงาน</p>
    <thead>
    <tr>
      <th scope="col">รายชื่อ</th>
      <th scope="col">คณะ</th>
      <th scope="col">สาขาวิชา</th>
      <th scope="col">รายละเอียดงาน</th>
      <th scope="col">เกรดเฉลี่ย</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">นายเก้าอี้  โต๊ะคอม</td>
      <td>วจก.</td>
      <td>คอมพิวเตอร์ธุรกิจ</td>
      <td><button type="submit" value="Submit">ดูรายละเอียด</button></td>
      <td>3.11</td>
    </tr>

  </tbody>
</table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


@endsection

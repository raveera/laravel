@extends('layouts.index')
@section('title', 'รายชื่อนักศึกษายื่นเรื่องฝึกงาน')
@section('content')
  <div class="container" id="body2">
<table class="table">
  <thead class="thead-dark">
  <table class="table table-hover table-bordered">
    <p>รายชื่อนักศึกษาที่ยื่นเรื่องขอฝึกงาน</p>
    <thead>
    <tr >
      <td scope="col" align="center">รายชื่อ</td>
      <td scope="col" align="center">คณะ</td>
      <td scope="col" align="center">สาขาวิชา</td>
      <td scope="col" align="center">สถานประกอบการ</td>
      <td colspan="2" align="center">Action</td>
    </tr>
  </thead>
  <tbody >
    <tr>
      <td scope="row">นายเก้าอี้  โต๊ะคอม</td>
      <td>วจก.</td>
      <td>คอมพิวเตอร์ธุรกิจ</td>
      <td>ร้านซ่อมคอม</td>
      <td align="center">
        <button class="btn btn-sm btn-primary" type="submit">อนุญาต</button>
        <a href="reason"><button class="btn btn-sm btn-danger" type="submit">ไม่อนุญาต</button></a>
      </td>
    </tr>

  </tbody>
</table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


@endsection

@extends('layouts.index')
@section('title', 'รายชื่อสถานประกอบการ')
@section('content')
  <div class="container" id="body2">
<table class="table">
  <thead class="thead-dark">
  <table class="table table-hover table-bordered">
    <caption>รายชื่อสถานประกอบการ</caption>
    <thead>
    <tr>
      <th scope="col">ลำดับที่</th>
      <th scope="col">สถานประกอบการ</th>
      <th scope="col">รายละเอียด</th>
      <th scope="col">ที่อยู่</th>
      <th scope="col">จำนวนที่รับ</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($companys as $row )
        <tr>
            <td>{{ $row['id'] }}</td>
            <td>{{ $row['namecom'] }}</td>
            <td>{{ $row['detail'] }}</td>
            <td>{{ $row['address'] }}</td>
            <td>{{ $row['num'] }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


@endsection

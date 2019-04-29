@extends('layouts.index')
@section('title', 'รายชื่อสถานประกอบการ')

@section('content')
  <div class="container" id="body2">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}
        </div><br />
    @endif

        <p id="black">รายชื่อสถานประกอบการ</p>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <td>ลำดับที่</td>
                    <td>ชื่อสถานประกอบการ</td>
                    <td>รายละเอียดงาน</td>
                    <td>ที่อยู่</td>
                    <td>เบอร์โทร</td>
                    <td>จำนวนที่รับ</td>
                    <td colspan="2">คลิกดูรายละเอียด</td>
                </tr>
            </thead>
        <tbody>
            @foreach ($companys as $company )
                <tr>
                    <td>{{ $company['id'] }}</td>
                    <td>{{ $company['name'] }}</td>
                    <td>{{ $company['detail'] }}</td>
                    <td>{{ $company['address'] }}</td>
                    <td>{{ $company['tel'] }}</td>
                    <td>{{ $company['number'] }}</td>
                    <td><a href="{{ route('company.edit',$company->id)}}" class="btn btn-primary">คลิก</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


@endsection

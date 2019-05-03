@extends('layouts.index')
@section('title', 'ไม่อนุญาต')
@section('content')
    <form class="form-singin" action="stulist" method="get" >
        {{ csrf_field() }}
        <div class="container" id="body2">
          <h2 class="form-signin-heading" id="blackhead" align="center">เหตุผลที่ไม่อนุญาต</h2><hr>
            <div class="col-sm-2"></div>
                <div class="col-sm-8" id="a1">
                    <label>เหตุผลที่ไม่อนุญาต</label>
                        <textarea name="address" cols="80" rows="10"></textarea>
                    <div align="center">
                        <label >
                            <button class="btn btn-lg btn-primary btn" type="submit">บันทึก</button>
                            <button class="btn btn-lg btn-defult btn">ยกเลิก</button>
                        </label>
                    </div>
                </div>
                <div class="col-sm-2"></div>
        </div>
    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

@endsection

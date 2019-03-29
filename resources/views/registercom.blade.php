@extends('layouts.index')
@section('title', 'ลงทะเบียนสถานประกอบการ')
@section('content')
    <div class="container" id="body2">
      <form class="form-singin" action="submit" method="post" >
        {{ csrf_field() }}
          <h2 class="form-signin-heading" id="blackhead" align="center">ลงทะเบียนสถานประกอบการ</h2><hr>
            <div class="col-sm-2"></div>

              <div class="col-sm-4" >
              <label>Username * </label>
              <input type="text" name="username"  class="form-control" id="text" placeholder="Username"required> <br>
              <label>Password *</label>
              <input type="password" name="password" class="form-control" id="text" placeholder="Password"required> <br>
              <label for="psw-repeat">Repeat Password *</label>
              <input type="password" name="repassword" class="form-control" id="text" placeholder="Repeat Password" name="psw-repeat" required><br>

            </div>
            <div class="col-sm-4" id="container1" >
              <h4 id="body"><b>ข้อมูลสถานประกอบการ<b></h4>
                <label>ชื่อสถานประกอบการ *</label>
                <input type="text" name="namecom" class="form-control" id="text" placeholder="ชื่อ-สกุล"required> <br>
                <label>รายละเอียดงาน *</label>
                <input type="text" name="detail" class="form-control" id="text" placeholder="รายละเอียดงาน"required> <br>
                <label>จำนวนที่รับ</label>
                <input type="text" name="num" class="form-control" id="text" placeholder="จำนวนที่รับ "> <br>
                <label>ที่อยู่ปัจจุบัน *</label>
                <input type="text" name="address" class="form-control" id="text" placeholder="ที่อยู่ปัจจุบัน "required> <br>
                <label>เบอร์โทรศัพท์ติดต่อ *</label>
                <input type="text" name="tel" class="form-control" id="text" placeholder="เบอร์โทรศัพท์ "required> <br>
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" id="text" placeholder="E-mail "> <br>

                </div>
                </div>
              <div align='center'>
              <label >
                <button class="btn btn-lg btn-primary btn" type="submit">submit</button>
                <button class="btn btn-lg btn-defult btn"><a href="login-com">cancel</button></a>
              </label>
              </div>

              <div class="col-sm-2"></div>
      </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

@endsection

@extends('layouts.index')
@section('title', 'ลงทะเบียน')
@section('content')
<div class="container">
<div class="container" id="body2">
      <form class="form-singin">
          <h2 class="form-signin-heading" id="blackhead">ลงทะเบียนนักศึกษา</h2><hr>
            <div class="col-sm-2"></div>

              <div class="col-sm-4" >
              <label>Username * </label>
              <input type="text" class="form-control" id="text" placeholder="Username"required> <br>
              <label>Password *</label>
              <input type="password" class="form-control" id="text" placeholder="Password"required> <br>
              <label for="psw-repeat">Repeat Password *</label>
              <input type="password" class="form-control" id="text" placeholder="Repeat Password" name="psw-repeat" required><br>

            </div>
            <div class="col-sm-4" id="container1" >
              <h4 id="body"><b>ข้อมูลส่วนตัวนักศึกษา<b></h4>
                <label>รหัสนักศึกษา *</label>
                <input type="text" class="form-control" id="text" placeholder="ชื่อ-สกุล"required> <br>
                <label>ชื่อ - นามสกุลนักศึกษา  *</label>
                <input type="password" class="form-control" id="text" placeholder="รหัสนักศึกษา "required> <br>
                  <div class="form-group">
                    <label for="sel1">คณะ *</label>
                  </div>
                <label>สาขาวิชา *</label>
                <input type="text" class="form-control" id="text" placeholder="สาขาวิชา "required> <br>
                <div class="form-group">
                    <label for="sel1">ชั้นปี *</label>
                    <select class="form-control" id="text">
                      <option>ปี 3</option>
                      <option>ปี 4</option>
                    </select>
                    <br>
                  </div>
                <label>ที่อยู่ปัจจุบัน*</label>
                <input type="text" class="form-control" id="text" placeholder="ที่อยู่ปัจจุบัน "required> <br>
                <label>เบอร์โทรศัพท์*</label>
                <input type="text" class="form-control" id="text" placeholder="เบอร์โทรศัพท์ "required> <br>
                <label>E-mail</label>
                <input type="text" class="form-control" id="text" placeholder="E-mail "> <br>
                </div>
                </div>
              <div align='center'>
              <label >
                <button class="btn btn-lg btn-primary btn" type="submit">submit</button>
                <button class="btn btn-lg btn-defult btn"><a href="login-stu">cancel</button></a>
              </label>
              </div>

              <div class="col-sm-2"></div>
      </form>
    </div>
<h1><center><font size="5"color="#0000CC">ลงทะเบียนนักศึกษา</h1><br>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-3" for="code" id="a1">รหัสนักศึกษา :</label>
      <div class="col-sm-8">          
        <input type="code" class="form-control" id="code" placeholder="Enter code">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="name" id="a1">ชื่อ - นามสกุลนักศึกษา :</label>
      <div class="col-sm-8">
        <input type="name" class="form-control" id="name" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="add" id="a1">ที่อยู่ :</label>
      <div class="col-sm-8">          
        <input type="add" class="form-control" id="add" placeholder="Enter address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="saka" id="a1">สาขา :</label>
      <div class="col-sm-8">
        <input type="saka" class="form-control" id="saka" placeholder="Enter branch">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="add" id="a1">คณะ :</label>
      <div class="col-sm-8">          
        <input type="add" class="form-control" id="add" placeholder="Enter address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="tel1" id="a1">เบอร์โทรศัพท์ :</label>
      <div class="col-sm-8">          
        <input type="tel1" class="form-control" id="tel1" placeholder="Enter tel">
      </div>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="a1"><font size="2" color="#0000CC">Remember me</label>
    </div>
    <button type="submit" class="btn btn-default"><font size="3" color="#0000CC"><a href="page3_1">บันทึก</button>
    <button type="submit" class="btn btn-default"><font size="3" color="#0000CC"><a href="index">ยกเลิก</button>
  </form>
</div>
</body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


@endsection
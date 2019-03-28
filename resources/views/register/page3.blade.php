@extends('layouts.index')
@section('title', 'ลงทะเบียน')
@section('content')
<div class="container">
<h1><center><font size="8"color="#0000CC">สถานประกอบการ</h1><br>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-3" for="name" id="a1">ชื่อ - นามสกุลนักศึกษา :</label>
      <div class="col-sm-8">
        <input type="name" class="form-control" id="name" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="code" id="a1">รหัสนักศึกษา :</label>
      <div class="col-sm-8">          
        <input type="code" class="form-control" id="code" placeholder="Enter code">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="saka" id="a1">สาขา :</label>
      <div class="col-sm-8">
        <input type="saka" class="form-control" id="saka" placeholder="Enter branch">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3"for="tel" id="a1">โทรศัพท์ :</label>
      <div class="col-sm-8">          
        <input type="tel" class="form-control" id="tel" placeholder="Enter tel">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="namedep" id="a1">ชื่อหน่วยฝึกประสบการวิชาชีพ :</label>
      <div class="col-sm-8">
        <input type="namedep" class="form-control" id="namedep" placeholder="Enter department">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="add" id="a1">ที่อยู่ :</label>
      <div class="col-sm-8">          
        <input type="add" class="form-control" id="add" placeholder="Enter address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="teldep" id="a1">เบอร์โทรศัพท์หน่วยฝึก :</label>
      <div class="col-sm-8">
        <input type="teldep" class="form-control" id="teldep" placeholder="Enter teldepartment">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3"for="fax" id="a1">โทรสาร :</label>
      <div class="col-sm-8">          
        <input type="fax" class="form-control" id="fax" placeholder="Enter fax">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="web" id="a1">Website :</label>
      <div class="col-sm-8">
        <input type="web" class="form-control" id="web" placeholder="Enter website">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="position" id="a1">ตำแหน่ง :</label>
      <div class="col-sm-8">
        <input type="position" class="form-control" id="position" placeholder="Enter position">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="nameboss" id="a1">หัวหน้าสถานที่ฝึกประสบการวิชาชีพ :</label>
      <div class="col-sm-8">          
        <input type="nameboss" class="form-control" id="nameboss" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="tel1" id="a1">เบอร์โทรศัพท์ :</label>
      <div class="col-sm-8">          
        <input type="tel1" class="form-control" id="tel1" placeholder="Enter tel1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="master" id="a1">ชื่ออาจารย์นิเทศก์ประจำหน่วย :</label>
      <div class="col-sm-8">
        <input type="master" class="form-control" id="master" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3"for="staff" id="a1">พนักงานทั้งหมด :</label>
      <div class="col-sm-8">          
        <input type="staff" class="form-control" id="staff" placeholder="Enter staff">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="master" id="a1">ชาย :</label>
      <div class="col-sm-3">
        <input type="master" class="form-control" id="master" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3"for="staff" id="a1">หญิง :</label>
      <div class="col-sm-3">          
        <input type="staff" class="form-control" id="staff" placeholder="Enter staff">
      </div>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="a1"><font size="5" color="#0000CC">Remember me</label>
    </div>
    <button type="submit" class="btn btn-default"><font size="5" color="#0000CC"><a href="page3_1">บันทึก</button>
    <button type="submit" class="btn btn-default"><font size="5" color="#0000CC"><a href="index">ยกเลิก</button>
  </form>
</div>
</body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



@endsection

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
  <style type='text/css'>
    a:link {color: #ffffe6; text-decoration: none}
    a:visited {color: #ffffff; text-decoration: none }
    a:hover {color: PeachPuff; text-decoration: none}
    /* font */
    #p1 {
    font-family: TH SarabunPSK;
    font-size: 40px;
    color:white;
    }
    #para1{
    font-family: TH SarabunPSK;
    font-size: 10px;
    font-size: 3vw;
    color: white;
    }
    #para2{
    font-family: TH SarabunPSK;
    font-size: 15px;
    color: white;
    }
    #blackhead{
        color:black;
        font-family: TH SarabunPSK;
        font-size: 50px;
    }
     #register{
    font-family: TH SarabunPSK;
    font-size: 25px;
    color: white;
    }

    .uper {
    margin-top: 40px;
    }
  </style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top"่ >
      <div class="container-fluid">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index" id="p1">ระบบสหกิจ YRU</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
                <div class="btn pull-right">
                    <div class="dropdown">
                        <span class=" dropdown-toggle" id="register" data-toggle="dropdown" role="button" aria-hidden="true">
                        เข้าสู่ระบบ
                        <span  class="caret" >
                        </span></span>
                        <ul class="dropdown-menu" id="para2">
                            <li><a href="loginstu">นักศึกษา</a></li>
                            <li><a href="logintea">อาจารย์</a></li>
                            <li><a href="loginoff">เจ้าหน้าที่</a></li>
                            <li><a href="logincom">สถานประกอบการ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="btn pull-right ">
                    <div class="dropdown">
                            <span class=" dropdown-toggle" id="register" data-toggle="dropdown" role="button" aria-hidden="true">
                            ลงทะเบียน
                            <span  class="caret" ></span>
                            </span>
                        <ul class="dropdown-menu" id="para2">
                            <li><a href="registerstu">นักศึกษา</a></li>
                            <li><a href="registertea">อาจารย์</a></li>
                            <li><a href="registeroff">เจ้าหน้าที่</a></li>
                            <li><a href="registercom">สถานประกอบการ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="btn pull-right ">
                    <div class="dropdown">
                            <span class=" dropdown-toggle" id="register" data-toggle="dropdown" role="button" aria-hidden="true">
                            รายชื่อ
                            <span  class="caret" ></span>
                            </span>
                        <ul class="dropdown-menu" id="para2">
                            <li><a href="">สถานประกอบการ</a></li>
                            <li><a href="">นักศึกษาออกฝึกงาน</a></li>
                            <li><a href="">นักศึกษายื่นเรื่องฝึกงาน</a></li>
                        </ul>
                    </div>
                </div>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <div class="card uper">
            <div class="card-header">
                <h2 class="form-signin-heading" id="blackhead" align="center">@yield('title')</h2><hr>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif

                @yield('head')
                <div class="form-group">
                {{ csrf_field() }}

                        <div class="col-md-6 col-md-offset-3" >
                            <h4 id="body"><b>บัญชีลงทะเบียน <b></h4>
                                <div class="form-group">
                                    <label for="username">ชื่อผู้ใช้ *</label>
                                    <input type="text" class="form-control" name="student_username" id="text" placeholder="ชื่อผู้ใช้" autofocus required/>
                                </div>
                                <div class="form-group">
                                    <!-- Password field -->
                                    <label for="password">รหัสผ่าน *</label>
                                    <input type="password" class="form-control" name="student_password" id="myInput" placeholder="รหัสผ่าน"required/>
                                    <!-- An element to toggle between password visibility -->
                                    <input type="checkbox" onclick="myFunction()" id="showpass"><label for="showpass"> แสดงรหัสผ่าน</label>
                                    <script>
                                        function myFunction() {
                                        var x = document.getElementById("myInput");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                        }
                                    </script>
                                </div>

                            @yield('content')

                            <div align='center'>
                                <button class="btn btn-lg btn-primary" type="submit">บันทึก</button>
                                <button class="btn btn-lg btn-defult"><a href="login">ยกเลิก</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </form>
</body>
</html>


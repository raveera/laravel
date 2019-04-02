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
                    <a href="login" id="register" >
                        เข้าสู่ระบบ  </a> </span>
                </div>
        <div class="btn pull-right ">
            <div class="dropdown">
                    <span class=" dropdown-toggle" id="register" data-toggle="dropdown" role="button" aria-hidden="true">
                    ลงทะเบียน
                    <span  class="caret" ></span>
                    </span>
                <ul class="dropdown-menu" id="para2">
                    <li><a href="regiserstu">นักศึกษา</a></li>
                    <li><a href="login-tea">อาจารย์</a></li>
                    <li><a href="login-off">เจ้าหน้าที่</a></li>
                    <li><a href="registercom">สถานประกอบการ</a></li>
                </ul>
            </div>
        </div>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" id="body2">
        @yield('head')
        {{ csrf_field() }}
          <h2 class="form-signin-heading" id="blackhead" align="center">@yield('title')</h2><hr>
            <div class="col-sm-2"></div>
              <div class="col-sm-4" >
              <h4 id="body"><b>บัญชีลงทะเบียน <b></h4>
              <label>Username * </label>
              <input type="text" class="form-control" id="text" placeholder="Username"required> <br>
              <label>Password *</label>
              <input type="password" class="form-control" id="text" placeholder="Password"required> <br>
              <label for="psw-repeat">Repeat Password *</label>
              <input type="password" class="form-control" id="text" placeholder="Repeat Password" name="psw-repeat" required><br>
            </div>
                 @yield('content')
            <div align='center'>
              <label >
                <button class="btn btn-lg btn-primary btn" type="submit">บันทึก</button>
                <button class="btn btn-lg btn-defult btn"><a href="login">ยกเลิก</button></a>
              </label>
              </div>
              <div class="col-sm-2"></div>
      </form>
    </div>

</body>
</html>

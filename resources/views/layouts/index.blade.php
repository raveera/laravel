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
    #a1 {
    font-family: TH SarabunPSK;
    font-size: 25px;
    <color:black></color:black>;
    }
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
    a:link {color: black; text-decoration: none}
    a:hover {color: PeachPuff; text-decoration: none}
    }
    #para2{
    font-family: TH SarabunPSK;
    font-size: 25px;
    color: white;
    a:link {color: black; text-decoration: none}
    a:hover {color: PeachPuff; text-decoration: none}
    }
    #blackhead{
        color:black;
        font-family: TH SarabunPSK;
        font-size: 50px;
    }
  </style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

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
          <a class="navbar-brand" href="#" id="p1">ระบบสหกิจ YRU</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <h4 id="para1" class="dropdown">
                <a href="company-list">สถานประกอบการ</a> |
                <a href="#">เอกสารสหกิจ</a> |
                <a href="#">รายงานผล</a>  |
                <a href="#">ประเมินผล</a>   |
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >ลงทะเบียน <span class="caret"></span></a>
              <ul class="dropdown-menu" id="para2">
                <li><a href="register">นักศึกษา</a></li>
                <li><a href="register2">อาจารย์</a></li>
                <li><a href="register3">เจ้าหน้าที่</a></li>
                <li><a href="register4">สถานประกอบการ</a></li>
              </ul>
               </h4>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
      @yield('content')
      <hr>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>




</body>
</html>

@extends('layouts.index')
@section('title', 'Login')
@section('content')
    <form class="form-singin" action="savenote" method="get" >
    <div class="container col-md-4" ></div>
    <div class="container col-md-4">
      <form class="form-signin">
        <h2 class="form-signin-heading" align="center">เข้าสู่ระบบนักศึกษา</h2>
        <label>Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" required="" autofocus=""> <br>
        <label>Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">เข้าสู่ระบบ</button>
      </form>
    </div>
    <div class="container col-md-4"></div>
    </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  @endsection

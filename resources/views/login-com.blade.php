@extends('layouts.index')
@section('title', 'Login')
@section('content')
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading" id="blackhead">เข้าสู่ระบบ</h2>
        <div class="col-md-5">
        <label>Username</label>
        <input type="text" class="form-control" id="text" placeholder="Username"> <br>
        <label>Password</label>
        <input type="password" class="form-control" id="text" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn" type="submit">Log in</button>
        <button class="btn btn-lg btn-primary btn" type="submit"><a href="registercom">Register</button></a>
      </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  @endsection

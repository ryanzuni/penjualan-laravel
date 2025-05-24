<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
</head>
<body style="background-image: url('{{ asset('assets/img/pic/Toko1.jpg') }}'); background-repeat: no-repeat; color: #fff;">

  <div id="login-page" style="padding-top: 3pc;">
    <div class="container">
      <form class="form-login" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="form-login-heading">Login</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="username" placeholder="User ID" required autofocus>
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <br>
          <button class="btn btn-primary btn-block" type="submit">
            <i class="fa fa-lock"></i> SIGN IN
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>

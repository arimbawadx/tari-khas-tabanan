<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <link rel="icon" type="image/png" href="{{asset('lte/dist/img/bit.png')}}">
  <link rel="manifest" href="{{asset('manifest/manifest.json')}}">
  <style>
    body {
      background-image: url("{{asset('lte/dist/img/background_opc.jpg')}}");
      background-size: auto 100%;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card" style="background-color: rgba(245, 245, 245, 0.8);">
      <div class="card-body text-center">
        <img src="{{asset('lte/dist/img/LogoWebsite.png')}}" width="150px">
        <!-- <p class="login-box-msg">Sign in to start your session</p> -->
        <p class="login-box-msg"><strong>Budaya Seni Tari Khas <br> Kabupaten Tabanan</strong></p>
        <form action="/login-check" method="post">
          {{ csrf_field() }}
          <div class="input-group mb-3">
            <input required type="text" class="form-control" name="username" autocomplete="off" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input required type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- <div class="col-8">
            </div> -->
            <!-- /.col -->
            <div class="col-6">
              <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
  @include('sweetalert::alert')
</body>

</html>
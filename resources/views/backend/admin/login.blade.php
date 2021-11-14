<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ URL::asset('adminn/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ URL::asset('adminn/assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ URL::asset('adminn/assets/demo/demo.css')}}" rel="stylesheet" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo" style = "text-align:center;margin-top:10px">
        <h1><b>Admin Login</></h1>
    </div>
    <!-- /.login-logo -->
    <div class="card" style = "text-align:center;">
        <div class="card-header">
            <h3 style = "color:grey">Sign in to start your session</h3>
            @if(session()->has('error'))
        <span class="alert-msg">{{ session()->get('error') }}</span>
    @endif

            <form action="{{route('backend.login.post_login')}}" method="post">
                {!! csrf_field() !!}
                <div class="col-md-6 pr-1">
                    <input type="email" name="email" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="input-group col-md-6 pr-1">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-3 pr-1">
                        <button type="submit"  class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ URL::asset('adminn/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('adminn/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ URL::asset('adminn/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('adminn/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ URL::asset('adminn/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ URL::asset('adminn/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ URL::asset('adminn/assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ URL::asset('adminn/assets/demo/demo.js')}}"></script>

</body>
</html>

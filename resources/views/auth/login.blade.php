<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/docs/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Input Data Covid-19 Kelurahan Jatimulyo</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      {{-- <div class="logo">
        <h1>Login Halaman Admin Dispendukcapil Kota Malang</h1>
      </div> --}}
      <div class="row">
      <div class="login-box2 col" >
        <div class="piclogin">
          
              <img src="image/login-logo.png" style="width:300px; height:auto;" class="centerlogin">
        </div>
      </div>

      <div class="login-box col">
        <form class="login-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <img src="image/favicon.png" style="width:100px; height:auto;" class="logo-top-login">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                                @endif
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>            
            <input class="form-control" id="password" type="password" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="{{route('register')}}">Register</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-dark btn-block" style="color: white;"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>        
      </div>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{asset('template/docs/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('template/docs/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script type="text/javascript" src="{{asset('template/docs/js/plugins/chart.js') }}"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>
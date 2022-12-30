<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('image/favicon.png') }}" type="image/png">
        <title>Dispendukcapil Kota Malang  </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/jquery/jquery.min.js') }}">
        <link rel="stylesheet" href="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}">
         <link rel="stylesheet" href="{{ asset('js/agency.min.js') }}">
        <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <script language="JavaScript">
var txt="Dispendukcapil Kota Malang  ";
var kecepatan=100;var segarkan=null;function bergerak() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>

    </head>
    <body>

     {{-- <script>
         $(document).ready(function() {
   
    $('#footer').click(function(){
        $('html, body').animate({scrollTop:$(document).height(0)}, 'slow');
        return false;
    });

});
     })</script>    --}}
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt="" width="300px" height="auto" style="-webkit-filter: drop-shadow(0.5px 0.5px 0 black)
                  drop-shadow(-0.5px -0.5px 0 black);
  filter: drop-shadow(0.5px 0.5px 0 black) 
          drop-shadow(-0.5px -0.5px 0 black);"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="/">Beranda</a></li>
                            <li class="nav-item {{ request()->is('galeri') ? 'active' : '' }}"><a class="nav-link" href="/galeri">Demo Demografi</a></li>
                            {{-- <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a class="nav-link" href="/about">About Us</a></li> --}}
                            <li class="nav-item {{ request()->is('kontak') ? 'active' : '' }}"><a class="nav-link js-scroll-trigger" href="#footer">Hubungi Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="/masuk" style="color:rgb(255, 255, 255)">Login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        
        <!--================Header Area =================-->
@yield('konten')

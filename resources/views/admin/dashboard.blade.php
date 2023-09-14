<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Sipaklam - Sistem Pakar Lambung</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('user/img/2.jpeg') }}" type="image/jpeg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">

</head>

<body>
    <h1>halaman admin</h1>
    <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
 </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
 </form>
</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <link href="{{ asset('user/css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <main class="d-flex bg-custom">
            <div class="w-25 p-4">
                <aside id="sidebar" class="shadow-lg bg-white" style="border-radius: 10px">
                    <ul class="sidebar-nav pt-3 pl-3" id="sidebar-nav">
                        <li class="nav-heading">SIPAKLAM</li>

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="home.html">
                                <i class="bi bi-grid"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-heading">Pages</li>

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="home.php">
                                <i class="bi bi-person"></i>
                                <span>Home</span>
                            </a>
                        </li><!-- End Profile Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pasien_add_fm.php">
                                <i class="bi bi-question-circle"></i>
                                <span>Diagnosa</span>
                            </a>
                        </li><!-- End F.A.Q Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="info-penyakit.php">
                                <i class="bi bi-envelope"></i>
                                <span>Info Penyakit</span>
                            </a>
                        </li><!-- End Contact Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="history_hasil_diagnosa.php">
                                <i class="bi bi-card-list"></i>
                                <span>History Hasil Diagnosa</span>
                            </a>
                        </li><!-- End Register Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="about.php">
                                <i class="bi bi-card-list"></i>
                                <span>About</span>
                            </a>
                        </li><!-- End Login Page Nav -->
                    </ul>
                    <div class="bg-sidebar-foot mt-5 d-flex justify-content-center p-5" style="border-radius: 0 0 10px 10px">
                        <a class="btn btn-light nav-link text-dark collapsed" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="bi bi-dash-circle"></i> logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </aside>
            </div>
            <div class="w-100">
                <div class="p-3">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('user/js/jquery-min.js') }}"></script>
    <script src="{{ asset('user/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('user/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('user/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('user/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('user/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('user/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>

</html>

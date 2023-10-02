<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sipaklam - Sistem Pakar Lambung</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('user/img/2.jpeg') }}" type="image/jpeg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md bg-white sticky-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('user/img/logo1.png') }}" alt="logo"
                        style="margin: 0; padding:0; height: 60px;">
                    <span class="text-dark">SIPAKLAM</span>
                </a>
                <div class="navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-dark page-scroll" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('diagnosa.index') }}">Diagnosa</a></li>
                                <li><a class="dropdown-item" href="{{ route('history.index') }}">History Diagnosa</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('penyakit_solusi.index') }}">Info
                                        Penyakit</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark page-scroll" href="{{ route('about.index') }}">About</a>
                        <li class="nav-item">
                            <button class="btn btn-singin" onclick="document.getElementById('logout-form').submit();">
                                <i class="bi bi-dash-circle"></i> logout</button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="d-flex bg-custom">
            {{-- <div class="w-25 p-4">
                <aside id="sidebar" class="shadow-lg bg-white" style="border-radius: 10px">
                    <ul class="sidebar-nav pt-3" id="sidebar-nav">
                        <div class="ps-3">
                            <li class="nav-heading text-dark">SIPAKLAM</li>

                            <li class="nav-item mt-2 ps-3">
                                <a class="nav-link collapsed" href="{{ route('home') }}">
                                    <i class="bi bi-grid"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        </div>

                        <div class="ps-3 mt-2">
                            <li class="nav-heading text-dark">Pages</li>

                            <li class="nav-item mt-2 ps-3">
                                <a class="nav-link collapsed" href="{{ route('home') }}">
                                    <i class="bi bi-person"></i>
                                    <span>Home</span>
                                </a>
                            </li><!-- End Profile Page Nav -->

                            <li class="nav-item mt-2 ps-3">
                                <a class="nav-link collapsed" href="">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Diagnosa</span>
                                </a>
                            </li><!-- End F.A.Q Page Nav -->

                            <li class="nav-item mt-2 ps-3">
                                <a class="nav-link collapsed" href="">
                                    <i class="bi bi-envelope"></i>
                                    <span>Info Penyakit</span>
                                </a>
                            </li><!-- End Contact Page Nav -->

                            <li class="nav-item mt-2 ps-3">
                                <a class="nav-link collapsed" href="">
                                    <i class="bi bi-card-list"></i>
                                    <span>History Hasil Diagnosa</span>
                                </a>
                            </li><!-- End Register Page Nav -->

                            <li class="nav-item mt-2 ps-3">
                                <a class="nav-link collapsed" href="{{ route('about.index') }}">
                                    <i class="bi bi-card-list"></i>
                                    <span>About</span>
                                </a>
                            </li><!-- End Login Page Nav -->
                        </div>
                    </ul>
                    <div class="bg-sidebar-foot mt-5 d-flex justify-content-center p-5"
                        style="border-radius: 0 0 10px 10px">
                        <a class="btn btn-light nav-link text-dark collapsed" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i
                                class="bi bi-dash-circle"></i> logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </aside>
            </div> --}}
            <div class="container">
                <div class="">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('user/js/jquery.nav.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('user/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('user/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('user/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
    @yield('script')
</body>

</html>

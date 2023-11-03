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
    <link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body>
    <div id="app">
        <main class="d-flex bg-custom">
            <div class="w-25 p-4">
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
                                <a class="nav-link collapsed" href="{{ route('admin') }}">
                                    <i class="bi bi-person"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li class="nav-item mt-2 ps-3">
                                <a class="nav-link collapsed" href="{{ route('penyakit_solusi_admin.index') }}">
                                    <i class="bi bi-person"></i>
                                    <span>Penyakit</span>
                                </a>
                            </li>
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
            </div>
            <div class="w-100">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
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

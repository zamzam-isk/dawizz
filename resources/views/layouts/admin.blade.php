<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

{{-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- my files -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head> --}}

<body style="background-image: url({{ asset('assets/images/bg_10.jpg') }});   background-size: cover;">
    <div id="wrapper">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">BellaVista</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">


                    @auth('admin')
                        <ul class="navbar-nav side-nav">
                            <li class="nav-item">
                                <a class="nav-link" style="margin-left: 20px;" href="{{ route('admins.dashboard') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all.admins') }}" style="margin-left: 20px;">Admins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all.orders') }}"
                                    style="margin-left: 20px;">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all.products') }}"
                                    style="margin-left: 20px;">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all.bookings') }}"
                                    style="margin-left: 20px;">Bookings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('all.messages') }}"
                                    style="margin-left: 20px;">Messages</a>
                            </li>
                        </ul>
                    @endauth
                    <ul class="navbar-nav ml-md-auto d-md-flex">


                        @auth('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admins.dashboard') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    {{ Auth::guard('admin')->user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.login') }}">login
                                </a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">

            <main class="py-4">
                @yield('content')
            </main>

        </div>
    </div>
    </div>
    <script type="text/javascript"></script>
</body>

</html>

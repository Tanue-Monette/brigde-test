<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <style>
        .dropbtn {
            background-color: #3498DB;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #2980B9;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }
    </style>
</head>

<body>
    <div id="app">
        <header>
            <div class="main_header">
                <!--header top start-->
                <div class="header_top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="support_info">
                                </div>
                            </div>
                            @if (Route::has('login'))
                                <div class="col-lg-6 col-md-6">
                                    <div class="top_right text-right">
                                        <ul>
                                            @auth
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <a href="{{ url('/home') }}"
                                                            class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <li class="nav-item dropdown">
                                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" v-pre>
                                                                {{ Auth::user()->name }}
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="navbarDropdown">
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}"
                                                                    method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                    </div>
                                                </div>
                                            @else
                                                <li><a href="{{ route('login') }}">Login</a></li>
                                            @endauth
                                        </ul>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <!--header top start-->
                <!--header middel start-->
                <div class="header_middle">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6">
                                <div class="logo">
                                    <a href="index-2.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6">
                                <div class="middel_right">
                                    <div class="search_container">
                                        <form action="#">
                                            <div class="search_box">
                                                <input placeholder="Search product..." type="text">
                                                <button type="submit">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="middel_right_info">
                                        <div class="header_wishlist">
                                            <a href="#"><img src="assets/img/user.png" alt=""></a>
                                        </div>
                                        <div class="mini_cart_wrapper">
                                            <a href="javascript:void(0)"><img src="assets/img/shopping-bag.png"
                                                    alt=""></a>
                                            <span class="cart_quantity">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header middel end-->
                <!--header bottom satrt-->
                <div class="main_menu_area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="main_menu menu_position">
                                    <nav>
                                        <ul>
                                            <li><a href="/">home</a></li>
                                            <li><a href="/products-index">Product</a></li>
                                            <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html"> Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header bottom end-->
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>


</html>

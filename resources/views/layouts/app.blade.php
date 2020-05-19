<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Photo’s Active'}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        .navbar {
            position: fixed;
            z-index: 300;
            width: 100%;
        }

        h4 {
            color: #fff;
            /* text-shadow: 3px -3px 1px whitesmoke;  */
            text-align: center;
            font-size: 55px;
            margin-top: 100px;
        }

        h6 {
            text-align: center;
            font-size: 20px;
           
        }

        a.btn.btn-outline-primary {
            text-align: center;
        }

        .navbar-brand {
            font-size: 40px;
        }

        .card {
            margin: 5px 15px;
            box-shadow: 2px 2px 5px black;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
        }

        .card-body {
            background-color: whitesmoke;
            padding: 5px;
            
        }

        .card-header {
            text-align: center;
            background: darkgrey;
            color: white;
            font-size: 25px;
        }

        .card-title {
            text-align: center;
        }

        .card-text {
            text-align: center;
        }

        .table .thead-dark th {
            background-color: lightsteelblue;
            border-color: lightsteelblue;
            color: black;
            text-align: center;
        }

        td {
            text-align: center;
        }

        th {
            text-align: center;
        }

        .table {
            margin-bottom: 3px;
        }

        .navbar-light .navbar-nav .nav-link {
            font-size: 25px;
        }

        .dropdown-item {
            font-size: 20px;
            text-align: center;
        }

        .dropdown-item:hover {
            background-color: #3ccace;
            color: white;
        }

        .py-4 {
            background-image: url(/bg-index.jpg);
            background-repeat: no-repeat;
            height: 100vh;
            overflow: scroll;
            padding-top: 50px;

        }

        .justify-content-center {
            margin: 80px 0 0px 0;
            
        }

        .btn-group{
            float: right;
           padding-right: 80px;
           
        }
        .dropdown-menu.show{
            z-index: 200;
        }

       .btn.btn-outline-success {
           float: right;
       }

    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app,name','Photo’s Active') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a> 

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('album.index')}}">{{ __('Album’s Create') }}</a>
                                </li>
                                
                                <a class="nav-link dropdown-toggle" href="#"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('LogOut') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')

            
        </main>
    </div>
</body>
</html>

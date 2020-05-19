<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: #f8fafc;
                color: #fff;
                /* color: #fff; */
                font-family: 'Nunito', sans-serif;
                font-weight: 300;
                height: auto;
                margin: 0;
                position: relative;
            }

            /* .full-height {
                height: 100vh;
            } */

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            /* .position-ref {
                /* position: relative; */
            /* } */ */

            .top-right {
                /* position: absolute; */
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                height: 400px;
                background-repeat: no-repeat;
                background-image: url(/bg-contact.jpg);
                
            }

            .title {
                font-size: 84px;
                text-shadow: 3px -3px 1px #636b6f; 
                font-weight: 600;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: 1px -1px 1px #636b6f; 
                
            }

            .links > a:hover {
                /* color: #fff; */
                border-bottom: 2px solid #fff;
                /* text-shadow: 1px -1px 1px #636b6f;  */
                /* background: #3ccace;
                border-radius: 6px; */
            }

            .m-b-md {
                margin-bottom: 30px;
                margin-top: 180px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Photo’s Active
            </div>

            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Sign in</a>
                        @endif
                    @endauth
                </div>
            </div>
            @endif
        </div>
    </body>
</html>

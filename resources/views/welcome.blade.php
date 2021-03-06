<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .bg-image {
                background-repeat: no-repeat;
                background-size: cover;
            }

            .content{
                width: 50%;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height bg-image" style="background-image: url({{asset('img/keyboard.jpg')}})">
            @if (Route::has('login'))
                <div class="top-right links">
                    {{--@auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('login') }}">Open Ticket</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth--}}


                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-block btn-outline-danger">Open Ticket</button>
                        </a>
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-block btn-outline-danger">Login</button>

                    </a>
                </div>
            @endif

            <div class="content" >
                <form action="#" method="post">
                    <div class="input-group input-group-lg">
                        <input type="text" name="message" placeholder="Enter Support Ticket Reference No ..." class="form-control">
                        <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Search</button>
                    </span>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

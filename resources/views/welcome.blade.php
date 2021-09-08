<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/logo.jpg') }}" sizes="20x20">
        <title>LiveWire</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{asset('css/style.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
    </head>
    <body>
        
        <div class="wrapper">
            <div class="typing-demo">
            This is a livewire application demo.

            @if (Route::has('login'))
                <div class="top-right links">

                <div class="nav__btns">
                    <!-- Thema Change button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                         <a href="{{ route('login') }}" title="LOGIN"> <i class="uil uil-sign-in-alt change-theme"></i> </a>
                    </div>
                </div>

                    @auth
                        <a href="{{ url('/home') }}">Home</a>     
                    @endauth
                </div>
            @endif
            </div>
        </div>
            <script src="{{asset('js/toggle.js') }}"></script>
    </body>

</html>

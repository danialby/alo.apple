<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravella') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/persian-date.min.js') }}" defer></script>
    <script src="{{ asset('js/persian-datepicker.min.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/persian.min.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/r.css') }}" rel="stylesheet">
    <link href="{{ asset('css/persian-datepicker.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/r.css') }}" rel="stylesheet"> -->
</head>
<style>
    .op1 {
        opacity: 1 !important;
        z-index: 1 !important;
        transition: opacity 0.3s ease;
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    }

    #loadingPanel {
        position: fixed;
        width: 55%;
        height: 100%;
        background-color: #ffffff;
        display: none;
        transition: opacity 0.3s ease;
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    }

    #indicator span {
        width: 100px;
        position: absolute;
        top: 50px;
        right: -15px;
    }

    #indicator {
        width: 42px;
        height: 42px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background-image: url(/css/img/810.svg);
        background-position: center;
        background-size: 65%;
        background-repeat: no-repeat;
    }
</style>

<body>

    <a id="sideBtn" href="#">
        <svg class="i-ellipsis-horizontal LthreeDots rt90" id="menuSVG" viewBox="0 0 32 32" width="24" height="24"
            fill="black" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
            <circle cx="7" cy="16" r="2"></circle>
            <circle cx="16" cy="16" r="2"></circle>
            <circle cx="25" cy="16" r="2"></circle>
        </svg></a>
    <div id="right">
        <div id="loadingPanel">
            <div id="indicator"><span>شکیبا باشید...</span></div>
        </div>

        <div id="app">
            <!-- <div id="menuBox">
<div class="col-12"></div>
<div class="col-12"></div>
<div class="col-12"></div>
</div> -->
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <div id="left">
        <div id="left-top">
            <div id="aa-logo" class="eff"></div>
            <div id="aa-icon" class="eff"></div>

        </div>
        <nav id="nava" class="navbar navbar-expand-md">
            <div class="container">

                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="imenuItem eff"><a href="/" id="Formlink">فرم درخواست</a></li>
                        <li class="imenuItem eff"><a href="/StatusCheck" id="StatLink">پیگیری درخواست</a></li>
                        <li class="imenuItem eff"><a href="/AboutUs" id="AboutLink">درباره ما</a></li>
                        <!-- <li class="imenuItem imlast"><a href="/priceList">لیست قیمت</a></li> -->
                        <li id="insta" class="imenuItem eff">
                            <a href="http://www.instagram.com/alo.apple"
                            target="_blank"> @ alo.apple
                            </a>
                         </li>
                    </ul>


                </div>
            </div>
        </nav>
        <div id="left-bottom">
            <div id="bottom">

            </div>

        </div>
    </div>
</body>

</html>

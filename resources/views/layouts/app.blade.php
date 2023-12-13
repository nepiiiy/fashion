<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NEPIIY | FASHION & STYLE</title>
    <link href="https://i.postimg.cc/13c2WhpQ/Black-White-Elegant-Feminine-Fashion-Clothing-Logo-1-removebg-preview.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/reboot.css')}}">
    <link rel="stylesheet" href="{{asset('css/reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/reboot.rtl')}}">
    <link rel="stylesheet" href="{{asset('css/reboot.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{-- font awesome cdn links --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css.css">
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            @include('shared.header')
            <div class="main-content">
                @yield('content')
            </div>
            @include('shared.footer')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
@yield('card')
@yield('filter')
</body>
</html>
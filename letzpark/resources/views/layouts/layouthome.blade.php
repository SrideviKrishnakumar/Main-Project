<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSRF Token for ajax-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Google fonts-->
    <!--Roboto and Roboto condensed-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!--Laravel CSS/SCSS-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <!--Navbar-->
    @include('layouts.navbar')
    <!--/Navbar end-->
    <div class="mainHomePage">

        <!--Header-->
        <header>
            @yield('header')
        </header>
        <!--/Header end-->
        
        <!--Content-->
        <main>
            @yield('content')
        </main>
        <!--/Content end-->
        
    </div>
    <!--Footer-->
    @include('footer.footer')
    <!--/Footer end-->

     <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--/Bootstrap JS-->
    <!--JavaScript-->
    <script src="">{{ asset('js/app.js') }}</script>
    <!--/JavaScript end-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>

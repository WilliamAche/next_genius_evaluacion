<!doctype html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Next Genius - Auth</title>
    <link rel="shortcut icon" href="{{ asset('img/next-genius/favicon/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/css/vendors.min.css') }}">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('css/template/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/bootstrap-extended.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/themes/dark-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" href="{{ asset('css/template/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/pages/authentication.css') }}">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/style.css') }}">

</head>

<body
    class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page dark-layout"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                    @yield('content')
            </div>
        </div>
    </div>

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('vendor/js/vendors.min.js') }}"></script>

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('js/template/core/app-menu.js') }}"></script>
    <script src="{{ asset('js/template/core/app.js') }}"></script>
    <script src="{{ asset('js/template/scripts/components.js') }}"></script>

</body>

</html>

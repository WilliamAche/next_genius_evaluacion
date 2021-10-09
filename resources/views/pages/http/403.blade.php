<!doctype html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Next Genius - 403</title>

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
    <link rel="stylesheet" href="{{ asset('css/template/pages/coming-soon.css') }}">

</head>

<body class="horizontal-layout horizontal-menu dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column" data-layout="dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- maintenance -->
                <section class="row flexbox-container">
                    <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
                        <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <img src="{{ asset('img/template/pages/not-authorized.png') }}" class="img-fluid align-self-center" alt="branding logo">
                                    <h1 class="font-large-2 my-2">No estas autorizado</h1>
                                    <p class="p-2 text-white">
                                    Lo sentimos, parece que no tiene permiso para acceder a esta sección de la web, por favor, diríjase al inicio 
                                    </p>
                                    <a class="btn btn-primary btn-lg mt-2" href="{{ route('home') }}">Volver al Inicio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- maintenance end -->

            </div>
        </div>
    </div>
    
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('vendor/js/vendors.min.js') }}"></script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('vendor/js/coming-soon/jquery.countdown.min.js') }}"></script>

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('js/template/core/app-menu.js') }}"></script>
    <script src="{{ asset('js/template/core/app.js') }}"></script>
    <script src="{{ asset('js/template/scripts/components.js') }}"></script>

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('js/template/scripts/pages/coming-soon.js') }}"></script>

</body>

</html>

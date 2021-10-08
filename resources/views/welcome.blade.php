<!doctype html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Next Genius - Lanzamiento</title>

    <link rel="shortcut icon" href="{{ asset('img/next-genius/icon.jpg') }}" type="image/x-icon">
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

<body class="vertical-layout vertical-menu-modern 1-column navbar-floating footer-static bg-full-screen-image  menu-collapsed blank-page blank-page dark-layout"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section>
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-10 d-flex align-items-center justify-content-center mt-5">
                            <img src="{{ asset('img/next-genius/logo.png') }}" class="img-fluid" width="500px" alt="">
                        </div>
                        <div class="col-xl-5 col-md-8 col-sm-10 col-12 mt-5">
                            <div class="card text-center w-100 py-2">
                                <div class="card-header justify-content-center pb-0">
                                    <div class="card-title">
                                        <h2 class="mb-1">Estamos muy cerca de nuestro despegue</h2>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <img src="{{ asset('img/template/pages/rocket.png') }}"
                                            class="img-responsive block width-150 mx-auto" width="150px" alt="bg-img">
                                        <div id="clockFlat"
                                            class="card-text text-center getting-started pt-2 d-flex justify-content-center flex-wrap">
                                        </div>
                                        <div class="divider">
                                            <div class="divider-text">Suscribete</div>
                                        </div>
                                        <p class="text-center">
                                            Next Genius es un proyecto que nace de la idea de ayudar a crecer a todos
                                            aquellos, ya sean pequeños emprendedores o grandes empresas para que, con
                                            sus métodos, puedan llegar a conseguir el éxito a través del esfuerzo, la
                                            constancia y, sobre todo, la vocación sobre el emprendimiento.
                                        </p>
                                        <div class="row">
                                            <div class="col-12 d-flex align-items-center justify-content-center my-2">
                                                <iframe width="560px" height="315px"
                                                    src="https://www.youtube.com/embed/w864LYexbv8"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                            <div class="col-12 d-flex align-items-center justify-content-center">
                                                <a href="{{ route('register') }}"
                                                    class="btn btn-primary w-50">Registrarme</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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

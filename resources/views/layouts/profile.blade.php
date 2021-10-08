<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.components.head')
</head>

<body class="horizontal-layout horizontal-menu dark-layout 2-columns  navbar-floating footer-static" data-open="hover"
    data-menu="horizontal-menu" data-col="2-columns" data-layout="dark-layout">

    @include('layouts.components.navbar')
    


    @include('sweetalert::alert')

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

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-shadow">
        <p class="clearfix blue-grey lighten-2 mb-0"><span
                class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                    class="text-bold-800 grey darken-2" href="#">Next Genius,</a>All rights Reserved</span><span
                class="float-md-right d-none d-md-block">Hecho a mano y con<i
                    class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button>
        </p>
    </footer>

    <!-- Scripts -->
    @include('layouts.components.script')
</body>

</html>

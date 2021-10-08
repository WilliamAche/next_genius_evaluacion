{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" href="{{ asset('vendor/css/vendors.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/css/charts/apexcharts.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/css/extensions/tether-theme-arrows.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/css/extensions/tether.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/css/extensions/shepherd-theme-default.css') }}">

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" href="{{ asset('css/template/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/bootstrap-extended.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/colors.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/components.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/themes/dark-layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/themes/semi-dark-layout.css') }}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" href="{{ asset('css/template/core/menu/menu-types/horizontal-menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/pages/dashboard-analytics.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/pages/card-analytics.css') }}">
<link rel="stylesheet" href="{{ asset('css/template/plugins/tour/tour.css') }}">

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" href="{{ asset('css/template/style.css') }}">
@stack('css')
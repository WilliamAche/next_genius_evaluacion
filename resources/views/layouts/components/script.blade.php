{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

<!-- BEGIN: Vendor JS-->
<script src="{{ asset('vendor/js/vendors.min.js') }}"></script>

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendor/js/ui/jquery.sticky.js') }}"></script>
<script src="{{ asset('vendor/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/js/extensions/tether.min.js') }}"></script>
<script src="{{ asset('vendor/js/extensions/shepherd.min.js') }}"></script>

<!-- BEGIN: Theme JS-->
<script src="{{ asset('js/template/core/app-menu.js') }}"></script>
<script src="{{ asset('js/template/core/app.js') }}"></script>
<script src="{{ asset('js/template/scripts/components.js') }}"></script>
<script src="{{ asset('js/template/scripts/footer.js') }}"></script>

<!-- BEGIN: Page JS-->
{{-- <script src="{{ asset('js/template/scripts/pages/dashboard-ecommerce.js') }}"></script> --}}
<script src="{{ asset('js/template/scripts/pages/dashboard-analytics.js') }}"></script>

<!-- BEGIN: Custom JS-->
<script src="{{ asset('js/libs/jquery/jquery-confirm-v3.3.4/js/jquery-confirm.js') }}"></script>

@stack('js')

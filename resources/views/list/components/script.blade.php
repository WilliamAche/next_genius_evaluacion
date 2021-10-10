@push('js')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('vendor/js/extensions/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendor/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/js/tables/datatable/buttons.print.min.js') }}"></script>

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('js/template/scripts/datatables/datatable.js') }}"></script>

{{-- <script>
    $('.myTable').DataTable({
        responsive: true,
        order: [
            [0, "asc"]
        ],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "Todo"]
        ],

        dom: 'Bfrtip'
    })
</script> --}}

<script>
    $('.delete').confirm({
        title: 'Confirmar!',
        content: 'Eliminar este registro?',
        theme: 'supervan',
        buttons: {
            confirmar: {
            btnClass: 'btn-danger',
                action: function () {
                        $('.delete').addClass('is-loading').addClass('disabled');
                        document.getElementById('delete').submit();
                    }
            },
            cancel: {
                btnClass: 'btn-outline-secondary',
                    action: function () {

                }
            }
        }
    });

    $('.approved').confirm({
        title: 'Confirmar!',
        content: 'Aprovar este registro?',
        theme: 'supervan',
        buttons: {
            confirmar: {
            btnClass: 'btn-danger',
                action: function () {
                        $('.approved').addClass('is-loading').addClass('disabled');
                        document.getElementById('approved').submit();
                    }
            },
            cancel: {
                btnClass: 'btn-outline-secondary',
                    action: function () {

                }
            }
        }
    });

    $('.rejected').confirm({
        title: 'Confirmar!',
        content: 'Rechazar este registro?',
        theme: 'supervan',
        buttons: {
            confirmar: {
            btnClass: 'btn-danger',
                action: function () {
                        $('.rejected').addClass('is-loading').addClass('disabled');
                        document.getElementById('rejected').submit();
                    }
            },
            cancel: {
                btnClass: 'btn-outline-secondary',
                    action: function () {

                }
            }
        }
    });
</script>
@endpush

@push('css')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/calendars/fullcalendar.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/calendars/extensions/daygrid.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/calendars/extensions/timegrid.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/pickers/pickadate/pickadate.css') }}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/template/plugins/calendars/fullcalendar.css') }}">
@endpush

<section id="basic-examples">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="cal-category-bullets d-none">
                            <div class="bullets-group-1 mt-2">
                                <div class="category-business mr-1">
                                    <span class="bullet bullet-success bullet-sm mr-25"></span>
                                    Clases
                                </div>
                                <div class="category-work mr-1">
                                    <span class="bullet bullet-info bullet-sm mr-25"></span>
                                    Trabajos
                                </div>
                                <div class="category-personal mr-1">
                                    <span class="bullet bullet-danger bullet-sm mr-25"></span>
                                    Personal
                                </div>
                                <div class="category-others">
                                    <span class="bullet bullet-primary bullet-sm mr-25"></span>
                                    Otros
                                </div>
                            </div>
                        </div>
                        <div id='fc-default'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- calendar Modal starts-->
    <div class="modal fade text-left modal-calendar" tabindex="-1" role="dialog" aria-labelledby="cal-modal"
        aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-text-bold-600" id="cal-modal">Añadir nuevo evento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="d-flex justify-content-between align-items-center add-category">
                            <div class="chip-wrapper"></div>
                            <div class="label-icon pt-1 pb-2 dropdown calendar-dropdown text-white" data-toggle="dropdown" id="cal-event-category">Categorias 
                                <i class="feather icon-tag dropdown-toggle"></i>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cal-event-category">
                                    <span class="dropdown-item business" data-color="success">
                                        <span class="bullet bullet-success bullet-sm mr-25"></span>
                                        Clases
                                    </span>
                                    <span class="dropdown-item work" data-color="info">
                                        <span class="bullet bullet-info bullet-sm mr-25"></span>
                                        Trabajos
                                    </span>
                                    <span class="dropdown-item personal" data-color="danger">
                                        <span class="bullet bullet-danger bullet-sm mr-25"></span>
                                        Personal
                                    </span>
                                    <span class="dropdown-item others" data-color="primary">
                                        <span class="bullet bullet-primary bullet-sm mr-25"></span>
                                        Otros
                                    </span>
                                </div>
                            </div>
                        </div>
                        <fieldset class="form-label-group">
                            <input type="text" class="form-control" id="cal-event-title" placeholder="Titulo">
                            <label for="cal-event-title">Titulo</label>
                        </fieldset>
                        <fieldset class="form-label-group">
                            <input type="text" class="form-control pickadate" id="cal-start-date"
                                placeholder="Fecha de inicio">
                            <label for="cal-start-date">Fecha de inicio</label>
                        </fieldset>
                        <fieldset class="form-label-group">
                            <input type="text" class="form-control pickadate" id="cal-end-date" placeholder="Fecha final">
                            <label for="cal-end-date">Fecha final</label>
                        </fieldset>
                        <fieldset class="form-label-group">
                            <textarea class="form-control" id="cal-description" rows="5"
                                placeholder="Descripcion"></textarea>
                            <label for="cal-description">Descripcion</label>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary cal-add-event waves-effect waves-light" disabled>
                            Añadir nuevo evento</button>
                        <button type="button" class="btn btn-primary d-none cal-submit-event waves-effect waves-light" disabled>submit</button>
                        <button type="button" class="btn btn-flat-danger cancel-event waves-effect waves-light" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-flat-danger remove-event d-none waves-effect waves-light" data-dismiss="modal">Remove</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('js')
<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendor/js/extensions/moment.min.js') }}"></script>
<script src="{{ asset('vendor/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('vendor/js/calendar/extensions/daygrid.min.js') }}"></script>
<script src="{{ asset('vendor/js/calendar/extensions/timegrid.min.js') }}"></script>
<script src="{{ asset('vendor/js/calendar/extensions/interactions.min.js') }}"></script>
<script src="{{ asset('vendor/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('vendor/js/pickers/pickadate/picker.date.js') }}"></script>

<!-- BEGIN: Page JS-->
<script src="{{ asset('js/template/scripts/extensions/fullcalendar.js') }}"></script>
@endpush

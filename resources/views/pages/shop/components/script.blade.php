@push('js')
<!-- BEGIN: Page Vendor JS-->

<script src="{{ asset('vendor/js/extensions/jquery.steps.min.js') }}"></script>
<script src="{{ asset('vendor/js/forms/validation/jquery.validate.min.js') }}"></script>

<!-- BEGIN: Page JS-->
<script src="{{ asset('js/template/scripts/forms/wizard-steps.js') }}"></script>

<script>

    function previewFile(input, preview_id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#" + preview_id).attr('src', e.target.result);
                $("#" + preview_id).css('height', '300px');
                $("#" + preview_id).parent().parent().removeClass('d-none');
            }
            $("label[for='" + $(input).attr('id') + "']").text(input.files[0].name);
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewPersistedFile(url, preview_id) {
        $("#" + preview_id).attr('src', url);
        $("#" + preview_id).css('height', '300px');
        $("#" + preview_id).parent().parent().removeClass('d-none');

    }

</script>
@endpush

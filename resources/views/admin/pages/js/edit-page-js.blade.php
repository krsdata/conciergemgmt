<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('featured-image').addEventListener('click', (event) => {
            event.preventDefault();

        var selector = 'selected-image';
        var preview = 'preview-image';

        $('#filemanager-frame').attr('src', '{{ url('/dashboard/media') }}?type=Images&selector='+selector+'&preview='+preview);
    });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('preview-image').src = $url;
    }

    $(document).ready(function(){
        var slider_name = $('#slider-select .slider-id:checkbox:checked').next('label.custom-control-label').text();
        $('#slider-image-title').text(slider_name);

        var contact_form_name = $('#contact-form-select .contact-form-id:checkbox:checked').next('label.custom-control-label').text();
        $('#contact-form-title').text(contact_form_name);

        $('.slider-id').on('click', function(){
            $('.slider-id').not(this).prop('checked', false);
            var id = $(this).attr('rel');
            $('#selected-slider').val(id);
        });

        $('.contact-form-id').on('click', function(){
            $('.contact-form-id').not(this).prop('checked', false);
            var id = $(this).attr('rel');
            $('#contact-form-selected').val(id);
        });

        $('#slider-select .slider-id').change(function(){
            var slider_name = $(this).next('label.custom-control-label').text();
            $('#slider-image-title').text(slider_name);
        });

        $('#contact-form-select .contact-form-id').change(function(){
            var form_name = $(this).next('label.custom-control-label').text();
            $('#contact-form-title').text(form_name);
        });
    });
</script>
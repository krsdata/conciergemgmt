<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('featured-image').addEventListener('click', (event) => {
            event.preventDefault();

            var selector = 'selected-image';
            var preview = 'preview-image';

            //window.open('{{ url('/dashboard/media?type=Images') }}', 'fm', 'width=1400,height=800');
            $('#filemanager-frame').attr('src', '{{ url('/dashboard/media') }}?type=Images&selector='+selector+'&preview='+preview);
        });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('preview-image').src = $url;
    }

    $(document).ready(function(){
        $('.slider-id').on('click', function(){
            $('.slider-id').not(this).prop('checked', false);
            var id = $(this).attr('rel');
            $('#selected-slider').val(id);
        });
    });
    $('#slider-select .slider-id').change(function(){
        var slider_name = $(this).next('label.custom-control-label').text();
        $('#slider-image-title').text(slider_name);
    });
</script>
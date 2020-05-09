<script>
    $(document).ready(function(){

        $(document).on('click', '.delete-slider-fe', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            $('#slider-id').val(id);
        });

    });
</script>
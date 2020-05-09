<script>
    $(document).ready(function(){
        $('.delete-form').on('click', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            $('#delete-id').val(id);
        });
    });
</script>
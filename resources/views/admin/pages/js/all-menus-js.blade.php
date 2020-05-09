<script>
    $(document).ready(function(){
        $('.delete-menus').on('click', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            $('#delete-menu').val(id);
        });
    });
</script>
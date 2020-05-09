<script>
    $(document).ready(function(){
        $('.delete-menus').on('click', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            $('#delete-menu').val(id);
        });
    });
</script><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/js/all-menus-js.blade.php ENDPATH**/ ?>
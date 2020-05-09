<script>
    $(document).ready(function(){
        $('.delete-form').on('click', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            $('#delete-id').val(id);
        });
    });
</script><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/js/contact-forms-js.blade.php ENDPATH**/ ?>
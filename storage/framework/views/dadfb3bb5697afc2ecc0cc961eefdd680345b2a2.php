<script src="<?php echo e(asset('/admin/js/jquery.sortable.js')); ?>"></script>
<script>
    $(document).ready(function(){
        $('.delete-boats').on('click', function(){
            var id = $(this).attr('rel');
            $('#boat-id').val(id);
        });
        //$('.sortable').sortable();
        $('#save-order').on('click', function(e){
            var html = '';
            $('.boat-card').each(function(index, el){
                var id = $(this).attr('rel');
                html += '<input type="hidden" name="order['+id+']" value="'+(index+1)+'">';
            });
            $('#boat-orders').html(html);
            $('#save-boat-orders').submit();
        });
        $('#cat-search').on('change', function(e){
            e.preventDefault();
            var cat = $(this).children("option:selected").val();
            var sort = $('#sort-by').children("option:selected").val();
            window.location = "<?php echo e(url('/dashboard/boats')); ?>"+"?category="+cat+"&sort="+sort;
        });
        $('#sort-by').on('change', function(e){
            e.preventDefault();
            var cat = $('#cat-search').children("option:selected").val();
            var sort = $(this).children("option:selected").val();
            window.location = "<?php echo e(url('/dashboard/boats')); ?>"+"?category="+cat+"&sort="+sort;
        });
    });
</script><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/js/boats-js.blade.php ENDPATH**/ ?>
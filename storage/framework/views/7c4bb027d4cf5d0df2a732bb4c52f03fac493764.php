<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('featured-image').addEventListener('click', (event) => {
            event.preventDefault();

            var selector = 'selected-image';
            var preview = 'preview-image';

            $('#filemanager-frame').attr('src', '<?php echo e(url('/dashboard/media')); ?>?type=Images&selector='+selector+'&preview='+preview);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('featured-image').addEventListener('click', (event) => {
            event.preventDefault();

        var selector = 'selected-image';
        var preview = 'preview-image';

        $('#filemanager-frame').attr('src', '<?php echo e(url('/dashboard/media')); ?>?type=Images&selector='+selector+'&preview='+preview);
    });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('preview-image').src = $url;
    }

    $(document).ready(function(){
        $('.btn-delete').on('click', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            $('#delete-category').val(id);
        });
        $(document).on('click', '.btn-edit', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            var name = $('#cat-name-'+id).text();
            var sub = $('#cat-sub-'+id).text();
            var slug = $('#cat-slug-'+id).text();
            var details = $('#cat-details-'+id).text();
            var image = $('#featured-image-'+id).val();

            $('#edit-id').val(id);
            $('#edit-title').val(name);
            $('#edit-sub').val(sub);
            $('#edit-slug').val(slug);
            $('#edit-details').val(details);
            $('#edit-image').val(image);
            $('#edit-preview').attr('src', image);

            var selector = 'edit-image';
            var preview = 'edit-preview';

            $('#filemanager-frame-edit').attr('src', '<?php echo e(url('/dashboard/media')); ?>?type=Images&selector='+selector+'&preview='+preview);
        });
    });
</script><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/js/categories-js.blade.php ENDPATH**/ ?>
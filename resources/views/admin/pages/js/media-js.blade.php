<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    $(document).ready(function(){
        $('#filemanager-frame').attr('src', '{{ url('/dashboard/media?type=Images') }}');
    });
</script>
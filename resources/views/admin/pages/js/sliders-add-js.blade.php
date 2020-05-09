<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('add-image').addEventListener('click', (event) => {
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
        var count = 0;
        var editId = 0;
        $('#confirm-slider').on('click', function(e){
            e.preventDefault();

            var image = $('#selected-image').val();
            var caption = $('#caption').val();
            var text = $('#text').val();

            if(editId !== 0){
                $('#thumb-image-'+editId).attr('src', image);
                $('#thumb-caption-'+editId).text(caption);
                $('#thumb-text-'+editId).text(text);
                $('#image'+editId).val(image);
                $('#caption'+editId).val(caption);
                $('#text'+editId).val(text);
            }else{
                count++;
                var html = '<div class="card shadow ml-4 mb-4 boat-card" id="slider-image-'+count+'" style="width: 18rem;">'+
                        '<img class="card-img-top" id="thumb-image-'+count+'" src="'+image+'" alt="Card image cap">'+
                        '<div class="card-body">'+
                        '<h5 class="card-title" id="thumb-caption-'+count+'">'+caption+'</h5>'+
                        '<p class="card-text" id="thumb-text-'+count+'">'+text+'</p>'+
                        '</div>'+
                        '<div class="card-body">'+
                        '<div class="row">'+
                        '<div class="col">'+
                        '<input type="hidden" id="caption'+count+'" name="caption'+count+'" value="'+caption+'">'+
                        '<input type="hidden" id="text'+count+'" name="text'+count+'" value="'+text+'">'+
                        '<input type="hidden" id="image'+count+'" name="image'+count+'" value="'+image+'">'+
                        '<a href="#" rel="'+count+'" class="card-link edit-image" data-toggle="modal" data-target="#file-manager">Edit</a>'+
                        '<a href="#" rel="'+count+'" class="card-link delete-image">Remove</a>'+
                        '</div>'+
                        '<div class="col">'+
                        '<div class="custom-control custom-switch float-right">'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
                        '</div>';
                $('#add-images').after(html);
            }

            $('#file-manager').modal('hide');
            $('#selected-image').val('');
            $('#preview-image').attr('src', '');
            $('#caption').val('');
            $('#text').val('');
            editId = 0;
            $('#count').val(count);
        });

        $(document).on('click', '.edit-image', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            editId = id;
            //alert(id);

            var image = $('#image'+id).val();
            var caption = $('#caption'+id).val();
            var text = $('#text'+id).val();

            $('#selected-image').val(image);
            $('#preview-image').attr('src', image);
            $('#caption').val(caption);
            $('#text').val(text);

            var selector = 'selected-image';
            var preview = 'preview-image';

            $('#filemanager-frame').attr('src', '{{ url('/dashboard/media') }}?type=Images&selector='+selector+'&preview='+preview);
        });

        $(document).on('click', '.delete-image', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            $('#slider-image-'+id).remove();
        });

        $('#file-manager').on('hidden.bs.modal', function(e){
            $('#selected-image').val('');
            $('#preview-image').attr('src', '');
            $('#caption').val('');
            $('#text').val('');
            editId = 0;
        });

    });
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('/admin/js/jquery.mjs.nestedSortable.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.sortable').nestedSortable({
            handle: 'div',
            helper:	'clone',
            items: 'li',
            maxLevels: 4,
            isTree: true,
            tolerance: 'pointer',
            toleranceElement: '> div',
            change: function(){
                console.log('Relocated');
            }
        });
        $('#save-menu').on('click', function(e){
            e.preventDefault();
            var menu = $('ol.sortable').nestedSortable('serialize');
            $.ajax({
                url: "{{ url('/dashboard/menus/'.$menu->id) }}",
                method: "POST",
                data: {'menu':menu, '_token':"{{ csrf_token() }}"},
                success: function(res){
                    window.location = "{{ url('/dashboard/menus/'.$menu->id) }}";
                },
                error: function(err){
                    alert('Something went wrong! Please try again!');
                }
            });
        });
        $('#cancel').on('click', function(e){
            e.preventDefault();
            window.location = "{{ url('/dashboard/menus/'.$menu->id) }}";
        });
        $('#add-pages').on('click', function(e){
            e.preventDefault();
            $('input[name="selected_pages"]:checked').each(function() {
                var page = this.value.split('_');
                var html = '<li class="list-group-item" id="route_'+page[0]+'">'+
                        '<div class="mb-2 mt-1"><span class="fa fa-arrows"></span>&nbsp;&nbsp;'+page[1]+
                        '<button rel="'+page[0]+'" class="btn btn-default btn-sm pull-right remove-item">'+
                        '<span class="fa fa-remove text-danger"></span>'+
                        '</button>'+
                        '</div>'+
                        '</li>';
                $('#menu-list').append(html);
                $('.remove-item').on('click', function(e){
                    e.preventDefault();
                    var id = $(this).attr('rel');
                    $('#route_'+id).remove();
                });
            });
        });
        $('#add-cats').on('click', function(e){
            e.preventDefault();
            $('input[name="selected_categories"]:checked').each(function() {
                var page = this.value.split('_');
                var html = '<li class="list-group-item" id="route_'+page[0]+'">'+
                        '<div class="mb-2 mt-1"><span class="fa fa-arrows"></span>&nbsp;&nbsp;'+page[1]+
                        '<button rel="'+page[0]+'" class="btn btn-default btn-sm pull-right remove-item">'+
                        '<span class="fa fa-remove text-danger"></span>'+
                        '</button>'+
                        '</div>'+
                        '</li>';
                $('#menu-list').append(html);
                $('.remove-item').on('click', function(e){
                    e.preventDefault();
                    var id = $(this).attr('rel');
                    $('#route_'+id).remove();
                });
            });
        });
        $('#add-boats').on('click', function(e){
            e.preventDefault();
            $('input[name="selected_boats"]:checked').each(function() {
                var page = this.value.split('_');
                var html = '<li class="list-group-item" id="route_'+page[0]+'">'+
                        '<div class="mb-2 mt-1"><span class="fa fa-arrows"></span>&nbsp;&nbsp;'+page[1]+
                        '<button rel="'+page[0]+'" class="btn btn-default btn-sm pull-right remove-item">'+
                        '<span class="fa fa-remove text-danger"></span>'+
                        '</button>'+
                        '</div>'+
                        '</li>';
                $('#menu-list').append(html);
                $('.remove-item').on('click', function(e){
                    e.preventDefault();
                    var id = $(this).attr('rel');
                    $('#route_'+id).remove();
                });
            });
        });
        $('.remove-item').on('click', function(e){
            e.preventDefault();
            var id = $(this).attr('rel');
            $('#route_'+id).remove();
        });
    });
</script>
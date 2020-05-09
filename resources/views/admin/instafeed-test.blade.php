@extends('admin.mainframe')
@section('content')

<div class="container">
    <h3>Instagram newsfeed test</h3>
    <div class="row" id="instafeed"></div>
</div>

<script src="{{ asset('frontend/js/instafeed.min.js') }}"></script>
<script>
    var feed = new Instafeed({
        get: 'user',
        userId: '20968966153',
        clientId: '23a36324375c498caa227e90beda807b',
        accessToken: '20968966153.23a3632.71e548d51e93438397e5db100fca3131',
        resolution: 'low_resolution',
        limit: 12,
        template: '<a href="@{{image}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4"><img src="@{{image}}" class="img-fluid"></a>'
    });
    feed.run();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

@endsection
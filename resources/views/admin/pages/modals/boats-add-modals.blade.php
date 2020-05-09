<div class="modal fade" id="file-manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="min-width: 75%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select image</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe class="row" id="filemanager-frame" style="width: 100%; min-height: 500px;"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="slider-select" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select slider</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach($sliders as $s)
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" rel="{{ $s->id }}" class="custom-control-input slider-id" id="customCheck{{ $s->id }}">
                        <label class="custom-control-label" for="customCheck{{ $s->id }}">{{ $s->title }} - code({{ $s->slider_code }})</label>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
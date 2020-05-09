<div class="modal fade" id="file-manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="min-width: 75%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select slider image</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Caption *</label>
                            <input type="text" class="form-control" name="caption" id="caption">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control" name="text" rows="4" id="text"></textarea>
                        </div>
                        <button type="button" id="confirm-slider" class="btn btn-outline-success float-right">Save</button>
                    </div>
                    <div class="col">
                        <div class="breadcrumb">
                            <input type="hidden" name="image" id="selected-image" value="{{ old('image') }}">
                            <img src="{{ old('image') }}" alt="Select from below" id="preview-image" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <br/>
                <iframe class="row" id="filemanager-frame" style="width: 100%; min-height: 500px;"></iframe>
            </div>
        </div>
    </div>
</div>
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

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete for sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are sure to delete the selected item.</div>
            <div class="modal-footer">
                <form method="POST" action="{{ url('/dashboard/boat-categories') }}">
                    @csrf
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="delete_id" id="delete-category" value="">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="min-width: 75%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/dashboard/boat-categories') }}">
                    @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="edit-title">
                        </div>
                        <div class="form-group">
                            <label>Sub-Caption</label>
                            <input type="text" class="form-control" name="sub_caption" id="edit-sub">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" id="edit-slug">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="details" rows="4" id="edit-details"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="confirm-slider" class="btn btn-outline-success mr-3 float-right">Save</button>
                            <button type="button" class="btn btn-outline-danger mr-3 float-right" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="breadcrumb">
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="edit_id" id="edit-id">
                            <input type="hidden" name="featured_image" id="edit-image" value="{{ old('image') }}">
                            <img src="{{ old('image') }}" alt="Select from below" id="edit-preview" style="width: 100%;">
                        </div>
                    </div>
                </div>
                </form>
                <br/>
                <iframe class="row" id="filemanager-frame-edit" style="width: 100%; min-height: 500px;"></iframe>
            </div>
        </div>
    </div>
</div>
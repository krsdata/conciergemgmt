<div class="modal fade" id="delete-slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete slider image</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/dashboard/slider-delete') }}">
                    @csrf
                    <label>Do you really want to delete the slider?</label>
                    <input type="hidden" id="slider-id" name="slider_id" value="">
                    <button class="btn btn-outline-secondary" type="button" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
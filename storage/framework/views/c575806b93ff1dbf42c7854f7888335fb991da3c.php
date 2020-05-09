<!-- Delete Modal-->
<div class="modal fade" id="delete-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form method="POST" action="<?php echo e(url('/dashboard/contact-form/delete')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="delete_id" id="delete-id" value="">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/modals/contact-forms-modals.blade.php ENDPATH**/ ?>
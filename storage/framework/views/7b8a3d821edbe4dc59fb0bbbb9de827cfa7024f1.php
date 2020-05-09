<?php $__env->startSection('content'); ?>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Contact Form</h1>
        </div>

        <?php echo $__env->make('admin.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row" id="builder">
        </div>

        <br/>
        <form method="post" action="<?php echo e(url('/dashboard/contact-forms/add')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Attach to a page/category/boat</label>
                        <select class="form-control" name="type" id="type" required="">
                            <option value="">Choose from below...</option>
                            <!--<option value="general">General</option>-->
                            <option value="page">Page</option>
                            <option value="category">Category</option>
                            <option value="boat">Boat</option>
                            <option value="dest">Destination</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4" id="optionBox" style="display: none;">
                    <!--<div class="form-group">
                        <label>Select a particular page/category/boat</label>
                        <select class="form-control" name="pbc_id" id="pbc">
                            <option value="">Choose from below...</option>
                            <option value="1">One</option>
                        </select>
                    </div>-->

                    <label>Select a particular page/category/boat</label>
                    
                    <!--Pages-->
                    <div class="form-group" id="allPages" style="display: none;">
                        <select class="form-control multiselect-ui" multiple="" style="display: none;">
                            <?php
                                if(!empty($allPages)){
                                foreach ($allPages as $p) {
                            ?>
                            <option value="<?php echo $p->id ?>"><?php echo $p->page_name ?></option>
                            <?php }} ?>
                        </select>
                    </div>

                    <!--allCategories-->
                    <div class="form-group" id="allCategories" style="display: none;">
                        <select class="form-control multiselect-ui" multiple="" style="display: none;">
                            <?php
                                if(!empty($allCategories)){
                                foreach ($allCategories as $p) {
                            ?>
                            <option value="<?php echo $p->id ?>"><?php echo $p->title ?></option>
                            <?php }} ?>
                        </select>
                    </div>

                    <!--allBoats-->
                    <div class="form-group" id="allBoats" style="display: none;">
                        <select class="form-control multiselect-ui" multiple="" style="display: none;">
                            <?php
                                if(!empty($allBoats)){
                                foreach ($allBoats as $p) {
                            ?>
                            <option value="<?php echo $p->id ?>"><?php echo $p->page_name ?></option>
                            <?php }} ?>
                        </select>
                    </div>
                    
                    <!--allDest-->
                    <div class="form-group" id="allDest" style="display: none;">
                        <select class="form-control multiselect-ui" multiple="" style="display: none;">
                            <?php
                                if(!empty($allDest)){
                                foreach ($allDest as $d) {
                            ?>
                            <option value="<?php echo $d->id ?>"><?php echo $d->page_name ?></option>
                            <?php }} ?>
                        </select>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Title (Optional)</label>
                        <input type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>">
                        <input type="hidden" name="components" id="form-comp">
                        <button type="submit" class="btn btn-outline-success float-right mt-3 mr-3">Save</button>
                        <button type="button" class="btn btn-outline-danger float-right mt-3 mr-3" id="cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/add-contact-form.blade.php ENDPATH**/ ?>
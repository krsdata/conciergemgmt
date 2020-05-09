<?php $__env->startSection('content'); ?>

    <?php
        //Call User Privileges
        $canEdit = true; $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('contact_forms');
        if(!empty($access)){
            if($access->can_write == NULL)
                $canEdit = false;
            if($access->can_delete == NULL)
                $canDelete = false;
        }
    ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Pages</h1>
        </div>

        <?php echo $__env->make('admin.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect02">With selected</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect02">
                                <option value="Un-publish">Un-publish</option>
                                <option value="Publish">Publish</option>
                                <option value="Thrash">Thrash</option>
                                <option value="Delete">Delete</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Show</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect03">Filter by status</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect03">
                                <option value="0">In-active</option>
                                <option value="1">Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search here..." aria-label="Search here..." aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Page Title</th>
                        <th>Page Link</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck<?php echo e($p->id); ?>">
                                    <label class="custom-control-label" for="customCheck<?php echo e($p->id); ?>"></label>
                                </div>
                            </td>
                            <td><?php echo e($p->title); ?></td>
                            <td><?php echo e($p->slug); ?></td>
                            <td><?php if($p->{'status'} == '1'): ?><?php echo e('Published'); ?><?php else: ?><?php echo e('Inactive'); ?><?php endif; ?></td>
                            <td>
                                <a href="<?php if($p->slug == '/'): ?><?php echo e(url('/')); ?><?php else: ?><?php echo e(url('/'.$p->slug)); ?><?php endif; ?>" target="_blank" class="btn btn-outline-secondary">Preview</a>
                                <?php if($canEdit){ ?>
                                <a href="<?php echo e(url('/dashboard/pages/'.$p->id)); ?>" class="btn btn-outline-info">Edit</a>
                                <?php } if($canDelete) { ?>
                                <a href="<?php echo e(url('/dashboard/pages/delete/'.$p->id)); ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this Page?');">Delete</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="float-right">
                    <?php echo e($pages->links()); ?>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/pages.blade.php ENDPATH**/ ?>
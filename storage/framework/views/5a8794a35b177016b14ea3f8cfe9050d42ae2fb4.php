<?php $__env->startSection('content'); ?>
    <?php
        //Call User Privileges
        $canEdit = true; $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('boats');
        if(!empty($access)){
            if($access->can_write == NULL)
                $canEdit = false;
            if($access->can_delete == NULL)
                $canDelete = false;
        }
    ?>

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Boat Categories</li>
        </ol>
 
        <?php echo $__env->make('admin.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <?php if($canEdit){ ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Add a Category</span>
                        </div>
                    </div>
                    <form method="POST" action="<?php echo e(url('/dashboard/boat-categories')); ?>">
                        <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title *</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e(old('title')); ?>">
                        </div>
                        <div class="form-group">
                            <label>Sub-Caption</label>
                            <input type="text" class="form-control" name="sub_caption" value="<?php echo e(old('sub_caption')); ?>">
                        </div>
                        <div class="form-group">
                            <label>Slug *</label>
                            <input type="text" class="form-control" name="slug" value="<?php echo e(old('slug')); ?>">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="details" rows="4"><?php echo e(old('details')); ?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="featured_image" id="selected-image" value="<?php echo e(old('featured_image')); ?>">
                            <img src="<?php echo e(old('featured_image')); ?>" alt="Preview" id="preview-image" style="width: 100%;">
                            <br/>
                            <button type="button" id="featured-image" class="btn btn-outline-dark mt-3" data-toggle="modal" data-target="#file-manager">Set Featured Image&nbsp;&nbsp;<span
                                        class="fas fa-image"></span></button>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-outline-danger float-left">Cancel</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-outline-success float-right">Create</button>
                            </div>
                        </div>
                    </div>
                        <input type="hidden" name="action" value="add">
                    </form>
                </div>
            </div>
            <?php } ?>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">List of Categories</span>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered justify-content-center" style="width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Sub-Caption</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td id="cat-name-<?php echo e($c->id); ?>"><?php echo e($c->title); ?></td>
                                    <td id="cat-sub-<?php echo e($c->id); ?>"><?php echo e($c->sub_caption); ?></td>
                                    <td id="cat-slug-<?php echo e($c->id); ?>"><?php echo e($c->slug); ?></td>
                                    <td id="cat-details-<?php echo e($c->id); ?>"><?php echo e($c->details); ?></td>
                                    <td>
                                        <span class="btn-group">
                                            <?php if($canEdit){ ?>
                                            <button class="btn btn-info btn-edit" rel="<?php echo e($c->id); ?>" data-toggle="modal" data-target="#editModal">
                                                <span class="fas fa-edit"></span>
                                            </button>
                                            <?php } if($canDelete){ ?>
                                            <button class="btn btn-danger btn-delete" rel="<?php echo e($c->id); ?>" data-toggle="modal" data-target="#deleteModal">
                                                <span class="fas fa-trash"></span>
                                            </button>
                                            <?php } if($canEdit == false && $canDelete == false) echo "N/A" ?>
                                        </span>
                                        <input type="hidden" id="featured-image-<?php echo e($c->id); ?>" value="<?php echo e($c->featured_image); ?>">
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <?php echo e($categories->links()); ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/categories.blade.php ENDPATH**/ ?>
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
            <li class="breadcrumb-item active">All Boats</li>
        </ol>

        <?php echo $__env->make('admin.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>With Selected</label>
                            <select class="form-control" disabled>
                                <option value="delete">Delete</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Sort by</label>
                            <select class="form-control" name="sort" id="sort-by">
                                <option value="ASC" <?php if($sort == 'ASC'): ?><?php echo e('selected'); ?><?php endif; ?>>Ascending</option>
                                <option value="DESC" <?php if($sort == 'DESC'): ?><?php echo e('selected'); ?><?php endif; ?>>Descending</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Search by category</label>
                            <select class="form-control" name="category" id="cat-search">
                                <option value="">All</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>" <?php if($cat == $c->id): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($c->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Search by text</label>
                    <input type="text" disabled name="search" class="form-control" placeholder="Search from boats...">
                </div>
            </div>
        </div>

        <div class="row">
            <form method="post" action="<?php echo e(url('/dashboard/boats?category='.$cat.'&sort='.$sort)); ?>" id="save-boat-orders">
                <?php echo csrf_field(); ?>
                <div id="boat-orders"></div>
            </form>
            <?php if($canEdit){ ?>
            <div class="form-group ml-5">
                <label class="text-info">Drag & reposition the boats to order them on boats pages then click "Save" to save.</label>
                <button class="btn btn-outline-secondary" id="save-order">Save</button>
            </div>
            <?php } ?>
        </div>

        <div class="row sortable">
            <?php if($canEdit) { ?>
            <div class="card shadow ml-4 mb-4" style="width: 18rem;">
                <div class="card-body text-center">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <a class="text-black-50" href="<?php echo e(url('/dashboard/boats-add')); ?>">
                            <span class="fas fa-folder-plus fa-6x"></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php $__currentLoopData = $boats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card shadow ml-4 mb-4 boat-card" rel="<?php echo e($boat->id); ?>" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo e($boat->image); ?>" alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title"><strong><?php echo e($boat->title); ?></strong></h5>
                        <p class="card-text"><strong>Serial No</strong> : <?php echo e($boat->sn_no); ?></p>
                        <?php if(isset($boat->category)): ?><p class="card-text"><strong>Category</strong> : <?php echo e($boat->category->title); ?></p><?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <?php if($canEdit){ ?>
                                <a href="<?php echo e(url('/dashboard/boats/'.$boat->id)); ?>" class="card-link text-info"><strong>Edit</strong></a>
                                <?php } if($canDelete){ ?>
                                <a href="#" rel="<?php echo e($boat->id); ?>" class="card-link text-danger delete-boats" data-toggle="modal" data-target="#delete-boat"><strong>Delete</strong></a>
                                <?php } ?>
                            </div>

                            <?php if($canEdit){ ?>
                            <div class="col">
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" name="select_boat<?php echo e($boat->id); ?>" class="custom-control-input" id="boat-select<?php echo e($boat->id); ?>" style="cursor: pointer;">
                                    <label class="custom-control-label font-weight-bold" for="boat-select<?php echo e($boat->id); ?>"></label>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="row justify-content-center">
            
                
                    
                
            
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/boats.blade.php ENDPATH**/ ?>
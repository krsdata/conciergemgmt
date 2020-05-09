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
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" rel="<?php echo e($s->id); ?>" class="custom-control-input slider-id" id="customCheck<?php echo e($s->id); ?>" <?php if($page->featured_slider == $s->id): ?><?php echo e('checked'); ?><?php endif; ?>>
                        <label class="custom-control-label" for="customCheck<?php echo e($s->id); ?>"><?php echo e($s->title); ?> - code(<?php echo e($s->slider_code); ?>)</label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contact-form-select" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Contact Form</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" rel="0" class="custom-control-input contact-form-id" id="customFormCheck0" <?php if($page->contact_form == 0): ?><?php echo e('checked'); ?><?php endif; ?>>
                        <label class="custom-control-label" for="customFormCheck0">None</label>
                    </div>
                <?php $__currentLoopData = $contactForms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" rel="<?php echo e($form->id); ?>" class="custom-control-input contact-form-id" id="customFormCheck<?php echo e($form->id); ?>" <?php if($page->contact_form == $form->id): ?><?php echo e('checked'); ?><?php endif; ?>>
                        <label class="custom-control-label" for="customFormCheck<?php echo e($form->id); ?>"><?php echo e($form->title); ?> - code(<?php echo e($form->short_code); ?>)</label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/modals/edit-page-modals.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<style>.featured-image{background:url("<?php echo e($page->featured_image); ?>") no-repeat 50% 50%;background-size:cover} </style>

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">

    <section class="page-title featured-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                      <h1 class="text-capitalize mb-4 text-lg"><?php echo e($page->page_name); ?></h1>
                      <!--     <ul class="list-inline">
                            <li class="list-inline-item"><a href="<?php echo e(url('/')); ?>" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="<?php echo e(url('/').$page->slug); ?>" class="text-white-50"><?php echo e($page->title); ?></a></li>
                        </ul> !-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About Start -->
    <section class="section about-2 position-relative">
        <div class="container">
            <?php echo $page->content; ?>

        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/template.yachthampton.com/public_html/resources/views/frontend/pages/single-page.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
    <div id="content">
        <section class="position-relative bg-gray boat-topname">
            <h1 class="unit-1-heading text-center text-color" data-aos="fade-center" data-aos-duration="1000"><?php echo e($page->page_name); ?></h1>
            </section>
            
            
                <?php if(!empty($slider)): ?>
        <!-- Header Slider Start !-->

        <section class="single-cms-loader">
            <div class="container">

                <div id="mainloder" class="mainloder">
        <div class="subloder">
         <!-- <div class="lds-ring"><div></div><div></div><div></div><div></div></div> -->
         <img src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif" />
        </div> 
    </div>

            <div id="single-product" class="single-product owl-carousel owl-theme">
                <!-- Image loading icon -->
                <?php if(!empty($slider->slides)): ?>
                    <?php $first = 0; ?>
                <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php /*
                <img class="owl-lazy" data-src="{{ $ss->image_path }}" alt="yachthampton slides" style="max-height: 750px;" /> */ ?>
                 <?php $first++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>    
        <div id="myCarousel" class="carousel slide carousel-fade carousel-ajax fix-slider" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <?php if(!empty($slider->slides)): ?>
                    <?php $first = 0; ?>
                    <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-target="myCarousel" data-slide-to="<?php echo e($first); ?>" <?php if($first == 0): ?><?php echo e('class="active"'); ?><?php endif; ?>></li>
                            <?php $first++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ol>
            <div class="carousel-inner">
                <?php if(!empty($slider->slides)): ?>
                    <?php $first = 0; ?>
                <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($first == 0): ?><?php echo e('active'); ?><?php endif; ?>">
                    <img class="d-block w-100 lazyload" data-src="<?php echo e($ss->image_path); ?>" alt="yachthampton slides" style="max-height: 750px;">
                    <div class="carousel-caption d-none d-md-block mb-5">
                    </div>
                </div>
                    <?php $first++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">‹</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">›</span>
            </a>
        </div>
</div>
    </section>
    <?php endif; ?>
     <div class="container">   
</div>
</div>
    <!-- Header Slider End !-->

    <?php echo $page->content; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/templates/tubing.blade.php ENDPATH**/ ?>
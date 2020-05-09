<?php $__env->startSection('content'); ?>
<!--
    <section class="page-title popular-boat featured-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                       <!-- <span class="text-white"><?php echo e($page->title); ?></span> !-->
                   <!--     <h1 class="text-capitalize mb-4 text-lg"><?php echo e($page->sub_caption); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>.featured-image{background:url("<?php echo e($page->featured_image); ?>") no-repeat 50% 50%;background-size:cover} </style>
      !-->
    <section class="position-relative bg-gray boat-topname counting">
        <div class="containers mb-5 pt-3 pb-3 boat-header">
            <p class="mb-1 mt-2 text-center text-white"><?php echo e($page->title); ?></p>
        </div>
      
        
        <div class="containers">
            <div class="rows">
                <?php if($boats->isNotEmpty()): ?>
                <?php $boatNum = 1; ?>
                <?php $__currentLoopData = $boats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $extra = array();
                        foreach($b->details as $bd){
                            $extra[$bd->key] = $bd->value;
                        }
                    ?>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <?php if($extra['best_seller'] == 'on'): ?>
                            <div class="seller-img">
                                <img class="lazyload" data-src="<?php echo e(asset('/photos/2/blue_seller.png')); ?>" src="<?php echo e(asset('/photos/2/blue_seller.png')); ?>" alt="best seller image hamptons boat rental" />
                            </div>
                        <?php endif; ?>
                        <?php if(isset($extra['jet_ski']) && $extra['jet_ski'] == 'on'): ?>
                            <div class="jet_ski">
                                <img class="lazyload" data-src="<?php echo e(asset('/photos/2/jet_ski.png')); ?>" src="<?php echo e(asset('/photos/2/jet_ski.png')); ?>" alt="jetski icon yachthampton" />
                            </div>
                        <?php endif; ?>
                        <?php if(isset($extra['sea_bob']) && $extra['sea_bob'] == 'on'): ?>
                            <div class="sea_bob">
                                <img class="lazyload" class="lazyload" data-src="<?php echo e(asset('/photos/2/sea_bob.png')); ?>" src="<?php echo e(asset('/photos/2/sea_bob.png')); ?>" alt="sea bob icon yachthampton" />
                            </div>
                        <?php endif; ?>
                        <?php if(isset($extra['paddle-board']) && $extra['paddle-board'] == 'on'): ?>
                            <div class="paddle-board">
                                <img class="lazyload" class="lazyload" data-src="<?php echo e(asset('/photos/2/paddleboard.png')); ?>" src="<?php echo e(asset('/photos/2/paddleboard.png')); ?>" alt="paddle-board icon yachthampton" />
                            </div>
                        <?php endif; ?>
                        <?php if(isset($extra['brand_new']) && $extra['brand_new'] == 'on'): ?>
                            <div class="seller-img">
                               <img class="lazyload" data-src="<?php echo e(asset('/photos/2/brand_new.png')); ?>" src="<?php echo e(asset('/photos/2/brand_new.png')); ?>" alt="brand new icon yachthampton" />
                            </div>
                        <?php endif; ?>
                        <?php if($extra['4_hour'] == 'on'): ?>
                        <div class="image10">
                            <img class="lazyload" data-src="<?php echo e(asset('/photos/2/4-hour-rate.png')); ?>" src="<?php echo e(asset('/photos/2/4-hour-rate.png')); ?>" alt="4 hour rate icon yachthampton" />
                        </div>
                        <?php elseif($extra['8_hour'] == 'on'): ?>
                            <div class="image10">
                                <img class="lazyload" data-src="<?php echo e(asset('/photos/2/8-hour-rate.png')); ?>" src="<?php echo e(asset('/photos/2/8-hour-rate.png')); ?>" alt="8 hour rate icon yachthampton" />
                            </div>
                            <?php else: ?>
                            <?php endif; ?>
                            <div class="ourboatbox">
                                <a href="<?php echo e(url('/'.$b->slug)); ?>" target="_blank">
                                    <img class="img-fluid rounded boat-feature lazyload" data-src="<?php echo e($b->image); ?>" src="<?php echo e($b->image); ?>" alt="yachthampton_boat" />
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="popular-image">
                                        <span class="post-no">
                                            <?php echo e($b->sn_no); ?>

                                           
                                           <!-- 
                                            <?php echo e($boatNum++); ?> !-->
                                        </span>
                                    </span>
                                    <span class="boats_price_box">
                                         <span class="boats_price_box_item2">From</span>
                                        <span class="boats_price_box_item text-white h4">$<?php echo e($extra['price']); ?></span>
                                        <span class="boats_price_box_item1">+<?php echo e($extra['added_price']); ?></span>
                                    </span>
                                </div>
                            </div>
                        <div class="blog-item-content bg-white p-1 boat_it">

                                <h3 class="text-center font-weight-bold mb-4 pt-2"><a href="<?php echo e(url('/'.$b->slug)); ?>" target="_blank"><?php echo e($b->page_name); ?></a></h3>
                                <div class="text-center mb-3 boat-info"><span class="text-capitalize"><i class="fa fa-map-marker"></i> <?php echo e($extra['harbor']); ?></span></div>
                                
                                <div class="text-center mb-3 boat-info">
                                    <span class="text-capitalize mr-3"><i class="fas fa-ruler-horizontal"></i> <?php echo e($extra['size']); ?> FT</span>
                                    <span class="text-capitalize mr-3"><i class="fas fa-tachometer-alt"></i> <?php echo e($extra['speed']); ?> MPH</span>
                                    <span class="text-capitalize mr-3"><i class="fas fa-user-friends"></i> <?php echo e($extra['capacity']); ?></span>
                                    <span class="text-capitalize"><i class="fas fa-bed"></i> <?php echo e($extra['beds']); ?></span>
                                </div>

                                <div class="text-center boat-info">
                                    <?php if(isset($extra['day_trips']) && $extra['day_trips'] == 'on'){ ?>
                                    <span class="text-capitalize"><i class="fa fa-sun-o"></i> Day Trips</span>
                                    <?php } if(isset($extra['overnights']) && $extra['overnights'] == 'on'){ ?>
                                    <span class="text-capitalize ml-2"><i class="fa fa-moon-o"></i>  Overnights</span>
                                    <?php } ?>
                                </div>
                                <div class="col text-center mt-4 pb-3"><a href="<?php echo e(url('/'.$b->slug)); ?>" target="_blank" class="btn btn-lg btn-main btn-round-full border-0 mb-3 font-weight-bold button-space button-width">Learn More</a></div>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="col text-center">
                        <h5>There are no boats added yet. Please wait for a while.</h5>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/template.yachthampton.com/public_html/resources/views/frontend/pages/single-category.blade.php ENDPATH**/ ?>
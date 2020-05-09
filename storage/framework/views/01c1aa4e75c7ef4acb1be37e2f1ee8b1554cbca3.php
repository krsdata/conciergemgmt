<?php $__env->startSection('content'); ?>

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">

      <?php if(!empty($slider) && !empty($slider->slides)): ?>
        <section class="">
            <div class="container">
            <div id="myCarousel" class="carousel slide carousel-fade carousel-ajax fix-slider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $count = 0; ?>
                    <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo e($count); ?>" <?php if($count == 0): ?>class="active"<?php endif; ?>></li>
                        <?php $count++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
                <div class="carousel-inner">
                    <?php $count = 0; ?>
                    <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php if($count == 0): ?><?php echo e('active'); ?><?php endif; ?>">
                            <img class="img-fluid w-100 lazyload" data-src="<?php echo e($ss->image_path); ?>" alt="First slide">

                            <div class="carousel-caption d-none d-md-block mb-5">
                                <div class="block text-left mb-4">
                                    <h2 class="animated fadeInUp mb-5 text-white"><?php echo e($ss->title); ?></h2>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <section class="about position-relative mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-12 offset-md-0">
                        <div class="text-center">
                            <h1 class="font-tenor">Welcome to Kokomos</h1>
                            <h3 class="pb-3 heading-second">Restaurant | Beach Bar</h3><hr/>
                        </div>
                   
                </div>
            </div>
        </div>
    </section>

<section class="section about position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-item">
                        <img class="d-block w-100 lazyload" data-src="<?php echo e(asset('/photos/2/kokomos/waitress_kokomos.jpg')); ?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="about-item">
                        <h2 class="text-center position-relative content-title mb-2">Why Kokomo's?</h2>
                        <div class="about-content">
                            <p class="text-justify ptr">Kokomo’s Restaurant is located right on Sound View Beach in Old Lyme, CT. We serve seafood, sandwiches and more with craft beers or specialty drinks. We offer a beautiful, waterfront dining experience.</p>
                            <p class="text-justify ptr">Kokomo’s menu celebrates the healthy and delicious summertime food of the French Riviera and coastal Italy. Many signature dishes return in 2019—moules mariniére, niçoise salad, bouillabaisse—supplemented by new additions for lunch and dinner from executive chef Edi Cungu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-item">
                        <div class="about-content">
                            <p class="text-justify ptr">Grilled octopus with fava beans and fresh herbs, creamy burrata with blistered tomatoes, vegetarian charred & sweet potato, pasta with ruby red shrimp & asparagus, rack of lamb with provençal vegetables, whole fish for two….every dish is seasonal and sourced wherever possible from dayboat fishermen and local organic farmers. This is seaside dining at its most sublime!</p>
                            <p class="text-justify ptr">The new wine list is built around refreshing whites from coastal Italy, Spain and France; lighter-bodied red wines from southern Europe and California; and, of course, the house elixir: rosé. Our very own, just-released André Balazs Reserve Rosé benefitted from a fabulous growing season in Long Island last summer to produce an enchanting blend of bright fruits and tart acidity.</p>
                            <p>We are open-</p>
                            <ul class="list-unstyled">
                            <li class="d-flex align-items-center">Sunday – Thursday: <i class="far fa-clock ml-1 mr-1"></i> 10AM – 1AM</li>
                            <li class="d-flex align-items-center">Friday – Saturday: <i class="far fa-clock ml-1 mr-1"></i> 10AM – 2AM</li>
                            </ul>
                            <p class="text-uppercase mt-5">Check out these options for a dining and boating experiance:</p>
                            <ul class="list-unstyled">
                            <li class="d-flex align-items-center">1.<a class="ml-1 mr-1" href="https://yachthampton.com/38-catamaran" target="_blank"> 38′ Catamaran</a>VIP Experience</li>
                            <li class="d-flex align-items-center">2.<a class="ml-1 mr-1" href="https://yachthampton.com/73-ferretti" target="_blank"> 73′ Ferretti</a>VIP Experience</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative kokomos-lunch mt-5">
        <div class="container" data-aos="fade-center" data-aos-duration="1000">
                <div class="row">
                     <div class="col-md-12 col-sm-12">
              <h2 class="text-center position-relative mb-2 font-tenor"><a href="https://hamptonsboatrental.com/kokomos-lunch" target="_blank">Lunch Menu</a></h2></div>
        </div></div>
    </section>
    
    
    <section class="section position-relative kokomos-dinner mt-5">
        <div class="container" data-aos="fade-center" data-aos-duration="1000">
                <div class="row">
                     <div class="col-md-12 col-sm-12">
              <h2 class="text-center position-relative mb-2 font-tenor"><a href="https://hamptonsboatrental.com/kokomos-dinner" target="_blank">Dinner Menu</a></h2></div>
        </div></div>
    </section>
    

    <!-- Section Testimonial End -->
    <section class="about position-relative bg-gray pt-5">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="text-center">
                        <i class="fas fa-map-marker-alt fa-4x" aria-hidden="true" data-aos="fade-center" data-aos-duration="1000"></i>
                        <div class="card-body mt-2">
                            <h2 class="mt-3 mb-5 lh-36">Location</h2>
                            <p>88 Hartford Avenue,</p>
                            <p class="mt-2">Old Lyme, CT 06371</p>
                            <a href="https://goo.gl/maps/utmtyoFQLQt"><p class="mt-2">Get Direction</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="text-center">
                        <i class="fa fa-phone fa-4x" aria-hidden="true" data-aos="fade-center" data-aos-duration="1000"></i>
                        <div class="card-body mt-2">
                            <h2 class="mt-3 mb-5 lh-36"><a>Contact Us</a></h2>
                            <p><a href="tel:+1-860-390-6403">(860) 390-6403</a></a></p>
                           <p class="mt-2"><a href="mailto:contact@kokomosrestaurant.com">Send us an email</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section google-map bg-gray">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3832.3072940383922!2d-72.28093693585072!3d41.285017241383485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e619a9f681241d%3A0xdf2dbab4bbb8822!2s88+Hartford+Ave%2C+Old+Lyme%2C+CT+06371%2C+USA!5e0!3m2!1sen!2sbd!4v1561471745024!5m2!1sen!2sbd" class="gmap" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="text-center">
                <h3 class="text-uppercase font-weight-bold mt-4 mb-3">Hours & location</h3>
                            <p>Sunday – Thursday: <i class="far fa-clock ml-1 mr-1"></i> 10AM – 1AM</p>
                            <p>Friday – Saturday: <i class="far fa-clock ml-1 mr-1"></i> 10AM – 2AM</p>
                            <p class="mt-5">88 Hartford Avenue, Old Lyme, CT 06371</p>
            </div>
        </div>
    </section>

    <!-- Section About Start -->
    <section class="about-2 position-relative">
        <div class="container">
            <?php echo $page->content; ?>

        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/templates/kokomos-restaurant.blade.php ENDPATH**/ ?>
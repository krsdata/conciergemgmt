<?php $__env->startSection('content'); ?>
<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
        <section class="page-title featured-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white"><?php echo e($page->page_name); ?></span>
                            <h1 class="text-capitalize mb-4 text-lg"><?php echo e($page->sub_caption); ?></h1>
                            <!--   <ul class="list-inline">
                                <li class="list-inline-item"><a href="<?php echo e(url('/')); ?>" class="text-white">Yachthampton</a></li>
                            </ul> !-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <style>.featured-image{background:url("<?php echo e($page->featured_image); ?>") no-repeat 50% 50%;background-size:cover} </style>

<section class="position-relative bg-gray pb-4 pt-4">
    <div class="container">
    <h2 class="text-center position-relative text-color mb-4 content-title">Our Process</h2>

    <p class="text-center">After 5 years and 1000+ reservations for hundreds of busy clients this is the simplest and most efficient means of securing a chartered boat in the middle of the busy summer season and busy weekends filled with last-minute shoppers.</p>
    <h2 class="mt-5">Step 1. Select your top 3 boats</h2>
    <p class="ptr">Go to “Our Boats” page and select in priority order boat 1, 2, 3 that interest you. Go here <a class="text-primary" href="/hamptons-boat-charters" target="_blank">OUR BOATS</a>.</p>

    <h2>Step 2. Complete our webform</h2>
    <p>Read each of your favorite boats fully and send date/s and priority order of boats that fit your needs and budget 1, 2, 3. On this 100% ready-to-book form.
    <a class="text-primary" href="/ready-to-book/" target="_blank">100% Ready to Book</a></p>
    <p class="ptr">*We strongly urge you to also select weekdays and multiple days and boats to guarantee the best boat at the best price and so you get out on the water. Saturday’s sell out. We need and use this form to isolate a boat that guarantees your satisfaction.</p>
    <h2>Step 3. Select the best date time and available boat</h2>
    <p class="ptr">We reply via email and or text with availability as we have to align captain, crew, dockage, delivery. You then just make a decision and say yes! We love decisive clients!</p>
    <h2>Step 4. Plan your memorable day!</h2>
    <p>We introduce you to our VIP yacht concierge to go over details itinerary and provisions etc. You now have a friend with a boat/s so save our number to your cell phone and text us any day this summer. Let’s get started here!</p>
    <p class="ptr"><a class="text-primary" href="/hamptons-boat-charters" target="_blank">Hamptons Boat Rental</a></p>
    </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/templates/our-efficient-process.blade.php ENDPATH**/ ?>
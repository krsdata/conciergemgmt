<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/frontend/css/boats-filter.css')); ?>">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Open+Sans:wght@400;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page"> 

<style>
.blog-item {
    border-bottom: none;    
}
.cms-boatslider {
    max-height: 700px;
    overflow: hidden;
}
.boat-header {
    background: transparent;
    color: #17B8F4;
    text-transform: uppercase;
    border-top: 2px solid #17B8F4;
    margin-top: 50px;
}
.boat-filter-section {
    border-bottom: 2px solid#1B1464;
    padding: 30px 0;
    height: 100px;
    text-transform: uppercase;
    color: #1B1464;
    font-size: 25px;
    font-family: 'Open Sans', sans-serif;
}
.boat-filter-section .container {
    max-width: 1300px;
}
.filterBtns span {
    font-weight: 400;
    float: left;
    font-size: 22px;
}
.boat-filter-section .filterOpt {
    border: none;
    font-size: 22px;
    font-weight: 100;
    color: #1B1464;
    text-transform: unset;
    font-family: 'Montserrat', sans-serif;
    padding: 0 10px;
}
.boat-filter-section .filterOpt:hover {
    background: #fff;
    color: #1B1464;
}
.boat-filter-section .filterOpt.activate {
    background: #fff;
    color: #1B1464;
}
.boat_it {
    margin-top: 0;
}
.boat-no {
    position: absolute;
    top: 15px;
    left: 15px;
    border: 1px solid #1B1464;
    background: #fff;
    font-size: 20px;
    color: #1B1464;
    border-radius: 45px;
    width: 45px;
    text-align: center;
    transition: all 0.5s ease;
    height: 45px;
    line-height: 45px;
}
a:hover .boat-no {
    background: #1B1464;
    color: #fff;
}
.boat-heading {
    color: #1B1464;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
        font-size: 22px;
    line-height: 28px;
    margin-top: 15px;
    position: relative;
}
.boat-heading a {
    color: #1B1464;
    display: block;
}
.boat-heading a .place {
    position: absolute;
    top: -20px;
    right: 0;
    font-size: 16px;
    letter-spacing: 0;
    color: #FCBA63;
    font-weight: 400;
}
.boat-pricing {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    font-size: 16px;
    color: #1B1464;
    line-height: 26px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.boat-pricing strong {
    font-size: 20px;
    font-weight: 400;
}
.boat-info {
    letter-spacing: 1px;
    font-weight: 400;
    font-size: 16px;
    color: #1B1464;
    text-transform: uppercase;
    text-align: center;
}
.ourboatbox:hover a:after {
    display: none !important;
}
.learn-more {
        border-radius: 50px;
    text-transform: uppercase;
    color: #15b8f3;
    font-weight: 400;
    letter-spacing: 2px;
    border: 1px solid #15b8f3;
    text-align: center;
    height: 35px;
    line-height: 35px;
    text-decoration: none;
    padding: 0 20px;
    transition: all 250ms ease-out;
    font-size: 13px;
    float: right;
    vertical-align: middle;
    display: inline-block;
    margin-top: -3px;
}
.learn-more:hover {
    background: #15b8f3;
    color: #fff;
}
.section.blog-wrap { 
    padding-left: 15px;
    padding-right: 15px;
}
.boat-info > .mr-3 {
    white-space: nowrap;
}
@media  only screen and (max-width: 1000px) {
    .learn-more {
        clear: both;
        width: 100%;
        float: none;
        display: inline-block;
        margin-top: 20px;
    }
}
@media  only screen and (max-width: 800px) {
    .filterBtns span {
        width: 100%;
    }
    .boat-filter-section {
        height: auto;    
    }
}
</style>

<div class="counting">
    <?php if(!empty($slider) && !empty($slider->slides)): ?>
        <section class="cms-boatslider">
            <div id="mainloder" class="mainloder" style="max-height: 100vh;">
                <div class="subloder">
                 <!-- <div class="lds-ring"><div></div><div></div><div></div><div></div></div> -->
                 <img src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif" />
                </div> 
            </div>
            <div class="single-product owl-carousel owl-theme">
                 <?php $count = 0; ?>
                    <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php /*
                <div class="item">
                    <img class="d-block w-100 lazyload" data-src="{{ $ss->image_path }}" alt="First slide" style="max-height: 750px;">
                    <div class="carousel-caption d-none d-md-block mb-5">
                                <div class="block text-left mb-4">
                                    <h2 class="animated fadeInUp mb-5 text-white">{{ $ss->title }}</h2>
                                    <a href="#" target="_blank" class="btn btn-main animated fadeInUp btn-round-full">Book Now!<i
                                                class="btn-icon fa fa-angle-right ml-2"></i></a>
                                </div>
                            </div>
                </div>   
                 <?php */ $count++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
            

            <div id="myCarousel" class="carousel slide carousel-fade carousel-ajax" data-ride="carousel" data-interval="5000" style="display:;">
                <ol class="carousel-indicators">
                    <?php $count = 0; ?>
                    <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($slider->slides) > 1){ ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo e($count); ?>" <?php if($count == 0): ?>class="active"<?php endif; ?>></li>
                    <?php } $count++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
                <div class="carousel-inner">
                    <?php $count = 0; ?>
                    <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php if($count == 0): ?><?php echo e('active'); ?><?php endif; ?>">
                            <img class="d-block w-100 lazyload" data-src="<?php echo e($ss->image_path); ?>" src="<?php echo e($ss->image_path); ?>" alt="Our Boats Header Image">

                            <div class="carousel-caption d-none d-md-block mb-5">
                                <div class="block text-left mb-4">
                                    <h2 class="animated fadeInUp mb-5 text-white"><?php echo e($ss->title); ?></h2>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
    
                <?php if($count > 1) { ?>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">‹</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">›</span>
                </a>
                <?php } ?>
            </div>
        </section>
    <?php endif; ?>
    
    <?php $catCount = 0; ?>
    
    <section class="section blog-wrap pt-3">
        <div class="containers">
            <div class="rows" id="nonFilterBoats">
                <!--Boats Start col-lg-push-3-->
                <div class="col-md-12" id="boats">
                    <?php $advanceFilterBox = false; $i = 0; ?>
                    <?php if(isset($categories) && !empty($categories)): ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php 
                        if(isset($filterData['form_boatType']))
                        {
                            $flBoatType = $filterData['form_boatType'];
                            //print_r($flBoatType);
                            $found = \App\Helper\CommonFunction::findCatInFilter($c->title, $flBoatType);
                            
                            if($found)
                            {

                    ?>
                    <div class="containers mb-5 pt-3 pb-3 boat-header">
                        <p class="mb-1 mt-2 font-tenor"><?php echo e($c->title); ?></p>
                    </div>
                    <?php }} else if(strtolower($c->title) != 'entire fleet') { ?>
                    <div class="containers mb-5 pt-3 pb-3 boat-header">
                        <p class="mb-1 mt-2 font-tenor"><?php echo e($c->title); ?></p>
                    </div>
                    <?php } ?>

                    <div class="row">
                        <?php
                            //echo $url = url()->current();
                            if(!empty($c->boats)) {

                            $array = json_decode(json_encode($c->boats), True);
                            
                            foreach($c->boats as $b) {
                                $canShow = true;                            

                                if($canShow) {
                            ?>
                                <div class="col-lg-6 col-md-6 mb-5">
                                    <div class="blog-item">
                                        <?php /*
                                        @foreach($b->details as $bd)
                                            @if($bd->key == 'best_seller' && $bd->value == 'on')
                                                <div class="seller-img">
                                                  <img class="lazyload" data-src="{{ asset('/photos/2/blue_seller.png') }}" src="{{ asset('/photos/2/blue_seller.png') }}" alt="best seller image yachthampton" />
                                                </div>
                                            @endif
                                            @if($bd->key == 'jet_ski' && $bd->value == 'on')
                                                <div class="jet_ski">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/jet_ski.png') }}" src="{{ asset('/photos/2/jet_ski.png') }}" alt="jetski icon yachthampton" />
                                                </div>
                                            @endif

                                            @if($bd->key == 'sea_bob' && $bd->value == 'on')
                                                <div class="sea_bob">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/sea_bob.png') }}" src="{{ asset('/photos/2/sea_bob.png') }}" alt="sea bob icon yachthampton" />
                                                </div>
                                            @endif

                                            @if($bd->key == 'paddle-board' && $bd->value == 'on')
                                                <div class="paddle-board">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/paddleboard.png') }}" src="{{ asset('/photos/2/paddleboard.png') }}" alt="paddle-board icon yachthampton" />
                                                </div>
                                            @endif

                                            @if($bd->key == 'brand_new' && $bd->value == 'on')
                                                <div class="seller-img">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/brand_new.png') }}" src="{{ asset('/photos/2/brand_new.png') }}" alt="brand new icon yachthampton" />
                                                </div>
                                            @endif
                                            @if($bd->key == '4_hour' && $bd->value == 'on')
                                                <div class="image10">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/4-hour-rate.png') }}" src="{{ asset('/photos/2/4-hour-rate.png') }}" alt="4 hour rate icon yachthampton" />
                                                </div>
                                            @elseif($bd->key == '8_hour' && $bd->value == 'on')
                                                <div class="image10">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/8-hour-rate.png') }}" src="{{ asset('/photos/2/8-hour-rate.png') }}" alt="8 hour rate icon yachthampton" />
                                                </div>
                                            @else
                                            @endif
                                        @endforeach
                                        */ ?>
                                        <div class="ourboatbox">
                                            <a href="<?php echo e(url('/'.$b->slug->slug)); ?>" target="_blank">
                                                <img class="img-fluid rounded boat-feature lazyload" data-src="<?php echo e($b->image); ?>" src="<?php echo e($b->image); ?>" alt="yachthampton_boat" />
                                                <span class="boat-no"><?php echo e($b->sn_no); ?></span>
                                            </a>
                                        </div>
                                    <div class="row">
                                            <div class="col-lg-12">
                                                <?php /* 
                                                <span class="popular-image">
                                                    {{--<img class="lazyload" data-src="{{ asset('/photos/2/cirlce-no.png') }}">--}}
                                                    <span class="post-no">{{ $b->sn_no }}</span>
                                                </span>
                                                <span class="boats_price_box">
                                                    <span class="boats_price_box_item2">From</span>
                                                    <span class="boats_price_box_item text-white h4">$@foreach($b->details as $bd)@if($bd->key == 'price'){{ $bd->value }}@endif @endforeach</span>
                                                    <span class="boats_price_box_item1">@foreach($b->details as $bd)@if($bd->key == 'added_price'){{'+'.$bd->value}} @endif @endforeach</span>
                                                </span>
                                                */ ?>
                                            </div>
                                        </div>
                                        <div class="blog-item-content bg-white p-1 boat_it">
                                            <h3 class="boat-heading mb-4 pt-2">
                                                <a href="<?php echo e($b->slug->slug); ?>" target="_blank"><?php echo e($b->page_name); ?> <span class="place"><i class="fas fa-map-marker-alt"></i><?php $__currentLoopData = $b->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if($bd->key == 'harbor'): ?><?php echo e($bd->value); ?><?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span></a>
                                            </h3>
                                            <div class="mb-4 boat-pricing">
                                                <strong>From $<?php $__currentLoopData = $b->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if($bd->key == 'price'): ?><?php echo e(substr($bd->value, 0, -1)); ?><?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></strong> <?php $__currentLoopData = $b->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if($bd->key == 'added_price'): ?><?php echo e('+ '.$bd->value); ?> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e($b->slug->slug); ?>" class="learn-more">Learn more</a>
                                            </div>
                                            <div class="mb-4 boat-info">
                                                <span class="mr-3">
                                                    <i class="fas fa-ruler-horizontal"></i><?php $__currentLoopData = $b->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if($bd->key == 'size'): ?><?php echo e($bd->value); ?><?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> FEET
                                                </span> <?php /*
                                                <span class="text-capitalize mr-3">
                                                    <i class="fas fa-tachometer-alt"></i>@foreach($b->details as $bd)@if($bd->key == 'speed'){{ $bd->value }}@endif @endforeach MPH
                                                </span> */ ?>
                                                <span class="mr-3">
                                                    <i class="fas fa-user-friends"></i><?php $__currentLoopData = $b->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if($bd->key == 'capacity'): ?><?php echo e($bd->value); ?><?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> PEOPLE
                                                </span> <?php /*
                                                <span class="text-capitalize">
                                                    <i class="fas fa-bed"></i>@foreach($b->details as $bd)@if($bd->key == 'beds'){{ $bd->value }}@endif @endforeach
                                                </span> */ ?>
                                                <span class="mr-3">
                                                    <?php $__currentLoopData = $b->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if($bd->key == 'day_trips'): ?> 
                                                        <?php $day = true; ?>
                                                        <i class="fa fa-sun-o"></i> Day Trips
                                                    <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php $__currentLoopData = $b->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if($bd->key == 'overnights' && $bd->value == 'on'): ?> 
                                                        <?php if($day !== true) { ?><i class="fa fa-moon-o"></i><? } else { ?>&<?php } ?> Overnights
                                                    <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </span>
                                            </div>

                                            <?php /* <!--Day trips and overnights options start -->
                                            <div class="text-center boat-info">
                                                @foreach($b->details as $bd)@if($bd->key == 'day_trips') 
                                                <span class="text-capitalize">
                                                    <i class="fa fa-sun-o"></i> Day Trips
                                                </span>
                                                @endif @endforeach

                                                @foreach($b->details as $bd)@if($bd->key == 'overnights' && $bd->value == 'on') 
                                                <span class="text-capitalize ml-2">
                                                    <i class="fa fa-moon-o"></i> Overnights
                                                </span>
                                                @endif @endforeach
                                            </div> */ ?>
                                            <!--Day trips and overnights options end -->
                                            
                                            <?php /*
                                            <div class="col text-center mt-4 pb-3">
                                                <a href="{{ $b->slug->slug }}" target="_blank" class="btn btn-lg btn-main btn-round-full border-0 mb-3 font-weight-bold button-space button-width">Learn More</a>
                                            </div>
                                            */ ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php } //else { echo "Nr recod"; } // Can Show condition end ?>
                        <?php }} else { ?>
                            <div class="text-center">
                                <h4>No boats are added yet!</h4>
                            </div>
                        <?php } ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <!--Boats End-->
            </div>

            <!--Filter Boats Start-->
            <div class="rows" id="filterBoats"></div>

            <div class="rows" id="noRecord" style="display:none;">
                <div class="col-md-12 text-center">
                    <div class="alert alert-danger"><b>Sorry!</b> No boat found of your selected criteria.</div>
                    <a href="#" id="defaultBoatsBtn" class="btn btn-primary defaultBoatsBtn">Load Default Boats</a>
                </div>
            </div>
            <!--Filter Boats End-->
        </div>
    </section>
        

    <!-- Section About Start -->
    <section class="about-2 position-relative">
        <div class="container">
            <?php echo $page->content; ?>

        </div>
    </section>
</div>

    <script type="text/javascript">
        function showFilter(){
            $("#advanceFilterBox").show();
            $("#showFilterBtn").hide();
            $("#hideFilterBtn").show();
            return false;
        }
        function hideFilter(){
            $("#advanceFilterBox").hide();
            $("#showFilterBtn").show();
            $("#hideFilterBtn").hide();
            return false;
        }
        function submitForm(){
            //$("#filterForm").submit();
            //document.getElementById("filterForm").submit();
        }
        
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\htdocs\hamptons\resources\views/frontend/templates/mini-site.blade.php ENDPATH**/ ?>
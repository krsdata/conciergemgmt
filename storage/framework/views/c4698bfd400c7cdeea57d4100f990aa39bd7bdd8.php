<?php $__env->startSection('content'); ?>

    <?php
    $extra = array();
    $boat_id = 0;
    $dest = array(
                'Sag Harbor waters', 
                'Shelter Island',
                'Greenport',
                'East Hampton', 
                'Montauk', 
                'Block Island RI', 
                'Old Saybrook CT',
                'Fishers Island NY',
                'Mohegan Sun CT', 
                'Mystic Seaport CT',
                'Newport RI', 
                "Martha's Vineyard MA", 
                'Nantucket MA',
                'New York City'
        );

    $awe = array(
                "Sunset Beach Beach Club",
                "Claudio's Restaurant",
                "Major's Cove Sanctuary Swimming",
                "Salt Restaurant",
                "Yacht Hampton Floating Playground",
                "Ram's Head Inn",
                "Port Waterfront & Grill",
                "Duryea's Lobster Deck",
                "Sightseeing & Celebrity Homes", 
                "Navy Beach",
                "Gurney's Star Island Resort",
                "Bostwick's On The Harbor",
                "Bug Lighthouse",
                "Fishing",
                "Coecles Harbor Swimming",
                "Shelter Island Estuary Tour",
                "North Fork Wineries",
                "Sunset Beach Beach Massage",
                "Shelter Island Paddle Boards", 
                "Wake Boarding",
                "Montauk Fishing",
                "Jet Skiing",
                "Electronic Surfboard",
                "Sea Bob Island" 
        );

    foreach($page->details as $bd){
        $extra[$bd->key] = $bd->value;
        $boat_id = $bd->boat_id;
    }

    $excFor = array();
    if(isset($extra['excellent_for']) && $extra['excellent_for'] != NULL){
      $excFor = explode("\n", $extra['excellent_for']);
    }

    ?> 


<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php echo $boat_id ?>">
<input type="hidden" id="module_type" value="boat">      

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Open+Sans:wght@400;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
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
}
.boat-filter-section .filterOpt {
    border: none;
    font-size: 25px;
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
    background: #1B1464;
    font-weight: bold;
    font-size: 30px;
    color: #fff;
    border-radius: 7px;
    width: 40px;
    text-align: center;
    transition: all 0.5s ease;
}
a:hover .boat-no {
    background: #17B8F4;
    border-color: #17B8F4;
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
        padding-right: 240px;
    display: block;
}
.boat-heading a .place {
    position: absolute;
    top: 5px;
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
    font-size: 18px;
    color: #1B1464;
    text-transform: uppercase;
}
.ourboatbox:hover a:after {
    display: none !important;
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
    <style>
        .fw-b {
    font-size: 20px;
        }
        .unit-1-heading {
            letter-spacing: 2px;
            padding-top: 20px;
        }
        .big-boat-detail {
            color: #17B8F4;
            letter-spacing: 2px;
        }
        
        .big-boat-detail .boat-heading {
            color: #17B8F4;
            font-weight: 200;
            font-family: 'Montserrat', sans-serif;
            font-size: 26px;
        }
        .big-boat-detail .boat-heading strong {
            font-weight: 500;
            font-size: 33px;
        }
        .big-boat-detail .boat-heading .place {
            position: absolute;
            right: 0;
            color: #FCBA63;
            font-size: 24px;
            margin-top: -45px;
        }
        .big-boat-detail .boat-info {
            color: #17B8F4;
            font-size: 22px;
            overflow: hidden;
        }
        .big-boat-detail .boat-info span {
            padding-right: 35px;
            display: inline-block;
        }
        .big-boat-detail .boat-info span i {
            margin-right: 15px;
        }
        .single-boat {
            font-size: 20px;
        }
        .single-boat .fix-slider {
            height: 600px;
        }
        .single-boat .fix-slider .carousel-item {
            position: relative;
        }
        .single-boat .fix-slider .carousel-item img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            min-width: 100%;
            min-height: 100%;
            width: 100% !important;
            height: auto;
            max-width: initial !important;
            max-height: initial !important;
        }
        .single-boat section.about,
        .single-boat hr {
            border-top: 3px solid #1B1464;
            padding: 0;
        }
        .single-boat .unit-1-heading {
            padding-top: 0;
            font-weight: 400;
            font-size: 38px;
            line-height: 50px;
        }
        .big-heading {
            color: #1B1464;
            letter-spacing: 2px;
            font-family: Tenor Sans,sans-serif;
            font-weight: 400;
            font-size: 35px;
            padding: 25px 0 30px;
        }
        .sub-heading {
            color: #17B8F4;
            font-size: 22px;
            padding: 10px 0 20px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .waterToysBox table tr td {
            background: #F6F8F9;
        }
        .single-boat p {
            color: #909090;
            padding-bottom: 10px;
        }
        .ntbl ul,
        .nice-list {
            font-size: 20px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            color: #1B1464;
            padding-left: 0;
            letter-spacing: 2px;
            list-style-type: none;
            padding-bottom: 30px;
        }
        .waterToysBox table tr td {
            font-size: 18px !important;
        }
        .ntbl ul li,
        .nice-list .nice-item,
        .nice-list li {
            padding-bottom: 10px;
        }
        .pricingBox {
            box-shadow: 0 0 10px rgba(195,67,67,.2) inset, 0 0 20px -5px rgba(0,0,0,.5);
        }
        .nppt {
            padding: 40px;
        }
        .pricingBox {
            box-shadow: none;    
        }
        .packBox {
            letter-spacing: 2px;
            background: #fff;
        }
        .packBox ul > li.hours .value {
            font-size: 30px !important;
        }
        .packBox ul > li.hours .value > span {
            font-size: 20px !important;
        }
        .packBox .content ul li {
            height: auto;
            color: #002060;
            margin-bottom: 10px;
            border: 1px solid #707070;
            min-height: 100px;
            line-height: 30px;
            padding: 20px 10px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 18px;
        }
        .packBox ul > li:nth-of-type(1) {
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            background: #17B8F4 !important;
            border-color: #17B8F4 !important;
        }
        .packBox ul > li:nth-of-type(2) {
            background: #E2E2E2;
            font-weight: bold;
            line-height: 100px;
            padding: 0;
        }
        .packBox ul > li:nth-of-type(2) .key-value,
        .packBox ul > li:nth-of-type(2) > br {
            display: none;
        }
        .packBox ul > li:nth-of-type(2) span {
            display: inline-block;
            vertical-align: middle;
            line-height: 30px;
        }
        .packBox .content ul li:nth-child(odd) {
            background: #fff;
        }
        .packBox ul > li:last-child {
            color: #00B0F0;
            background: #E2E2E2;
            font-weight: bold;
            font-size: 20px;
            letter-spacing: 0;
        }
        .packBox .content ul li:last-child .key-value {
            font-weight: 600;
        }
        .packBox .content ul li:last-child .value {
            font-size: 25px;
        }
        .pricingBox:hover {
            box-shadow: 0 0 10px rgba(195,67,67,.3) inset, 0 0 20px -5px rgba(0, 0, 0, 0.60);
        }
        #bookingWidget_trigger {
            float: right;
            position: relative;
            z-index: 10;
            margin-top: 22px;
            margin-bottom: 22px;
            background: #002060;
            border-color: #002060;
            color: #fff;
        }
        @media  only screen and (max-width: 1000px) {
            .nppt {
                padding: 0 10px;
            }
            .single-boat .fix-slider {
                height: 400px;
            }
        }
        @media  only screen and (max-width: 800px) {
            .packBox {
                padding-bottom: 40px;
            }
            .single-boat .fix-slider {
                height: 300px;
            }
            .single-boat .fix-slider .carousel-item img {
                height: 100%;
                width: auto !important;
            }
            #bookingWidget_trigger {
                width: 100%;
                margin-top: 20px;
            }
            .big-boat-detail .boat-heading .place {
                margin-top: -110px;
            }
            .packBox .content ul li {
                height: 60px;
            }
            .single-boat .unit-1-heading {
                font-size: 28px;
                line-height: 36px;
            }
            .big-boat-detail .boat-info {
                font-size: 18px;
            }
            .big-boat-detail .boat-heading {
                font-size: 18px;
            }
            .big-boat-detail .boat-heading strong {
                font-size: 22px;
            }
            .big-boat-detail .boat-heading .place {
                font-size: 18px;
            }
            .big-boat-detail {
                text-align: center;    
            }
            .big-boat-detail .boat-info span {
                padding-right: 0;
                padding-left: 1rem;
            }
            .big-boat-detail .boat-heading strong {
                display: block;
            }
        }
        @media  only screen and (max-width: 767px) {
            .big-boat-detail .boat-heading .place {
                margin-top: -145px;
            }
        }
        @media  only screen and (max-width: 480px) {
            .packBox .content ul li .value {
                float: none !important;
            }
        }
    </style>
    <div id="content" class="single-boat">
    <section class="position-relative boat-topname counting">
        <div class="container">
        <h2 class="unit-1-heading text-color" data-aos="fade-center" data-aos-duration="2000"><?php echo e($page->page_name); ?></h2>
        </div>
        </section>
    <?php if(!empty($slider)): ?>
    <!-- Header Slider Start !-->
 <?php if($slider->id != 41): ?>
    <section class="single-cms-loader counting">
        <div class="container">
            <div id="mainloder" class="mainloder">
    <div class="subloder">
     <img src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif" />
    </div> 
</div>
            <div id="single-product" class="single-product owl-carousel owl-theme">
                <!-- Image loading icon -->
                <?php if(!empty($slider->slides)): ?>
                    <?php $first = 0; ?>
                <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--
                <img class="owl-lazy" data-src="<?php echo e($ss->image_path); ?>" alt="yachthampton slides" style="max-height: 750px;" />-->
                 <?php $first++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>    
        
        <div id="myCarousel" class="carousel slide carousel-fade carousel-ajax fix-slider" data-ride="carousel" data-interval="3500">
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
                      <img class="img-fluid w-100 lazyload" data-src="<?php echo e($ss->image_path); ?>" alt="hamptons boat slides" style="max-height: 750px;">
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
    <?php endif; ?>
    
<div class="container counting">   
<section class="bg-white mb-5 mt-4">

<!-- Pricing box start !-->
    <div class="blog-item-content bg-white p-1 big-boat-detail">
        <button id="bookingWidget_trigger" class="nice-button-blue">Book now</button>
                                            <h3 class="boat-heading mb-4 pt-2">
                                                <strong>FROM $<?php echo e(substr($extra['price'], 0, -1)); ?></strong> + <?php echo e($extra['added_price']); ?> <span class="place"><i class="fas fa-map-marker-alt"></i> <?php echo e($extra['harbor']); ?></span>
                                            </h3>
                                            <div class="boat-info">
                                                <span class="mr-3">
                                                    <i class="fas fa-ruler-horizontal"></i><?php echo e($extra['size']); ?> FEET
                                                </span>
                                                <span class="mr-3">
                                                    <i class="fas fa-user-friends"></i><?php echo e($extra['capacity']); ?> PEOPLE
                                                </span>
                                                <span class="mr-3">
                                                     <?php if(isset($extra['day_trips']) && $extra['day_trips'] == 'on'){ ?>
                                                        <?php $day = true; ?>
                                                        <i class="fa fa-sun-o"></i> Day Trips
                                                    <?php } if(isset($extra['overnights']) && $extra['overnights'] == 'on'){ ?>
                                                        <?php if($day !== true) { ?><i class="fa fa-moon-o"></i><? } else { ?>&<?php } ?> Overnights
                                                    <?php }  ?>
                                                </span>
                                            </div>
                                            
                                            

<!-- Pricing box end !-->

            
  
    </div>
    </section>
</div>



<section class="section about position-relative counting">
<div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">


<!-- Package box start -->
<?php $packageExist = 0; if(count($packageData) > 0) { ?>
<section class="packageBox" id="packageBox">
  <div class="">

    <div class="row">
      <div class="col-md-12">
        <h1 class="big-heading" data-aos="fade-center" data-aos-duration="2000">YACHT HAMPTON PACKAGES</h1>
      </div>
  
        <?php 

            $limit = 0;
            foreach ($packageData as $row) { 
              if(strtolower($row->keyname) != 'package title') {
                $boatPack = \App\BoatPackages::where(['keyname' => $row->keyname, 'boat_id' => $row->boat_id])->pluck('value');
                $limit = count($boatPack);
              }
            }

            for($i = 0; $i < $limit; $i++){ 
              if($i % 2 !== 0)
                $boxClass = "firstBox";
              else 
                $boxClass = "secondBox";
        ?>
        <div class="col-md-3 nppt">
          <div class="packBox mb-4 pricingBox <?php echo $boxClass ?>">
            <div class="content">
              <ul>
                <?php 
                  foreach ($packageData as $row) { 
                    if(strtolower($row->keyname) != 'package title') {
                      $boatPack = \App\BoatPackages::where(['keyname' => $row->keyname, 'boat_id' => $row->boat_id])->pluck('value');
                          if(!empty($boatPack)) { 
                            $baseClass = '';
                            if(strtolower($row->keyname) == 'base cost')
                              $baseClass = 'basecost';

                            foreach ($boatPack as $key => $val) {
                    ?>
                    <li class="<?php echo $baseClass; if($row->keyname == 'hours') { echo 'hours'; } ?>" >
                        <?php if($row->keyname != 'hours') { ?> 
                      <span class="key-value"><?php echo $row->keyname ?></span><br>
                      <?php }?>
                      <span class="value">
                        <?php if(isset($boatPack[$i])){ echo $boatPack[$i]; $packageExist = 1; } else { echo "";} if($row->keyname == 'hours') { echo '<br><span>hours</span>'; } break;  ?>
                      </span>
                        
                    </li>
                    <?php }} else { ?>
                    <li>N/A</li>
                    <?php }} ?>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        

        <?php } ?>
    </div>
  </div>
  <?php $__currentLoopData = $headingcontent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($hh->heading == "Description"): ?>
            <h3 class="sub-heading">Description</h3>
            <div class="pb-5"><?php echo $hh->content; ?></div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </section>
<?php } ?>

<script type="text/javascript">
  var packageExist = '<?php echo $packageExist ?>';
  if(packageExist == 0)
    document.getElementById('packageBox').style.display = 'none';
</script>
<!-- Package box end -->

<!-- Water Toys box start -->
<?php 
  $toysExist = 0;
  if(count($waterToysData) > 0) 
  {
    $colOneCls = 'wcol1';
    $colTwoCls = 'cwol2';
    $colThreeCls = 'wcol3'; 
?>
</div>
</div>
</div>
</div>
</section>

<section class="section about position-relative counting">
<div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">
    <h2 class="big-heading">FEATURES</h2>
    <div class="row">
        <div class="col-md-6 ntbl">
           <h3 class="sub-heading">NOTABLE BOAT FEATURES</h3>
           <?php $__currentLoopData = $headingcontent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($hh->heading == "Notable Features"): ?>
                    <div class="pb-5"><?php echo $hh->content; ?></div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-6">
            <h3 class="sub-heading">BEST FOR</h3> 
            <ul class="nice-list">
            <?php foreach ($excFor as $ekey => $eval) { ?>
                <li class="nice-item"><?php echo $eval ?></li>
            <?php } ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 ">
           <h3 class="sub-heading">INCLUDED</h3>
           <div class="fw-b">
           <?php $__currentLoopData = $headingcontent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($hh->heading == "Includes"): ?>
                    <div class="pb-5"><?php echo $hh->content; ?></div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="sub-heading">NOT INCLUDED</h3> 
            <div class="fw-b">
            <?php $__currentLoopData = $headingcontent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($hh->heading == "Not Included"): ?>
                    <div class="pb-5"><?php echo $hh->content; ?></div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>    
</section>

<?php if(!empty($video)) { ?>
<section class="section about position-relative counting">
<div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">
    <h2 class="big-heading">VIDEO</h2>
    <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vediocontent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row embed-responsive embed-responsive-16by9 mt-5 mb-3"><iframe width="1120" height="630" class="embed-responsive-item" src="<?php echo e($vediocontent->video); ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
</div>    
</section>
<?php } ?>

<section class="section about position-relative counting">
<div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">

<section class="pb-5 packageBox waterToysBox" id="waterToysBox">
  <div class="">
    <div class="row">
      <div class="col-md-12">
        <h1 class="big-heading" data-aos="fade-center" data-aos-duration="2000">WATER TOY OPTIONS</h1>
      </div>

      <div class="col-md-12 mt-4">
        <div class="table-responsive-sm">
          <div class="row">
            <?php
                $i = 1;
                foreach ($waterToysCat as $index => $cat) {

                //Call toys data by cat and boat id
                $toys = \App\BoatWaterToys::where(['cat_id' => $index, 'boat_id' => $boat_id])
                ->orderBy('sequence', 'asc')
                ->get('*');

                //Call toys extra data by cat and boat id
                $toysExtra = \App\BoatWaterToysCol::where(['cat_id' => $index, 'boat_id' => $boat_id])->get('*');
            ?>
              <div class="col-md-4 tableBoxes <?php if($i == 1) echo 'wcol1'; else if($i == 2) echo 'wcol2'; else echo 'wcol3' ?>">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="<?php if($i == 1) echo 'wcol1'; else if($i == 2) echo 'wcol2'; else echo 'wcol3' ?>" scope="col" colspan="2"><?php echo ucwords($cat) ?></th>
                      
                      <?php
                        if(count($toysExtra) > 0){
                          $colHeadings = array();
                          foreach ($toysExtra as $row) {
                            $colHeadings[] = $row->keyname;
                          }

                        $heading = array_unique($colHeadings);

                        foreach ($heading as $k => $v) {
                      ?>
                        <th class="<?php if($i == 1) echo 'wcol1'; else if($i == 2) echo 'wcol2'; else echo 'wcol3' ?>" scope="col"><?php echo ucwords($v) ?></th>
                      <?php }} ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(count($toys)){
                      foreach ($toys as $row) {
                        if($row->keyname != NULL)
                          $toysExist = 1;
                    ?>
                    <tr>
                      <td>
                        <?php if(isset($row->icon) && $row->icon != '' && !empty($row->icon)) { ?>
                        <img src="<?php echo $row->icon ?>" class="toysIcon">
                        <?php } ?>
                        <span>
                          <?php if(isset($row->link) && $row->link != '' && !empty($row->link)) { ?>
                            <a target="_blank" href="<?php echo $row->link ?>">
                              <?php echo ucwords($row->keyname)  ?>
                            </a>
                          <?php } else echo ucwords($row->keyname); 
                          ?>
                          </span>    
                      </td>
                      <td><?php echo ucwords($row->value)  ?></td>
                      <?php
                          //Extra columns start
                        if(count($toysExtra) > 0){
                        $colHeadings = array();
                          foreach ($toysExtra as $row) {
                            $colHeadings[] = $row->keyname;
                          }

                        $heading = array_unique($colHeadings);

                        foreach ($heading as $k => $v) {

                          //Call toys extra data by cat and boat id
                          $extraKey = \App\BoatWaterToysCol::where(['keyname' => $v, 'cat_id' => $index, 'boat_id' => $boat_id])->get('value');
                      ?>
                          <td>
                              <?php 
                                if(count($extraKey)) 
                                {
                                  foreach ($extraKey as $e){
                                    echo $e->value; break;
                                  }
                                }
                              ?>
                          </td>
                      <?php }}  ?>
                    </tr>
                    <?php }} ?>
                  </tbody>
                </table>
              </div>
            <?php $i++; } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<?php } ?>
<input type="hidden" id="toysExist" value="<?php echo $toysExist ?>">
<script type="text/javascript">
  var toysExist = '<?php echo $toysExist ?>';
  if(toysExist == 0)
    document.getElementById('waterToysBox').style.display = 'none';
</script>



</div>
</div>
</div>
</div>
</section>

<?php if(isset($extra['destination']) || isset($extra['specializedDestination'])) { ?>
<section class="section about position-relative counting">
<div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">
    <h2 class="big-heading">DESTINATIONS</h2>
    <div class="row">
        <?php if(isset($extra['destination'])) { ?>
        <div class="col-md-6">
           <h3 class="sub-heading">DESTINATIONS</h3>
           <ul class="nice-list">
            <?php foreach (explode(",",$extra['destination']) as $destination) { if(isset($dest[$destination])) { ?>
               <li><?php echo $dest[$destination]; ?></li>
            <?php } } ?>
            </ul>
        </div>
        <?php } if(isset($extra['specializedDestination'])) { ?>
        <div class="col-md-6">
            <h3 class="sub-heading">AWESOME PLACES</h3> 
            <ul class="nice-list">
            <?php foreach (explode(",",$extra['specializedDestination']) as $destination) { if(isset($awe[$destination])) { ?>
               <li><?php echo $awe[$destination]; ?></li>
            <?php } } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
</div>
</div>
</div>
</div>    
</section>
        <?php } ?>

<section class="section about position-relative counting">
<div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">
    <h2 class="big-heading">DEPARTURE INFORMATION</h2>
    <h3 class="sub-heading">DEPARTURE TIMES</h3>
    <?php $__currentLoopData = $headingcontent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($hh->heading == "Departure Times"): ?>
            <?php echo $hh->content; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    <h3 class="sub-heading pt-5">DEPARTURE ADDRESS</h3>
    <?php $__currentLoopData = $headingcontent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($hh->heading == "Departure Address"): ?>
            <?php echo $hh->content; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    <h3 class="sub-heading pt-5">CRUISING MAP</h3>
    <p><img class="img-fluid mt-3 mb-3 lazyload cruising-area" data-src="public/photos/2/<?php echo e($page->new_local_cruising_area); ?>" src="/public/photos/2/<?php echo e($page->new_local_cruising_area); ?>" alt="yachthampton boats local cruising area" /></p>
</div>
</div>
</div>
</div>    
</section>

<section class="section about position-relative counting">
<div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">
    <h2 class="big-heading pb-0">POLICIES</h2>
    <?php $__currentLoopData = $headingcontentTwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3 class="sub-heading pt-5"><?php echo $hh->heading_two ?></h3>
            <?php echo $hh->content_two; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
</div>    
</section>

</div>



<!--<h1>Output</h1>
<div id="output"></div>-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/template.yachthampton.com/public_html/resources/views/frontend/pages/single-boat.blade.php ENDPATH**/ ?>
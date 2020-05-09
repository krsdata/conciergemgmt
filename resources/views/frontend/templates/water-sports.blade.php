@extends('frontend.mainframe')
@section('content')
        <!-- Header Slider Start !-->
   
<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
  <div id="content">
      <section class="position-relative bg-gray boat-topname">
          <h1 class="unit-1-heading text-center text-color" data-aos="fade-center" data-aos-duration="1000">{{ $page->page_name }}</h1>
          </section>
          
              @if(!empty($slider))
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
                @if(!empty($slider->slides))
                    <?php $first = 0; ?>
                @foreach($slider->slides as $ss)
                <!--<img class="owl-lazy" data-src="{{ $ss->image_path }}" alt="yachthampton slides" style="max-height: 750px;" />-->
                 <?php $first++; ?>
                    @endforeach
                @endif
            </div>    
        <div id="myCarousel" class="carousel slide carousel-fade carousel-ajax fix-slider" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                @if(!empty($slider->slides))
                    <?php $first = 0; ?>
                    @foreach($slider->slides as $ss)
                <li data-target="myCarousel" data-slide-to="{{ $first }}" @if($first == 0){{ 'class="active"' }}@endif></li>
                            <?php $first++; ?>
                        @endforeach
                @endif
            </ol>
            <div class="carousel-inner">
                @if(!empty($slider->slides))
                    <?php $first = 0; ?>
                @foreach($slider->slides as $ss)
                <div class="carousel-item @if($first == 0){{ 'active' }}@endif">
                    <img class="d-block w-100 lazyload" data-src="{{ $ss->image_path }}" alt="yachthampton slides" style="max-height: 750px;">
                    <div class="carousel-caption d-none d-md-block mb-5">
                    </div>
                </div>
                    <?php $first++; ?>
                    @endforeach
                @endif
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
        @endif

<section class="section about position-relative bg-gray mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 offset-lg-12 offset-md-0">
        <div class="about-item ">
          <div class="text-center">
            <h1 class="text-color">The Full Hamptons Experience!</h1><hr class="w-50"/>
            <p class="mt-2">Upon arrival to Yacht Hampton’s private getaway, our unique floating dock experience is our fun, party oasis in the middle of the water, away from it all, where you and your group can bond and enjoy your best adventure of the summer. Want to relax?   Kick your feet up and enjoy a cocktail. Want to go to the beach? Take our water toys with you! Select which toys interest you and your party, then sit back, relax, and leave the activities to us.</p>
          <p class="mt-2">Our fully equipped custom floating dock is our version of the floating Hamptons; giving you a surreal experience on a unique private island with friends and family.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="row bg-gray justify-content-center"><h1 class="text-orange text-center content-title">RELAXATION TOYS</h1></div>
<div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">  
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/noodle-feature.jpg" src="/public/photos/2/water-sports/noodle-feature.jpg" alt="yachthampton floating noodle toys">
          </div></div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Noodles</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>Our soft, foam noodles makes floating simple, comfortable and easy, plus it conforms to the body.  Great for kids and adults, provides for safety, relaxation and fun in the water.</p>
           
          </div>
          </div>
        </div>
    </div></div>

<div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">     
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/floating-feature.jpg" src="/public/photos/2/water-sports/floating-feature.jpg" alt="floatation pad water toys">
         </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">FLOATING ISLAND/FLOATING MAT</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>Relaxing has never felt so good!  Sit back and leave your busy life at the dock.  Just what the doctor ordered, most of our boats come with either a floating mat or a large, floating circular island for 4-8 happy guests.  Please ask upon booking.</p>
           
          </div>
          </div>
        </div>
    </div> </div>
     <div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/life-jacket-feature.jpg" src="/public/photos/2/water-sports/life-jacket-feature.jpg" alt="life jacket hamtpons yacht">
        </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Life Jackets</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>As far as jet skiing, swimming and paddle boarding goes, we’d say the life jacket is  your most important accessory.  Safety is our utmost concern.  All of our boating experiences come equipped with more than enough life jackets for adults children and infants.  If you have multiple infants please verify with your captain.</p>
            
          </div>
          </div>
        </div>
    </div> </div>

<div class="row bg-gray justify-content-center pt-3"><h1 class="text-orange text-center content-title">ADVENTURE TOYS</h1></div>

<!--
    <div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">
          <div class="col-lg-4 position-relative h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">2020 Sea Doo Spark Jetski</h1>
              <p class="h3 text-color">$5,399</p>
              <p>Discover the most affordable, playful, compact, fuel-efficient and lightweight watercraft in the industry. This fun to ride watercraft is not only powerful, but fast! Hitting speeds of 50 mph! The 2020 Sea Doo SPARK is designed to make the most out of your summer on the water, and get the most out of your Hampton’s experience.</p>
            <div class="d-block">
                <a href="sea-doo" target="_blank" class="btn btn-small btn-round-full border-0 mr-3">LEARN MORE</a><a href="#" class="btn btn-small btn-round-full border-0">WATCH VIDEO</a>
            </div>
          </div>
          </div>
          <div class="col-lg-8 position-relative d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="ourboatbox">
              <a href="sea-doo" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/Sea-Doo-Spark-hamptons.jpg" src="/public/photos/2/water-sports/Sea-Doo-Spark-hamptons.jpg" alt="2020 Sea doo spark jet ski"></a>
          </div> </div>
        </div>
    </div> </div> 
!-->


    <div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="snorkeling" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/snorkeling-feature.jpg" src="/public/photos/2/water-sports/snorkeling-feature.jpg" alt="Snorkeling Equipment rent from yachthampton">
        </a>  </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Snorkeling Equipment</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>We have masks, snorkels, and flippers. Enjoy the clean, salty water, and all the unique things it has to offer! Great for larger parties, especially families!</p>
            <div class="d-block">
              <a href="snorkeling" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=y41wd9kpQbk" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a> 
            </div>
          </div>
          </div>
        </div>
    </div> </div>


<div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="paddle-board" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/Stand-up-Paddle-Boards.jpg" src="/public/photos/2/water-sports/Stand-up-Paddle-Boards.jpg" alt="Stand up Paddle Boards">
        </a>  </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Paddle Board</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>Add our paddle boards to your Hampton’s experience. Enjoy the peaceful water and beautiful scenery at your complete control. Take our boards on your yachting journey or adventure right from the dock. This is the Hamptons experience, your way! Please confirm your boat comes with a paddleboard/s or ask us to arrange one.</p>
            <div class="d-block">
                 <a href="paddle-board" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a>
            </div>
          </div>
          </div>
        </div>
    </div> </div>
     <div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="group-paddleboard" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/group-paddleboard.jpg" src="/public/photos/2/water-sports/group-paddleboard.jpg" alt="group paddleboard hamtpons yacht">
        </a>  </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">4-person Group Paddle Board</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>Want a fun challenge? Gather your team and play on our huge paddle board. Experience the Hamptons with others aboard. There's nothing like sharing a unique, fun, bonding experience with others in the most beautiful place on the East Coast!</p>
            <div class="d-block">
              <a href="group-paddleboard" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=93XZDNdTrRo" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a> 
            </div>
          </div>
          </div>
        </div>
    </div> </div>
    
    
    
<div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="fishing-equipment-rental" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/fishing-toys-hamtpons_yacht.jpg" src="/public/photos/2/water-sports/fishing-toys-hamtpons_yacht.jpg" alt="fishing toys hamtpons yacht">
        </a>  </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Fishing Equipment</h1>
              <p class="h4 heading-second">$100 per charter for bait/tackle</p>
              <p>Turn your luxury cruise into a fun, fishing outing, and live a true, natural Hampton’s lifestyle. Drop your line and see what you can catch. You might just be surprised with what comes up on the other end of the line!  Please confirm your vessel has fishing capabilities.</p>
            <div class="d-block">
              <a href="fishing-equipment-rental" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a> 
            </div>
          </div>
          </div>
        </div>
    </div> </div>
    
  
      <div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="drones-gopros" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/nemo-feature.jpg" src="/public/photos/2/water-sports/nemo-feature.jpg" alt="Nemo Underwater Diving yachthamtpon">
        </a>  </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Hookah Underwater Diving</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>Always wanted to scuba but never did? 
With a hookah diving system, you can take the next step, diving deeper into the water and exploring underwater areas below the surface (down to 10 feet below!), for longer periods of time, without having to resurface for air. Walk the ocean floor!</p>
            <div class="d-block">
              <a href="nemo" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a> 
            </div>
          </div>
          </div>
        </div>
    </div> </div>
  
  
    <div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="drones-gopros" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/drones-feature.jpg" src="/public/photos/2/water-sports/drones-feature.jpg" alt="Drones and Gopros Rent hamtpons yacht">
        </a>  </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">DRONES, GO PROS & PHOTOGRAPHER</h1>
              <p class="h4 heading-second">$100 per charter</p>
              <p>Interested in having your memorable day captured? We are able to combine Drone footage, Go Pro footage, and even the Seabob’s Camera footage (if reserved) into a custom edited video. This comes with an overlayed song of your choosing. Share your experience with your friends and family, even share it on all of your social media platforms!</p>
            <div class="d-block">
              <a href="drones-gopros" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a>
            </div>
          </div>
          </div>
        </div>
    </div> </div>
    
 
 
<div class="row bg-gray justify-content-center pt-3"><h1 class="text-orange text-center content-title">MOTORIZED TOYS</h1></div>

<div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">
          
  <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="ourboatbox">
              <a href="seascooter" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/seascooter/seascooter-1.jpg" src="/public/photos/2/seascooter/seascooter-1.jpg" alt="Yamaha seascooter water toys hamptons boat rental"></a>
          </div> 
          </div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Seascooter</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>The Yamaha Explorer Seascooter is designed for recreational divers and snorkelers. Cruising at speeds up to 3mph (5km/h) with a depth rating of 30ft (10m) the Explorer is perfect for shallow dives, snorkeling adventures, chasing fish & getting towed ashore.</p>
            <div class="d-block">
                <a href="seascooter" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=ZYJoqpwJ-Tw" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a>
            </div>
          </div>
          </div>
        </div>
    </div> 
    </div>

<div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">
          
  <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="ourboatbox">
              <a href="awake" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/awake-feature.jpg" src="/public/photos/2/water-sports/awake-feature.jpg" alt="Awake Ravik Surfboard"></a>
          </div> 
          </div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Electric Surfboard</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>WOW! is all we can say if you have a adventurous side. Based on our electric surfboard's three principles of Safety, Fun and Power; it has been designed with one key factor in mind easy-to-use, enabling users to lay on the board, kneel on the board then learn to stand on the board. Our boards have a speed control that allows you to cruise up to 30MPH.  Sooooo Fun!</p>
            <div class="d-block">
                <a href="awake" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=UknUoVWUfAU" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a>
            </div>
          </div>
          </div>
        </div>
    </div> 
    </div>


<div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">
          
          
  <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="ourboatbox">
              <a href="sea-bob" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/seabob-feature.jpg" src="/public/photos/2/water-sports/seabob-feature.jpg" alt="Sea bob"></a>
          </div> 
          </div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Seabob</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>If you’re looking for the ultimate safe and fun driving excursion, simply head to the water. No boundaries or limits. Experience vast open spaces and pure freedom with our sleek and James Bond-esque SEABOB. Cruise on top of the water or even below.  Film your experience with our built-in video camera!  WARNING:  Your children will be talking about this experience for years and ask you to buy one.</p>
            <div class="d-block">
                <a href="seabob" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=RWxZso-xLgY" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a>
            </div>
          </div>
          </div>
        </div>
    </div> 
    </div>
    
    <div class="site-sections bg-gray" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
     <div class="containers">
        <div class="row align-items-stretch">
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100">
               <div class="ourboatbox">
              <a href="flite-board" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/Fliteboard-Electric-Hydrofoil-Surfboard.jpg" src="/public/photos/2/water-sports/Fliteboard-Electric-Hydrofoil-Surfboard.jpg" alt="Fliteboard Electric Hydrofoil Surfboard">
          </a></div></div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Hydrofoil Hoverboard</h1>
              <p class="h4 heading-second">Complimentary</p>
              <p>One of the most magical gadgets on the planet, The Fliteboard™ eFoil. It provides the sensation of flying on a magic carpet or even carving the water below.  It’s electric, fast, quiet, and emission free.  Safe & Kid-Friendly, they can easily learn within an hour guaranteed! Feeling semi-lazy, just lay or kneel on the board and go up to 30MPH.</p>

              <div class="d-block">
                  <a href="hoverboard" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=K1ra_G_F-gs&t" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a>
              </div>
            </div>
          </div>
        </div>
    </div></div>


<div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="jetski" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/jetski-feature.jpg" src="/public/photos/2/water-sports/jetski-feature.jpg" alt="Jetski hamptons boat rental">
          </a></div></div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Jetski</h1>
              <p class="h4 heading-second">$499- 4 Hours</p>
              <p>Discover the most playful, compact, and lightweight jet ski's in the industry. Hit speeds of 40 mph! This BRAND NEW 2020 Sea Doo SPARK is designed to provide the rush of excitement and fun that we all crave from time to time. Plan your best day of your summer today & request our jet ski. Note: Younger riders born in 1993 or sooner need to get certified first by competing a New York safety boat course. <a href="https://www.boat-ed.com/newyork/" target="_blank">CLICK HERE</a></p>
            <div class="d-block">
                <a href="jetski" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a> <a href="https://www.youtube.com/watch?v=ICgLs40_5so" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a>
            </div>
          </div>
          </div>
        </div>
    </div></div>

<div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="tubing" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/tubing-feature.jpg" src="/public/photos/2/water-sports/tubing-feature.jpg" alt="hamptons boat rental tubing Package">
          </a></div></div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Tubing</h1>
              <p class="h4 heading-second">$199- 4 Hours</p>
              <p>See who can hold on the longest, by riding either solo or with a group. With three styles of towing, either with a water sport boat, a tender or jetski, creates fun options the whole party would love. Hand signals are used to speed up or slow down to your comfort level. Bring your entire party and try our new Banana Boat as well! Our drivers will take you on a safe, yet thrilling adventure that beats any water park!</p>
            <div class="d-block">
                <a href="tubing" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a> <a href="https://www.youtube.com/watch?v=Z_5RdC09Cfk" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a>
            </div>
          </div>
          </div>
        </div>
    </div></div>


<div class="site-sections bg-gray pt-5 pb-5">
       <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="ourboatbox">
              <a href="tender-rental" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/tender-yhc.jpg" src="/public/photos/2/water-sports/tender-yhc.jpg" alt="tender toys hamtpons yacht">
        </a>  </div></div>

        <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Tender</h1>
              <p class="h4 heading-second">$399- 2 Hours</p>
              <p>Available on a select group of our offered boats. The tender is a unique way to change up the pace. Go for a relaxing cruise or go inner tubing, the choice is yours. The tender wins over families and allows the children a safe and one-of-a-kind ride.  Various sized tender rentals are available for Sag Harbor tender rentals for Sag Harbor yachts.</p>
            <div class="d-block">
              <a href="tender-rental" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=Z_5RdC09Cfk" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a> 
            </div>
          </div>
          </div>
        </div>
    </div> </div>


 <div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="ourboatbox">
              <a href="sea-doo" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/flyboard-feature.jpg" src="/public/photos/2/water-sports/flyboard-feature.jpg" alt="hamptons boat rental flyboard rent"></a>
          </div> </div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Fly Board</h1>
             
              <p class="h4 heading-second">$499- 2 Hours</p>
              <p>FlyBoard is a branded hydroflighting device, which supplies propulsion to propel the rider into the air. A Flyboard rider stands on the board connected by a long hose to a jet ski watercraft, it uses the water pressure from the jet ski, propelling the rider to surreal new heights. Every Flyboard rental needs a Jet Ski and 2 employees to assist.</p>
            <div class="d-block">
                <a href="flyboard" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=IbzSvd3qWdI" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a>
            </div>
          </div>
          </div>
        </div>
    </div></div>
    
<div class="site-sections bg-gray pt-5 pb-5">
    <div class="containers">
        <div class="row align-items-stretch">
          
          <div class="col-lg-7 position-relative toysBoxLeft d-flex w-100" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="ourboatbox">
              <a href="jetpack" target="_blank">
            <img class="w-100 h-auto img-fluid rounded lazyload" data-src="/public/photos/2/water-sports/jetpack-feature.jpg" src="/public/photos/2/water-sports/jetpack-feature.jpg" alt="hamptons boat rental jetpack rental"></a>
          </div> </div>

          <div class="col-lg-5 position-relative toysBoxRight h-auto">
            <div class="box-left1 rounded">
              <h1 class="heading-39291">Jet Pack</h1>
             
              <p class="h4 heading-second">$499- 2 Hours</p>
              <p>This hydroflighting device supplies propulsion to drive the jetpack into the air, to perform a sport known as hydroflying. Similar to the flyboard, this water toy is connected to a watercraft but is self regulated. Great for the whole family, and varying ages amongst your party to enjoy. Easier than the flyboard.</p>
            <div class="d-block">
                <a href="jetpack" target="_blank" class="mr-3 nice-button-blue blue-button">LEARN MORE</a><a href="https://www.youtube.com/watch?v=p0IwKPe06QU" target="_blank" class="nice-button-dark-blue dark-blue-button">WATCH VIDEO</a>
            </div>
          </div>
          </div>
        </div>
    </div></div>

</div></div>
@endsection

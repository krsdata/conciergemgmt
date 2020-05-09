@extends('frontend.mainframe')
@section('content')
<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
    <section class="page-title featured-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                     <!--   <span class="text-white">{{ $page->page_name }}</span>!-->
                        <h1 class="text-capitalize mb-4 text-lg">{{ $page->sub_caption }}</h1>
                       <!--   <ul class="list-inline">
                          <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Yachthampton</a></li> 
                        </ul> !-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>

<section class="position-relative bg-gray pt-5 pb-3">
<div class="container">
<h2 class="text-center position-relative text-color mb-4 content-title">Our In-Season Process</h2>

<p class="text-center">After 8 years and 1000+ reservations for hundreds of busy clients this is the simplest and most efficient means of securing a chartered boat in the middle of the busy summer season and busy weekends filled with last-minute shoppers.</p>
<h2 class="mt-5">Step 1. Select your top 3 boats</h2>
<p class="ptr">Go to “Our Boats” page and select in priority order boat 1, 2, 3 that interest you. Go here <a class="text-primary" href="./hamptons-boat-charters" target="_blank">OUR BOATS</a>.</p>
<h2>Step 2. Complete our webform</h2>
<p>Read each of your favorite boats fully and send date/s and priority order of boats that fit your needs and budget 1, 2, 3. On this 100% ready-to-book form.
<a class="text-primary" href="./ready-to-book/" target="_blank">100% Ready to Book</a></p>
<p class="ptr">*We strongly urge you to also select weekdays and multiple days and boats to guarantee the best boat at the best price and so you get out on the water. Saturday’s sell out. We need and use this form to isolate a boat that guarantees your satisfaction.</p>
<h2>Step 3. Select the best date time and available boat</h2>
<p class="ptr">We reply via email and or text with availability as we have to align captain, crew, dockage, delivery. You then just make a decision and say yes! We love decisive clients!</p>
<h2>Step 4. Plan your memorable day!</h2>
<p>We introduce you to our VIP yacht concierge to go over details itinerary and provisions etc. You now have a friend with a boat/s so save our number to your cell phone and text us any day this summer. Let’s get started here!</p>
<p class="ptr"><a class="text-primary" href="./hamptons-boat-charters" target="_blank">Hamptons Boat Rental</a></p>
</div>
</section>
    <section class="position-relative mt-5 mb-5">
        <div class="container text-center">
                            <div class="text-center mb-4 contact-logo"><a href="./"><img class="img-responsive lazyload" data-src="/public/photos/logo-escape.png" src="/public/photos/logo-escape.png" alt="logo"></a></div>
                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="fas fa-map-signs mr-1"></i>51 Division St. Unit 201 Sag Harbor, NY 11963
                            </li>
                            <li>
                                <i class="fa fa-envelope-open mr-1"></i>Click to Email: <a href="mailto:captain@hamptonsboatrental.com">captain@hamptonsboatrental.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone mr-1"></i><a href="tel:+18004172027">Click to Phone: +1-800-417-2027</a>
                            </li>
                            <li>
                                <i class="fa fa-comments mr-1"></i><a href="sms:+16315007777">Click to Text: +1-631-500-7777</a>
                            </li>
                        </ul>

                        <ul class="social-icons list-inline text-center mt-4">
                            <li class="list-inline-item">
                                <a href="https://facebook.com/hamptonsboatrental" target="_blank"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://instagram.com/hamptonsboatrental" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-tripadvisor"></i></a>
                            </li>
                        </ul>
        </div>
    </section>

    <section class="bg-gray google-map boat-map">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96372.08413784177!2d-72.3676987006836!3d40.9896340347042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8bd25219d8ba7%3A0x55f32bd7119148b4!2sHamptons+Boat+Rental!5e0!3m2!1sen!2sbd!4v1563398941557!5m2!1sen!2sbd" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Section About Start -->
    <section class="about-2 position-relative">
        <div class="container">
            {!! $page->content !!}
        </div>
    </section>
</div>
@endsection
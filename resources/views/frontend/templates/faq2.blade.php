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
                      <h1 class="text-capitalize mb-4 text-lg">{{ $page->page_name }}</h1>
                    <!--    <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Yachthampton</a></li>
                        </ul> !-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>

<section class="position-relative bg-gray pb-4 pt-4">
<div class="container">
<h2 class="text-center position-relative text-color mb-4 content-title">FAQ</h2>
<p class="mb-5">Do not hesitate to <a class="text-primary" href="contact-us" target="_blank">contact us</a> if you require any further information.</p>

<h3><i class="fas fa-caret-right"></i> What if my group size is greater than 12 persons?</h3>
<p class="mb-4"> 98% of the charter industry allows only 13 or fewer guests on any boat, (no matter what size of vessel).  We do have several charter options for group larger than 12 persons. <a class="text-primary" href="large-group12" target="_blank">CLICK HERE</a> to know more.  We have the largest selection of charter boats to host groups > 12 on the East Coast.</p>

<h3><i class="fas fa-caret-right"></i> What are your weather and cancellation policies?</h3>
<p class="mb-4">For full details of Weather/Cancellation policies, please read our Cancellation Policy for each boat or <a class="text-primary" href="cancellation-weather-policy" target="_blank">CLICK HERE.</a></p>

<h3><i class="fas fa-caret-right"></i> Can I book a boat online?</h3>
<p>You can book your Hamptons boating experience directly online. Go to any boat page and see a big "CHECK AVAILABILITY" button to access the online booking system. It works just like AirBNB and booking a vacation home.  You reserve, book and pay within 5 minutes.</p>
<p class="mb-4">Booking a boat is easy. We strongly urge you to follow step 1.  Isolate the boat you want above all others.  Then find a backup boat or two. Then simply fill out our webform here.  We will then do the rest.</p>
<p class="mb-4">Or of course you may text, email or call with as much detail regarding the charter as possible (including number of passengers, trip dates, boat numbers you like) and we will respond to your queries within 24 hours.</p>

<h3><i class="fas fa-caret-right"></i> What are some dining destinations?</h3>
<p class="mb-4"> We have a bunch of dining options while you cruise.  <a class="text-primary" href="dining-destinations" target="_blank"> CLICK HERE</a> to explore them.</p>

<h3><i class="fas fa-caret-right"></i> What are some overnight destinations?</h3>
<p class="mb-4"> We have several charter options that can get you to overnight destinations. <a class="text-primary" href="overnight-destinations" target="_blank">CLICK HERE</a> to view them all.</p>

<h3><i class="fas fa-caret-right"></i> What is the relationship between Yacht Hampton and Hamptons Boat Rental?</h3>
<p class="mb-4"> Hamptons Boat Rental has been in business for 8 years, in January of 2020  we re-branded the company to be known as <a class="text-primary" href="https://yachthampton.com" target="_blank">Yacht Hampton</a>. Yacht Hampton will now be used as the branding name of Hamptons Boat Rental. We are the same exact ownership and management as Hamptons Boat Rental, we just enjoy Yachthampton as our new name for more sophisticated social media and branding. Our prices, boat selection and even our URL have not even been impacted whatsoever. You can see we are still located under <a class="text-primary" href="https://hamptonsboatrental.com" target="_blank">www.hamptonsboatrental.com</a>.</p>

<h3><i class="fas fa-caret-right"></i> What are your best day-trip destinations?</h3>
<p class="mb-4"> Many day-trip destinations charter are awaiting for you. Our 4-Hours, 8-Hours and Sunset Rose' cruise charters can get you to many local/nearby astonishing destinations. <a class="text-primary" href="local-destinations" target="_blank">CLICK HERE</a> to review our favorites.</p>

<h3><i class="fas fa-caret-right"></i> What comes with your bachelorette party packages?</h3>
<p class="mb-4"> Bachelorette Parties on our boats/yachts are always special. Plan your bachelorette party with your friends and enjoy our photo props, destinations and water toys. <a class="text-primary" href="bachelorette-party" target="_blank">CLICK HERE</a> to review our custom-packages.</p>

<h3><i class="fas fa-caret-right"></i> What are your bachelor party packages?</h3>
<p class="mb-4"> We offer Bachelor Party in the Yachts for men as well. This is another special party package offered by YACHTHAMPTON. <a class="text-primary" href="bachelor-parties" target="_blank">CLICK HERE</a> to know exciting package and combo package details for your bachelor party.</p>

<h3><i class="fas fa-caret-right"></i> Can I buy a gift certificates?</h3>
<p class="mb-4"> Buy Gift Certificates in advance to surprise your friends and families with special discounts. <a class="text-primary" href="gift-certificates" target="_blank">CLICK HERE</a> to see all our trending offers. Discounts may vary from time to time.</p>

<h3><i class="fas fa-caret-right"></i> Do you have a blog?</h3>
<p class="mb-4"> We maintain Yacht Hampton's Blog regularly so visitors can see our latest updates regarding new yachts, new amazing destinations, wonderful dining options, interesting places, and more. <a class="text-primary" href="hamptons-blog" target="_blank">CLICK HERE</a> to know more.</p>

<h3><i class="fas fa-caret-right"></i> What is your ordering process?</h3>
<p class="mb-4"> We have simplified our system to order any of our boats. Follow our 4 easiest steps to order or book any boat in the fastest way. <a class="text-primary" href="booking" target="_blank">CLICK HERE</a> to know them now.</p>

<h3><i class="fas fa-caret-right"></i> How do I find the right charter boat for me?</h3>
<p class="mb-4">When choosing the right boat many factors are important. Take a look at our easy-to-use filters at the top of our entire fleet our boats page, <a class="text-primary" href="/hamptons-boat-charters" target="_blank">Yacht Hampton Boats</a> Page. Use our filters to choose the best boat for you.</p>

<h3><i class="fas fa-caret-right"></i> How do I book and pay for a yacht with Yachthampton on Hamptonsboatrental.com?</h3>
<p class="mb-4">You can book most yachts directly online, you select a date and view availability and proceed to book and pay. You then will get a payment confirmation email.  In the case where we do not post our availability calendar you can select your top 3 boat choices in priority order and submit a contact form preferably.  You can also contact us via text, email or phone WITH your top 3 boat choices.</p>

<h3><i class="fas fa-caret-right"></i> What currency are our prices?</h3>
<p class="mb-4">We offer our boats/yachts in US Dollars only.</p>

<h3><i class="fas fa-caret-right"></i> Which sailing destination shall I choose?</h3>
<p class="mb-4">This decision is really up to you and depends on what experience you and yours are craving. The weather conditions and winds may also play a role. Browse our recommended destinations to discover more about different sailing locations. We have <a class="text-primary" href="local-destinations" target="_blank">LOCAL DESTINATIONS</a> and <a class="text-primary" href="overnight-destinations" target="_blank">OVERNIGHT DESTINATIONS</a> to choose from. Moreover, you can go to <a class="text-primary" href="hamptons-boat-charters" target="_blank">OUR BOATS</a> page and use our excellent user-friendly filters to select your destinations.</p>

<h3><i class="fas fa-caret-right"></i> What time of year should I plan my trip?</h3>
<p class="mb-4">If you wish to embark on a Friday or Saturday or Sunday we suggest to book as soon as you know or as soon as possible. Weekends absolutely sell out so if you want one of our newer boats we suggest you book early in the season. Our sailing season is from May 1 to October 15th.</p>

<h3><i class="fas fa-caret-right"></i> What equipment/supplies will I need?</h3>
<p class="mb-4">Have a look at our Includes and Not Included section of each boat for details.</p>

<h3><i class="fas fa-caret-right"></i> How much shall I budget for the trip?</h3>
<p class="mb-4">Price is an important factor when planning a sailing trip. You should set a clear budget from the beginning and allow for all the necessary additional costs such as fuel, gratuity and dining expenses. We list the costs on each and every boat so only you know what your comfort level or ability to pay level is.</p>

<h3><i class="fas fa-caret-right"></i> What are the methods of payment?</h3>
<p class="mb-4">You are able to pay for your boat in 2 ways – via PayPal or by credit card (MasterCard, Visa or AMEX). Visit <a class="text-primary" href="https://hamptonsboatrental.com/pay" target="_blank">Make a Payment</a> page for easy-to-use payment interface.</p>

<h3><i class="fas fa-caret-right"></i> Where shall I leave my car whilst I am sailing?</h3>
<p class="mb-4">Most harbors and marinas have convenient or semi convenient parking facilities. You should check what kind of parking they provide beforehand and be sure not to leave any valuables in the car.</p>

<h3><i class="fas fa-caret-right"></i> What safety rules apply on board?</h3>
<p class="mb-4">These vary from boat to boat and are based on the size, age and model of the boat. The driving force of the boat and the area you are travelling in also need to be taken into account. You should ask the boat provider for a safety briefing. Rules such as No-Smoking, jumping while boat is moving at high speeds or jumping in the water with a strong current are basic and must-follow rules on all boats.</p>

<h3><i class="fas fa-caret-right"></i> How do I cure seasickness?</h3>
<p class="mb-4">This unpleasant experience can be prevented and treated. Find out <a class="text-primary" href="faq-hamptons-boat-rental" target="_blank">what to do when suffering from seasickness.</a></p>

<h3><i class="fas fa-caret-right"></i> Can I take pets on board?</h3>
<p class="mb-4">Always ask YACHTHAMPTON by phone or email if you can take an animal on board before arrival. If you do not ask permission, we may be more inclined to say no and pet care for the time you are away may be hard to find. Multiple high-energy pets can make any boat experience more unsafe than you or we would like. Generally, we are pet-friendly up to 1 pet on most vessels, especially if the pet is subdued.</p>

<h3><i class="fas fa-caret-right"></i> What should I do if there is something wrong with the boat?</h3>
<p class="mb-4">Usually we will correct any faults immediately before leaving the dock. We mitigate this by providing newer vessels, in some case vessels under 2-3 years old. In exceptions, we can issue a discount, offer more free time, or switch you to one of our other boats. As all boat owners know, boats can be difficult and they are much more complicated than autos and prone to have more issues.  We are experienced in boating so let us work on remedying the situation, while you sit back and relax and enjoy the ocean breezes, a cocktail and your friends.</p>

<h3><i class="fas fa-caret-right"></i> Is there minimum charter duration?</h3>
<p class="mb-4">It is possible to book short trips, but most charters run for 4 hours as the standard.  We do have some select 3 hour bookings and allow 2 hour bookings off season.</p>

<h3><i class="fas fa-caret-right"></i> How much does it cost to use our platform on hamptonsboatrental.com?</h3>
<p class="mb-4">We do not charge you for the use of the platform – there are no booking fees - the only costs involved are once a boat has been booked and confirmed.</p>

<h3><i class="fas fa-caret-right"></i> Who can I speak to regarding any additional enquiries I may have?</h3>

<p><a class="text-primary" href="tel:+18004172027" target="_blank">Click to Phone: +1-800-417-2027</a></p>
<p><a class="text-primary" href="sms:+16315007777" target="_blank">Click to Text: +1-631-500-7777</a></p>
<p><a class="text-primary" href="mailto:captain@hamptonsboatrental.com" target="_blank">Click to Email: captain@hamptonsboatrental.com</a></p>

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
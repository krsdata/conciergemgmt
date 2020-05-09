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
<p class="mb-4"> We have several charter options for group larger than 12 persons. <a class="text-primary" href="large-group12" target="_blank">CLICK HERE</a> to know more.</p>

<h3><i class="fas fa-caret-right"></i> What are your privacy, booking and cancellation policies?</h3>
<p class="mb-4">For full details of Weather/Cancellation policies, please read our Cancellation Policy for each boat or <a class="text-primary" href="cancellation-weather-policy" target="_blank">CLICK HERE.</a></p>

<h3><i class="fas fa-caret-right"></i> How do I receive an offer for a boat?</h3>
<p>You can book your boating holiday directly online. Go to any boat page and see a big <span class="font-weight-bold">"CHECK AVAILABILITY"</span> button to access the online booking system. If you are unable to locate an available boat for the location and dates you wish of course <span class="font-weight-bold">YACHTHAMPTON.COM</span> can assist you to find a charter boat for your yachting holiday.</p>
<p class="mb-4">Please email captain [at] yachthampton.com with as much detail regarding the charter as possible (including number of passengers, trip dates, charter location and type of boat) and we will endeavor to respond to your queries within 24 hours.</p>

<h3><i class="fas fa-caret-right"></i> What are some dining destinations?</h3>
<p class="mb-4"> We have a bunch of dining options while you cruise. You can travel and get the opportunity to dine in any of our listed Dining Destinations.<a class="text-primary" href="dining-destinations" target="_blank"> CLICK HERE</a> to know explore them.</p>

<h3><i class="fas fa-caret-right"></i> What are some overnight destinations?</h3>
<p class="mb-4"> We have several charter options that can get you to overnight destinations for group larger than 12 persons. <a class="text-primary" href="overnight-destinations" target="_blank">CLICK HERE</a> to know them all.</p>

<h3><i class="fas fa-caret-right"></i> What is the relationship between Yacht Hampton and Hamptons Boat Rental?</h3>
<p class="mb-4"> As a visitor can see on our website that we interchange <a class="text-primary" href="https://hamptonsboatrental.com" target="_blank">Hamptons Boat Rental</a> and <a class="text-primary" href="https://yachthampton.com" target="_blank">Yacht Hampton</a>. Yacht Hampton will now be used as the branding name of Hamptons Boat Rental. We rebranded under Yacht Hampton starting January 2020. We are the same exact ownership and management as Hamptons Boat Rental, we just enjoy Yachthampton as our new name for more sophisticated branding. Our prices, boat selection and URL have not even been impacted whatsoever. You can see we are still located under <a class="text-primary" href="https://hamptonsboatrental.com" target="_blank">www.hamptonsboatrental.com</a>.</p>

<h3><i class="fas fa-caret-right"></i> What are your best day-trip destinations?</h3>
<p class="mb-4"> Many day-trip destinations charter are awaiting for you. Our 4-Hours, 8-Hours and Sunset Rose' cruise charters can get you to many local/nearby astonishing destinations. <a class="text-primary" href="local-destinations" target="_blank">CLICK HERE</a> to know more.</p>

<h3><i class="fas fa-caret-right"></i> What comes with your bachelorette party packages?</h3>
<p class="mb-4"> Bachelorette Party in the yachts is always special. Plan for your bachelorette party with your friends or colleagues and enjoy the hidden fun and enjoyment in the bachelorette party. <a class="text-primary" href="bachelorette-party" target="_blank">CLICK HERE</a> to know exciting package and combo package details for bachelorette party.</p>

<h3><i class="fas fa-caret-right"></i> What are your bachelor party packages?</h3>
<p class="mb-4"> We offer Bachelor Party in the Yachts for men as well. This is another special party package offered by <span class="font-weight-bold">YACHTHAMPTON.COM.</span> <a class="text-primary" href="bachelor-parties" target="_blank">CLICK HERE</a> to know exciting package and combo package details for bachelor party.</p>

<h3><i class="fas fa-caret-right"></i> Can I buy a gift certificates?</h3>
<p class="mb-4"> Buy Gift Certificates in advance to surprise your friends and families with special discounts. <a class="text-primary" href="gift-certificates" target="_blank">CLICK HERE</a> to see all our trending offers. Discounts may varies time to time.</p>

<h3><i class="fas fa-caret-right"></i> So you have a blog?</h3>
<p class="mb-4"> We maintain Yacht Hampton Blog regularly so visitors can see our latest updates regarding new yachts, new amazing destinations, wonderful dining options, interesting places to hang on, and so many. <a class="text-primary" href="hamptons-blog" target="_blank">CLICK HERE</a> to know more.</p>

<h3><i class="fas fa-caret-right"></i> What is your ordering process?</h3>
<p class="mb-4"> We have simplied our system to order any of our boats. Follow our 4 easiest steps to order or book any boat in the fastest way. <a class="text-primary" href="booking" target="_blank">CLICK HERE</a> to know them now.</p>

<h3><i class="fas fa-caret-right"></i> How do I find the right charter boat for me?</h3>
<p class="mb-4">When choosing the right boat many factors are important. Take a look at our easiest system to <a class="text-primary" href="/hamptons-boat-charters" target="_blank">Yacht Hampton Boats</a> Page for using our easiest filter to choose the best option boat for you.</p>

<h3><i class="fas fa-caret-right"></i> How do I book and pay for a yacht on YACHTHAMPTON.COM?</h3>
<p class="mb-4">You book your yacht directly online. We get in contact with you via phone or email. We send you the payment details. You pay 50% with the booking. 8 weeks before embarkation you pay the outstanding 50% plus additional extras if added. The <span class="font-weight-bold">YACHTHAMPTON.COM</span> booking confirmation email or pass we sent you in the moment you completed the payment. This confirmation email or pass is the "key" to your yacht.</p>

<h3><i class="fas fa-caret-right"></i> What currency are our prices?</h3>
<p class="mb-4">We offer in US Dollar only. Other options can be choosen by us but need to talk priorly.</p>

<h3><i class="fas fa-caret-right"></i> Which sailing destination shall I choose?</h3>
<p class="mb-4">This decision is really up to you and depends on what cultural environment and weather conditions you prefer. Browse our recommended destinations for charter to discover more about different sailing locations. We have <a class="text-primary" href="local-destinations" target="_blank">LOCAL DESTINATIONS</a> and <a class="text-primary" href="overnight-destinations" target="_blank">OVERNIGHT DESTINATIONS</a> to choose from. Moreover, you can go to <a class="text-primary" href="hamptons-boat-charters" target="_blank">OUR BOATS</a> page and use our excellent user-friendly filters to select your destinations.</p>

<h3><i class="fas fa-caret-right"></i> What time of year should I plan my trip?</h3>
<p class="mb-4">The seasons differ all over the US. Find out when it is best to travel by boat in your desired location. We help you with some suggested charter locations.</p>

<h3><i class="fas fa-caret-right"></i> What equipment will I need?</h3>
<p class="mb-4">Have a look at our Includes and Not Included section of each boat for details.</p>

<h3><i class="fas fa-caret-right"></i> How much shall I budget for the trip?</h3>
<p class="mb-4">Price is an important factor when planning a sailing trip. You should set a clear budget from the beginning and allow for all the necessary additional costs such a deposit, transfer, fuel, gratuity, excluded item price, etc.</p>

<h3><i class="fas fa-caret-right"></i> What are the methods of payment?</h3>
<p class="mb-4">You are able to pay for your boat in 2 ways – via PayPal or by credit card (MasterCard, Visa or AMEX). Visit <a class="text-primary" href="https://hamptonsboatrental.com/pay" target="_blank">Make a Payment</a> page for easy-to-use payment interface.</p>

<h3><i class="fas fa-caret-right"></i> Where shall I leave my car whilst I am sailing?</h3>
<p class="mb-4">Most habours and marinas have parking facilities. You should check what kind of parking they provide beforehand and be sure not to leave any valuables in the car.</p>

<h3><i class="fas fa-caret-right"></i> What safety rules apply on board?</h3>
<p class="mb-4">These vary from boat to boat and are based on the size, age and model of the boat. The driving force of the boat and the area you are travelling in also need to be taken into account. You should ask the boat provider for a safety briefing.</p>

<h3><i class="fas fa-caret-right"></i> How do I cure seasickness?</h3>
<p class="mb-4">This unpleasant experience can be prevented and treated. Find out <a class="text-primary" href="#" target="_blank">what to do when suffering from seasickness.</a></p>

<h3><i class="fas fa-caret-right"></i> Can I take pets on board?</h3>
<p class="mb-4">Always ask YACHTHAMPTON.COM by phone or email if you can take an animal on board before arrival. If you do not ask permission, we may be more inclined to say no and pet care for the time you are away may be hard to find.</p>

<h3><i class="fas fa-caret-right"></i> What should I do if there is something wrong with the boat?</h3>
<p class="mb-4">Usually we will correct any faults straight away. In exceptions, it should be possible to negotiate an alternative or a price reduction.</p>

<h3><i class="fas fa-caret-right"></i> What is the different between the harbor and a place to anchor?</h3>
<p class="mb-4">The harbor is a secure place to take a break from sailing. At the harbor you can find cleaning, mending, waste disposal and tank filling services. Anchorage is a maneuver where you drop anchor to persevere weather conditions or take in the scenery.</p>

<h3><i class="fas fa-caret-right"></i> Can I anchor anywhere?</h3>
<p class="mb-4">Nights at sea create a sense of adventure and can be calmer than those spent in a busy harbor. Before anchoring, be aware of the weather and sea bed conditions in the area. You should also have knowledge and experience of anchoring. Most places where it is unsafe to anchor will be marked on local maps, including conservation areas and shipping lanes.</p>

<h3><i class="fas fa-caret-right"></i> Can I dock anywhere in the harbor?</h3>
<p class="mb-4">You should inquire in advance of stopping in a harbor and contact their offices about how to apply and be assigned a place. The cost depends on the area and the size of the boat and can vary from anything between 10 and 150 euros and you may have to pay extra for electricity.</p>

<h3><i class="fas fa-caret-right"></i> Is there minimum charter duration?</h3>
<p class="mb-4">It is possible to book short trips, but most charters run from Saturday to Saturday. Longer trips will need to be booked well in advance, especially if you require a particular model of boat.</p>

<h3><i class="fas fa-caret-right"></i> How much does it cost to use YACHTHAMPTON.COM?</h3>
<p class="mb-4">We do not charge you for the use of the platform – there is no booking fees - the only costs involved are once a boat has been booked and confirmed.</p>

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
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
                        <!-- <span class="text-white">{{ $page->page_name }}</span> !-->
                        <h1 class="text-capitalize mb-4 text-lg">{{ $page->sub_caption }}</h1>
                    <!--    <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ url('/').$page->slug }}" class="text-white-50">{{ $page->title }}</a></li>
                        </ul> !-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>

<section class="position-relative pt-5">
<div class="container">
<div class="row mx-0">

<h2 class="position-relative content-title text-center mb-3 mt-4">Hamptons Bachelorette Party: A Beautiful Backdrop for your Celebration</h2>
<p>It’s wedding season and what better way to celebrate than with a Hamptons bachelorette party. Sweeping white sands, celebrity clientele, a blaze of beautiful boutiques, and lavish luxury charters to take you sailing from perfect spot to spot, the Hamptons offers a gorgeous backdrop for a weekend with the ones you love.</p>
<p>There are so many opportunities for lavish Long Island bachelorette party ideas; whether you want to sip the finest wines on world class vineyard tours, learn to surf in Montauk, or score an invitation to some of the hottest Hollywood parties of the summer season. From Sag Harbor to East Hampton, the tip of Long Island and the sun-drenched shores of Montauk – with a beautiful Hamptons boat charter you can have it all…</p>
<p>To learn more about our bachelorette party package and our most-popular boat please click below to go to our Bachelorette Parties page.</p>
<a href="bachelorette-parties" target="_self">For Bachelorette Party Details Click Here</a>
</div></div>
</section>


<section class="position-relative pt-3">
<div class="container">
<div class="row mx-0">

<h2 class="position-relative content-title mb-2 mt-5">Spa and Splurge</h2>
<p>Famous for its boutique beach vibes and its signature spa treatments, those looking to splurge on their Hamptons bachelorette party have come to the right place. For those glam girls seeking designer wares and Manhattanite vibes then head for the exclusive stores in East Hampton where you will find plenty of familiar big-name faces including a Tiffany’s so you can pick up something special for the bridesmaids. If you want something a little more laid back with Ralph Lauren vintage vibes then head to Montauk where you are sure to be spoilt for choice.</p>
<p>Hotel spas are aplenty in the Hamptons so be sure to include a dollop of perfect pampering into your Long Island bachelorette party ideas. You will find the most coveted spa in town at Gurneys, where the pool is curated from warm seawater, the steam rooms are ready to envelop you in bliss, and the array of treatments on offer all overlook the ocean. Of course, free flowing champagne and an afternoon relaxing at the beach club is a must when stopping by Gurneys.</p>

</div></div>
</section>

<section class="position-relative pt-3">
<div class="container">
<div class="row mx-0">
<h2 class="position-relative content-title mb-2 mt-5">Beautiful Beaches</h2>
<p>Soak up the sun on your Hamptons bachelorette party by using your glitzy boat rental to charter you around the many beautiful beaches. Hamptons beaches are always scoring high when it comes to the most beautiful stretches of sand in the world. With scores of beaches to choose from, you can be sure to find the dreamiest slip of sand to suit your mood.</p>
<p>Those seeking a cool beach brimming with young and beautiful people should head for Flying Point Beach or go glam at the upmarket beach of Sagaponack. If you want snapshot beauty then Coopers Beach in Southampton is forever earning points for being utterly alluring with its super wide wedges of floury sand and its bright blue hazy sea. Main Beach in East Hampton is another sweet spot for when you want to kick back with a cocktail picnic.</p>
</div></div>
</section>


<section class="position-relative pt-3">
<div class="container">
<div class="row mx-0">
<h2 class="position-relative content-title mb-2 mt-5">Tangled Vineyard Tours</h2>
<p>Another inspired option for your Long Island bachelorette party idea could be blending your adventures around the Hamptons with a food and wine tour. The Hamptons is home to some of the most sophisticated vineyards and cellar doors you can find outside of California’s Napa Valley. <a href="http://www.wolffer.com/" target="_blank">The Wolffer Estate Vineyards</a> boasts a sumptuous sprawling gardens brimming with tangled vineyards and a wealthy wine tasting room. The Martha Clara Vineyards is another pristine place to sip the sweetest wines especially if you can charter up to the North Fork. In their intimate loft space, you can taste the best of their barrels matched with produce from their kitchen, such as ripe gourmet cheeses, artisanal crackers, and melt in the mouth chocolate.</p>
</div></div>
</section>

<section class="position-relative pt-3">
<div class="container">
<div class="">
<h2 class="position-relative content-title mb-2 mt-5">Beautiful Boat Rentals</h2>
<p>Choosing a charming <a href="/" target="_self">boat charter</a> for your Hamptons bachelorette party is the very best way to avoid sitting in traffic during your summer stay. With a boat charter, the lavish shores of Long Island open right up. You can spend your mornings exploring the sights and swimming on secluded shores up in <a href="montauk-boat-rentals" target="_self">Montauk</a>. In the afternoon, you can hit Bridgehampton for a spot of Polo or head to Southampton for lunch and then as the sun starts to settle, crack open a bottle of champagne on deck before heading to East Hampton for a taste of the high-end night life.</p>
<p>For more information about our most popular boats please click below to go to our boats page.</p>
<p><a href="hamptons-boat-charters" target="_self">For Boat Details Click Here</a></p>
</div></div>
</section>


<section class="position-relative bg-gray pt-4 pb-2">
<div class="container">
<div class="">
<h2 class="position-relative content-title text-center mb-3 mt-3">Hamptons Bachelorette Itinerary Ideas</h2>
<p class="h4 position-relative text-center mb-3 mt-3"><a href="things-to-do-in-the-hamptons" target="_self">Things to do in the Hamptons</a></p>
<p>If you’re looking for East Hampton itinerary ideas, then you won’t go wrong with Montauk. It’s one of the jewels in the Hamptons crown and makes the perfect getaway for a long weekend. Getting there is easy via the Montauk Highway, Long Island Railroad, or one of the many airlines that fly into La Guardia, JFK, and Newark Liberty International airports.</p>
<p>Here are some itinerary ideas for your pre-wedding party in Montauk:</p>

<h3 class="mb-2 mt-5">Day 1</h3>
<p>-Enjoy a few arrival drinks on your boat before heading out to your choice of dreamy beach.</p>
<p>-Make the most of the many delicious lunch options at Clam Bar, Morty’s, Duryea’s, or enjoy a picnic on board or at a secluded cove.</p>
<p>-Spend the afternoon being as active or chilled as you like while sailing along the coastline.</p>
<p>-Fuel up with dinner at Scarpetta Beach, Highway Restaurant, or enjoy drinks and live music at Surf Lodge.</p>
<p>-Return to your boat for more drinks until sunset or a well-earned rest in a luxury cabin.</p>

<h3 class="mb-2 mt-5">Day 2</h3>
<p>-Take it easy with a lie-in followed by brunch at Arbor’s or head straight to a beach if you and your friends aren’t worn out from the night before.</p>
<p>-Definitely don’t skip the obligatory Instagram opportunity by Montauk Lighthouse and explore even more of the sights in the local area.</p>
<p>-Visit a spa, pool, or anywhere else the bachelorette and her flower crown desire – she is the heart and soul of the party after all!</p>
<p>-Enjoy a big night of fun onboard your luxury boat or at one of the many bars, lodges, and saloons (check local forums for the latest theme nights and offers).</p>
<p class="font-weight-bold">If you’re planning your Hamptons party for the Bays or Southampton area, then here are some itinerary ideas:</p>

<h3 class="mb-2 mt-5">Day 1</h3>
<p>-Dive straight into your floating weekend with drinks and snacks onboard a stunning charter.</p>
<p>-Hit your choice of beach with a cooler full of rosé, beer, or mimosas, or simply enjoy them from the deck while making your way around the gorgeous coastline.</p>
<p>-After soaking up the view, head to port for lunch at one of the renowned restaurants to enjoy fresh fish, healthy salads, or vegan fare.</p>
<p>-Make time for shopping at one of the local boutiques or local vendors for a real Hamptons experience that you can’t find in the city, followed by more drinks, dinner, and dancing.</p>

<h3 class="mb-2 mt-5">Day 2</h3>
<p>-Enjoy a great girls’ brunch to help recovery from the night before, followed by exploring more secluded beaches and coves from the comfort of your charter boat.</p>
<p>-If you fancy a change from the beautiful beaches, then head to a vineyard for some wine tasting or create your own DIY experience onboard the yacht.</p>
<p>-Indulge the new bride-to-be with a gastronomic extravaganza at one of the local restaurants or hotel brasseries, followed by more drinks and music.</p>
<p>Whether you’re planning the perfect bachelorette or bachelor party, chartering a boat enables you to visit more stunning places while having a floating home-base to return to. So, for the best <a href="/" target="_self">SAG HARBOR BOAT RENTAL</a> options or more information about our most popular charters, please click below to go to our boats page.</p>
</div></div>
</section>

      <section class="section about position-relative bg-white pt-5">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-6"><h2 class="text-center font-weight-bold font-tenor">We Provide Bachelorette Party Photo Props</h2>
          <h5 class="text-center mt-3">Planning is difficult let us make your party a screamsuccess fun!</h5>
         
         </div></div>
 
          <p class="mt-3">&bull; Nautical Captains Caps</p>
           <p>&bull; Nauti-Bridesmaid Shirts (Upon Request)</p>
             <p>&bull; Engagement Ring Float</p>
               <p>&bull; Rose’ Jello Shots. (Upon Request)</h4>
                 <p>&bull; She Said Yes and Funny Assorted Photo Props</p>
                    <p>&bull; “Chambong” Rose Shooter Glasses</p>
                       <p>&bull; I’m the Bride Snuggie</p>
  </div>
   
</section>



    <!-- package section starts !-->
     <section class="section about position-relative bg-gray pt-5">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-6 mt-4 mb-5 text-center"><p class="bachelorette-cursive">Whispering Angel Rose’</p></div>
         <div class="col-md-12 col-sm-6 mb-5 text-center"><h1>Bachelorette Packages</h1></div>
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-6 mt-3 mb-1"><h2 class="text-center font-weight-bold font-tenor">Best-Value Package</h2></div>   
              <div class="col-md-12 col-sm-6 mt-4 mb-3"><img class="d-block w-100 lazyload" data-src="/public/photos/2/29-SDX-OB/29-bachelor.png" src="/public/photos/2/29-SDX-OB/29-bachelor.png" ></div> 
                <div class="pricingTable2">
                    <div class="pricingTable2-header">
                        <h3 class="title">29’ 2020 Sea Ray</h3>
                        <div class="price-value2">$1,700+</div>
                        <div class="price-value">+$300 Fuel</div>
                        <div class="price-value">+$350 Gratuity</div>
                    </div>
                    <ul class="pricing-content">
                        <li><i class="fa fa-check"></i>Captain</li>
                        <li><i class="fa fa-check"></i>Fuel</li>
                        <li><i class="fa fa-check"></i>Gratuity</li>
                        <li><i class="fa fa-check"></i>2 FREE Whispering Angel Rose’</li>
                        <li><i class="fa fa-check"></i>FREE Vail Captain Hat for Bride</li>
                        <li><i class="fa fa-check"></i>FREE Nauti-Bride Shirt for Bride</li>
                    </ul>
                    <a href="searay-290" target="_blank" class="mt-5 mb-2 pricingTable2-signup">Learn More</a>
                </div>
                
            </div>
  
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-6 mt-3 mb-1"><h2 class="text-center font-weight-bold font-tenor">Party Package</h2></div>
                  <div class="col-md-12 col-sm-6 mt-4 mb-3"><img class="d-block w-100 lazyload" data-src="/public/photos/2/32-sundancer/32-bachelor.png" src="/public/photos/2/32-sundancer/32-bachelor.png" ></div> 
                <div class="pricingTable2 blue">
                    <div class="pricingTable3-header">
                        <h3 class="title">32’ 2020 Sundancer</h3>
                        <div class="price-value2">$2,100+</div>
                        <div class="price-value3">+$300 Fuel</div>
                        <div class="price-value3">+$400 Gratuity</div>
                    </div>
                    <ul class="pricing-content">
                       <li><i class="fa fa-check"></i>Captain</li>
                        <li><i class="fa fa-check"></i>Fuel</li>
                        <li><i class="fa fa-check"></i>Gratuity</li>
                        <li><i class="fa fa-check"></i>2 FREE Whispering Angel Rose’</li>
                        <li><i class="fa fa-check"></i>FREE Vail Captain Hat for Bride</li>
                        <li><i class="fa fa-check"></i>FREE Nauti-Bride Shirt for Bride</li>
                    </ul>
                     <a href="32-sundancer" target="_blank" class="mt-5 mb-2 pricingTable2-signup">Learn More</a>
                </div></div>
            </div>
        </div>
</div>
    </section>
    
     <!-- package section ends !-->
    
      <!-- Calculator starts !-->
    
     <section class="section about position-relative bg-gray pt-5 calculatePrice">
        <div class="container">
        <div class="row mb-4 justify-content-md-center">
         <div class="col-md-6 col-sm-6">
                    <h3 class="font-weight-bold mb-5 text-center">Cost Per Girl Calculator</h3>
         <div class="container">
         <form class="form-horizontal" action="#">
  
            <div class="form-group">
                <label class="control-label col-sm-10" for="bestChoiceBoat">Boat Choice</label>
                <div class="col-sm-12">       
                    <select class="form-control bestChoiceBoat" id="bestChoiceBoat" onchange="calculatePrice()">
                      <option value="">Select A Boat</option>
                      <option value="31">29' 2020 Sea Ray - Best-Value Package</option>
                      <option value="61">32' 2020 Sundancer- Party Package</option>
                    </select>
                    <input type="hidden" id="total_cost" value="">
                </div>
            </div>
              
            <!--<div class="form-group">
              <label class="control-label col-sm-10" for="cost">Total Cost:</label>
              <div class="col-sm-12">
                <input type="text" class="form-control " id="cost" placeholder="$" name="cost" readonly>
              </div>
            </div>-->
            
            <div class="form-group">
              <label class="control-label col-sm-10" for="bridesmaids">Number of Paying Bridesmaids:</label>
              <div class="col-sm-12">          
                <input type="text" class="form-control totalPerson" id="bridesmaids" placeholder="#Paying Bridesmaids" name="bridesmaids" onkeyup="calculatePrice()">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-10" for="bridesmaid">Cost per Bridesmaid:</label>
              <div class="col-sm-12">          
                <input type="text" class="form-control avgCost" readonly id="bridesmaid" placeholder="Cost per Bridesmaid" name="bridesmaid">
              </div>
            </div>

        </form>
          
          </div>
          </div>
        </div></div>
    </section>
    
       <!-- Calculator ends !-->
    
    <section class="section about position-relative bg-gray pt-5">
        <div class="container">
        <div class="row mt-3 mb-4">
         <div class="col-md-12 col-sm-6 text-center"><h5 class="font-tenor">Exclusions: Food and hard alcohol. Please bring ABSOLUTELY any food or alcohol you wish,<br> excluding red wine, it stains.</h5></div>
        </div></div>
    </section>
         
    <section class="section about position-relative bg-white pt-5">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-6 text-center"><h2 class="text-center font-weight-bold font-tenor">Popular Bachelorette Party Itinerary Ideas</h2>
          <h5>Let us help you decide which is best for you based on your mood that day!</h5>
         </div></div>
         
           <div class="row mt-5">
          <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor">Sightseeing & Celebrity Homes</h3>
          <h5>Spot Celebrity Homes</h5>
         </div></div>
         
          <div class="row mt-5">
          <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor">Majors Cove Private Lagoon</h3>
          <h5>Diving, Swimming & Water Toys</h5>
         </div></div>
         
         <div class="row mt-5">
          <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor"><a href="/">Yachthampton</a></h3>
          <h5>Our Party Oasis of Fun Water Toys</h5>
         </div></div>
         
             <div class="row mt-5">
          <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor">Sunset Beach Beach Club</h3>
          <h5>(Chic Hamptonsesque Beach Scene) Shelter Island</h5>
         </div></div>
         
         
            <div class="row mt-5">
          <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor">Claudio’s Bar & Grill</h3>
          <h5>(Fun Bar on Marina with Music) Greenport</h5>
         </div></div>
         
         
           <div class="row mt-5">
          <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor"><a href="salt-waterfront-shelter-island" target="_blank">Salt Bar & Restaurant</a></h3>
          <h5>(Lovely Unique Hipster Bar & Grill) Shelter Island</h5>
         </div></div>
         
         <div class="row mt-5">
          <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor"><a href="navy-beach-montauk" target="_blank">Navy Beach</a></h3>
          <h5>(Beach Town Chill Scene) Montauk</h5>
         </div></div>
</section>         
         
         
         
         
          <section class="section about position-relative bg-gray pt-5">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-6 text-center"><h2 class="text-center font-weight-bold font-tenor">Is Your Yacht Budget $4,000?</h2>
          <h5>Ask about or VIP Bachelorette Party Package on our 43’ Azimut. <a class="text-color" href="43-azimut">Request it here.</a></h5>
         </div></div>
</section>    
    
         
    <section class="section about position-relative bg-white pt-5">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-6 text-center"> <h3 class="font-weight-bold font-tenor">Need a place to stay……</h3>
            <h5><a class="text-color" href="sms:+1718-702-9245">Text Here</a> and let our complimentary concierge assist you with our discounted Bachelorette Party Homes or Hotels and everything Hamptons.</h5>
        </div></div></div>
    </section>    
    
    
     <!-- package section ends !-->


    <section>
        <img class="d-block w-100 lazyload" data-aos="fade-center" data-aos-duration="1000" data-src="{{ asset('/photos/2/bachelorette-party/bachelor-9.jpg') }}">
    </section>

    <!-- Section Testimonial End -->
    <section class="section about position-relative bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <div class="section-title">
                        <span class="h1 text-color font-tenor">We Sell-Out On Weekends</span>
                        <h4 class="mt-4">Please share this page, act swiftly & organize your group, so you may secure the boat you want, when you want!</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="text-center">
                        <i class="fa fa-phone fa-4x" aria-hidden="true" data-aos="fade-center" data-aos-duration="1000"></i>
                        <div class="card-body mt-2">
                            <h2 class="mt-3 mb-5 lh-36"><a href="tel:+1-631-431-0463">Phone</a></h2>
                            <p>Please call 800-417-2027 or text questions to 631-500-7777 to book your Hamptons boat charter today.</p>
                            <a href="sms:+16315007777"><p class="mt-5">Text 631-500-7777</p></a>
                            <a href="tel:+18004172027">	<p class="mt-5">Call 800-417-2027</p></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="text-center">
                        <i class="fa fa-clone fa-4x" aria-hidden="true" data-aos="fade-center" data-aos-duration="1000"></i>
                        <div class="card-body mt-2">
                            <h2 class="mt-3 mb-5 lh-36"><a>Web Form</a></h2>
                            <p>We prefer you complete the form below so we can efficiently reply with the best yachting option. Our prices vary from $990. to $19,900. so knowing your needs allows us to serve you better.</p>
                            <p class="mt-5">Complete The Form Below</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-4x" aria-hidden="true" data-aos="fade-center" data-aos-duration="1000"></i>
                        <div class="card-body mt-2">
                            <h2 class="mt-3 mb-5 lh-36"><a href="mailto:captain@hamptonsboatrental.com">Email</a></h2>
                            <p>Filling out the web form below is the most efficient way of contacting us. You may also send us an email for booking.</p>
                            <p class="mt-5"><a href="mailto:captain@hamptonsboatrental.com">Captain@HamptonsBoatRental.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section google-map bg-gray">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96372.08413784177!2d-72.3676987006836!3d40.9896340347042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8bd25219d8ba7%3A0x55f32bd7119148b4!2sHamptons+Boat+Rental!5e0!3m2!1sen!2sbd!4v1563398941557!5m2!1sen!2sbd" class="gmap" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="text-center">
                <p class="mt-4">The 32′ Sundancer disembarks from Mill Creek Marina (behind Bell and Anchor restaurant) at 3253 Noyac Road Sag Harbor, NY 11963.</p>
                <p class="mt-3">Most of the other Yachts depart from the Village of Sag Harbor, from the town dock located behind the windmill.</p>
                <a href="https://goo.gl/maps/AGJyMa7AEkL2"><p class="mt-3">View On Google Map</p></a>
            </div>
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
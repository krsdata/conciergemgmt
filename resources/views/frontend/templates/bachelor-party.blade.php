@extends('frontend.mainframe')
@section('content')

<style>
    .featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} 
</style>


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

    <section class="section about position-relative bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-12 offset-md-0">
                    <div class="about-item ">
                        <div class="text-center">
                            <h4 class="font-tenor">Have the ultimate bachelor party on one of our private luxury yachts in the Hamptons!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="section about position-relative bg-gray">
        <div class="container">
            <div class="row">
 <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-item">
                        <img class="d-block w-100 lazyload" data-src="{{ asset('/photos/2/bachelor-party/man-on-boat.jpg') }}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="about-item">
                        <h2 class="text-center position-relative content-title mb-2">Do something different</h2>
                        <div class="about-content">
                            <p class="text-justify ptr">Skip the typical bar scene for a day and charter one of our luxury yachts. It’s the perfect venue for all the guys to unwind and party it up on your own private yacht.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about position-relative bg-gray pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-item">
                        <h2 class="text-center position-relative content-title mb-2">We Can Fit More Booze Onboard Than You Can Drink</h2>
                        <div class="about-content">
                            <p class="text-justify ptr">Bring aboard any food or alcohol you’d like to have for your day on the water . We can fit more alcohol on board than you can drink. And there’s no better place to enjoy a cold one than the pristine waters of the Hamptons.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="about-item">
                        <img class="d-block w-100 lazyload" data-src="{{ asset('/photos/2/bachelor-party/stag-party-Catamaran-yhc.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about position-relative bg-gray pt-5">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-item">

                        <img class="d-block w-100 lazyload" data-src="{{ asset('/photos/2/bachelor-party/drinks-on-hbr.jpg') }}">
                    </div>

                </div>

                <div class="col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">

                    <div class="about-item">

                        <h2 class="text-center position-relative content-title mb-2">The Amazing Sights of the Hamptons</h2>
                        <div class="about-content">

                            <p class="text-justify ptr">The Hamptons is the premier vacation destination in New York. Charting one of our yachts lets you see the exquisite homes, beautiful hidden coves, and crystal clear waters of the Hampton’s up close and personal.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section about position-relative bg-gray pt-5">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12"  data-aos="fade-right" data-aos-duration="1000" >

                    <div class="about-item">

                        <h2 class="text-center position-relative content-title mb-2">Partying Encouraged</h2>
                        <div class="about-content">

                            <p class="text-justify ptr">At Hampton’s Boat Rental, we want your Bachelor party to be an unforgettable experience. Play your favorite playlists and enjoy your favorite drinks with your favorite group of people!</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12"  data-aos="fade-left" data-aos-duration="1000">

                    <div class="about-item">

                        <img class="d-block w-100 lazyload" data-src="{{ asset('/photos/2/bachelor-party/party-encouraged-yhc.jpg') }}">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section about position-relative bg-gray pt-5">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-item">

                        <img class="d-block w-100 lazyload" data-src="{{ asset('/photos/2/bachelor-party/yhc-patron-en-bachelor.jpg') }}">
                    </div>

                </div>

                <div class="col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">

                    <div class="about-item">

                        <h2 class="text-center position-relative content-title mb-2">Shelter Island</h2>
                        <div class="about-content">

                            <p class="text-justify ptr">Arrive at one of the most popular getaways in the Hamptons in style. Shelter has incredible coves where you can cool off while you swim around in the pristine waters. Shelter Island is the spot to anchor up and drink away!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section about position-relative bg-gray pt-5">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">

                    <div class="about-item">

                        <h2 class="text-center position-relative content-title mb-2">Take Your time</h2>
                        <div class="about-content">

                            <p class="text-justify ptr">At Hampton’s Boat Rental, we want you to have the experience of a lifetime and that can’t be rushed. We invite you to stay and party on our boats for a minimum of 4 hours or more.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">

                    <div class="about-item">

                        <img class="d-block w-100 lazyload" data-src="{{ asset('/photos/2/bachelor-party/yhc-yacht-jump.jpg') }}">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section about position-relative bg-gray pt-5">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-item">

                        <img class="d-block w-100 lazyload" data-src="{{ asset('/photos/2/bachelor-party/yhc-bachelor-parties.jpg') }}">
                    </div>

                </div>

                <div class="col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">

                    <div class="about-item">

                        <h2 class="text-center position-relative content-title mb-2">Custom Experience</h2>
                        <div class="about-content">

                            <p class="text-justify ptr">We can accommodate just about any itinerary that you have in mind. Just give us a call and we can help arrange all of the logistics. (some destinations and unique pickup locations will incur extra charges)</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <img class="d-block w-100" data-aos="fade-center" data-aos-duration="1000" src="{{ asset('/photos/2/bachelor-party/ska-yachthampton.jpg') }}">

    </section>
    
    
        <!-- package section starts !-->
     <section class="section about position-relative bg-gray pt-5">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-6 mt-4 mb-5 text-center"><p class="bachelorette-cursive">Your last hurrah!</p></div>
         <div class="col-md-12 col-sm-6 mb-5 text-center"><h1>Bachelor Packages</h1></div>
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-6 mt-3 mb-1"><h2 class="text-center font-weight-bold font-tenor">Best-Value Package</h2></div>   
              <div class="col-md-12 col-sm-6 mt-4 mb-3">
                <img class="d-block w-100 lazyload" data-src="/public/photos/2/29-SDX-OB/29-bachelor.png" src="/public/photos/2/29-SDX-OB/29-bachelor.png" ></div> 
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
                    <h3 class="font-weight-bold mb-5 text-center">Cost Per Bachelor Calculator</h3>
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
                <input type="text" class="form-control" id="cost" placeholder="$" name="cost" readonly>
              </div>
            </div>-->

            <div class="form-group">
              <label class="control-label col-sm-10" for="bachelors">Number of Paying Bachelors:</label>
              <div class="col-sm-12">          
                <input type="text" class="form-control totalPerson" id="bachelors" placeholder="#Paying bachelors" name="bachelors" onkeyup="calculatePrice()">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-10" for="bridesmaid">Cost per Bachelor:</label>
              <div class="col-sm-12">          
                <input type="text" class="form-control avgCost" readonly="" id="bridesmaid" placeholder="Cost per Bachelor" name="bachelor">
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
    
    

    <!--<section class="section about position-relative bg-gray">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-item">

                        <img class="d-block w-100 lazyload" data-aos="fade-right" data-aos-duration="1000" data-src="{{ asset('/photos/2/bachelorette-party/bachelor-sundancer.jpg') }}">
                    </div>

                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="about-item">

                        <h2 class="text-center position-relative content-title mb-2">Our Most Popular & Economical Boat</h2>
                        <div class="about-content">

                            <p class="text-justify">All our boats are available from 32′ to 100′, so no matter how intimate or large your party, we can accommodate your entourage. Our most popular choice is our Brand New 2019 32′ Sundancer (pictured here) with space for up to 12 of your favorite friends.  With cushioned lay down sundeck on the front you can soak up those rays, a shaded section at the back offers a cool place to chill and the cabin galley and bathroom deliver those much-needed amenities when out at sea. Find out more about this beautiful boat by clicking <a href="https://yachthampton.com/32-sundancer" target="_blank">here</a>.</p>

                            <p class="text-justify mt-5">Our 32’ Brand New 2019 Sundancer is $1,700 plus $300 Fuel Charge for 4 hours, for a total of $2,000; thus making it a truly affordable option, for a once-in-a-lifetime experience. We respectfully suggest when you have an amazing day a 15-20% cash gratuity to the captain is appreciated and customary with boat chartering.</p>

                            <p class="text-justify mt-4">*For July and August please add extra $200 for charter.</p>

                            <p class="text-justify mt-4">Many of our bachelor parties request to stay at Sunset Beach for the remainder of the day for paddle boarding, massages, or just relaxing and sipping on mojitos; before taking a cab or uber back.</p>

                            <p class="text-justify mt-2">We want you to have the best time and may even be able to assist by returning your goods to your cars at Sag Harbor so you can continue your party on the shores of Sunset Beach.</p>

                            <p class="text-justify mt-2">We are totally flexible and can plan your day for you or most groups allow us to mention the options the day of and captain the boat and do exactly what you want to do. The day is yours!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section>
        <img class="d-block w-100 lazyload" data-aos="fade-center" data-aos-duration="1000" data-src="{{ asset('/photos/2/bachelor-party/guys-beach-pac.jpg') }}">

    </section> -->

    <section class="section about position-relative bg-white pt-5">
        <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-6 text-center"><h2 class="text-center font-weight-bold font-tenor">Popular Bachelor Party Itinerary Ideas</h2>
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
              <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor">Yachthampton</h3>
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
              <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor">Salt Bar & Restaurant</h3>
              <h5>(Lovely Unique Hipster Bar & Grill) Shelter Island</h5>
             </div></div>
             
             
             <div class="row mt-5">
              <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor">Navy Beach</h3>
              <h5>(Beach Town Chill Scene) Montauk</h5>
             </div></div>
    </section>         
         
         
         
         
    <section class="section about position-relative bg-gray pt-5">
        <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-6 text-center"><h2 class="text-center font-weight-bold font-tenor">Is Your Yacht Budget $4,000?</h2>
              <h5>Ask about or VIP Bachelor Party Package on our 43’ Azimut. <a class="text-color" href="43-azimut">Request it here.</a></h5>
             </div></div>
    </section>    
        
    <section class="section about position-relative bg-white pt-5">
        <div class="container">
            <div class="row">
             <div class="col-md-12 col-sm-6 text-center"> <h3 class="font-weight-bold font-tenor">Need a place to stay……</h3>
              <h5><a class="text-color" href="sms:+1718-702-9245">Text Here</a> and let our complimentary concierge assist you with our discounted Bachelor Party Homes or Hotels and everything Hamptons.</h5>
              
              </div>
              
                
                </div></div>
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
                            <p>Please call 800-417-2027 or text questions to 631-431-0463 to book your Hamptons boat charter today.</p>
                            <a href="sms:+16315007777"><p class="mt-5">Text 631-500-7777</p></a>
                            <a href="tel:+18004172027"><p class="mt-5">Call 800-417-2027</p></a>
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
                            <p class="mt-5"><a href="mailto:captain@hamptonsboatrental.com">captain@hamptonsboatrental.com</a></p>
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
                <p class="mt-4">The 32' Sundancer disembarks from Mill Creek Marina (behind Bell and Anchor restaurant) at 3253 Noyac Road Sag Harbor, NY 11963.</p>
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
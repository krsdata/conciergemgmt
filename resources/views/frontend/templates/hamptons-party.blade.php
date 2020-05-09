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
         
         <div class="row mt-5">
          <div class="col-md-12 col-sm-6 text-center"><h3 class="text-center font-weight-bold font-tenor"><a href="#" target="_blank">Absolutely Anything You Wish</a></h3>
          <h5>(The Boat is 100% Yours!)</h5>
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
            <h5><a class="text-color" href="sms:+16312010193">Text Here</a> and let our complimentary concierge assist you with our discounted Bachelorette Party Homes or Hotels and everything Hamptons.</h5>
        </div></div></div>
    </section>    
    
     <!-- package section ends !-->

   <section class="section blog-wrap bg-gray">
        <div class="containers mb-5 pt-3 pb-3 boat-header">
            <p class="mb-1 mt-2 text-center text-white">Groups Larger Than 13</p>
        </div>
  <!-- 1st Boat !-->
        <div class="containers">
            <div class="rows">

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                   
                    
                           
                      
                            <div class="seller-img">
                               <img class="lazyload" data-src="public/photos/2/blue_seller.png" src="public/photos/2/blue_seller.png" alt="brand new icon yachthampton" />
                            </div>        
                           
                            <div class="ourboatbox">
                                <a href="sagharbor-sailboat-charter-75" target="_blank">
                                    <img class="img-fluid rounded boat-feature lazyload" data-src="public/photos/2/75-schooner/157946315943129539.jpg" src="public/photos/2/75-schooner/157946315943129539.jpg" alt="hamptons 75' boat" />
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="popular-image">
                                        <span class="post-no">33</span>
                                    </span>
                                    <span class="boats_price_box">
                                         <span class="boats_price_box_item2">From</span>
                                        <span class="boats_price_box_item text-white h4">$2,700+</span>
                                        <span class="boats_price_box_item1">+Fuel & Gratuity</span>
                                    </span>
                                </div>
                            </div>
                        <div class="blog-item-content bg-white p-1 boat_it">

                                <h3 class="text-center font-weight-bold mb-4 pt-2"><a href="sagharbor-sailboat-charter-75" target="_blank">Sag Harbor Sailboat Charter 75′</a></h3>
                                <div class="text-center mb-3 boat-info"><span class="text-capitalize"><i class="fa fa-map-marker"></i> SAG HARBOR</span></div>
                                
                                <div class="text-center mb-3 boat-info">
                                    <span class="text-capitalize mr-3"><i class="fas fa-ruler-horizontal"></i> 75 FT</span>
                                    <span class="text-capitalize mr-3"><i class="fas fa-tachometer-alt"></i> 8 MPH</span>
                                    <span class="text-capitalize mr-3"><i class="fas fa-user-friends"></i> 41</span>
                                    <span class="text-capitalize"><i class="fas fa-bed"></i> 20</span>
                                </div>

                                <div class="text-center boat-info">
                                    
                                    <span class="text-capitalize"><i class="fa fa-sun-o"></i> Day Trips</span>
                                 
                                 
                          
                                </div>
                                <div class="col text-center mt-4 pb-3"><a href="sagharbor-sailboat-charter-75" target="_blank" class="nice-button blue-button">Learn More</a></div>
                            
                        </div>
                    </div>
                </div>
                
                
                <!-- 2nd Boat !-->
                
                 <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">          
              
                        <div class="image10">
                            <img class="lazyload" data-src="public/photos/2/4-hour-rate.png" src="public/photos/2/4-hour-rate.png" alt="4 hour rate icon yachthampton" />
                        </div>
                            
                            <div class="ourboatbox">
                                <a href="sag-harbor-sailboat-79" target="_blank">
                                    <img class="img-fluid rounded boat-feature lazyload" data-src="public/photos/2/79-schooner/79-schooner-feature.jpg" src="public/photos/2/79-schooner/79-schooner-feature.jpg" alt="hamptons 79' boat" />
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="popular-image">
                                        <span class="post-no">34</span>
                                    </span>
                                    <span class="boats_price_box">
                                         <span class="boats_price_box_item2">From</span>
                                        <span class="boats_price_box_item text-white h4">$3,400+</span>
                                        <span class="boats_price_box_item1">+Fuel & Gratuity</span>
                                    </span>
                                </div>
                            </div>
                        <div class="blog-item-content bg-white p-1 boat_it">

                                <h3 class="text-center font-weight-bold mb-4 pt-2"><a href="sag-harbor-sailboat-79" target="_blank">Sag Harbor Sailboat 79′</a></h3>
                                <div class="text-center mb-3 boat-info"><span class="text-capitalize"><i class="fa fa-map-marker"></i> SAG HARBOR</span></div>
                                
                                <div class="text-center mb-3 boat-info">
                                    <span class="text-capitalize mr-3"><i class="fas fa-ruler-horizontal"></i> 79 FT</span>
                                    <span class="text-capitalize mr-3"><i class="fas fa-tachometer-alt"></i> 8 MPH</span>
                                    <span class="text-capitalize mr-3"><i class="fas fa-user-friends"></i> 24</span>
                                    <span class="text-capitalize"><i class="fas fa-bed"></i> 3</span>
                                </div>

                                <div class="text-center boat-info">
                                    
                                    <span class="text-capitalize"><i class="fa fa-sun-o"></i> Day Trips</span>
                                 
                                 
                          
                                </div>
                                <div class="col text-center mt-4 pb-3"><a href="sag-harbor-sailboat-79" target="_blank" class="nice-button blue-button">Learn More</a></div>
                            
                        </div>
                    </div>
                </div>
         
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
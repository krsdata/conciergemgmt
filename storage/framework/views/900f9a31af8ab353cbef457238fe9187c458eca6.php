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
                          <h1 class="text-capitalize mb-4 text-lg"><?php echo e($page->page_name); ?></h1>
                       <!--     <ul class="list-inline">
                                <li class="list-inline-item"><a href="<?php echo e(url('/')); ?>" class="text-white">Yachthampton</a></li>
                            </ul> !-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <style>.featured-image{background:url("<?php echo e($page->featured_image); ?>") no-repeat 50% 50%;background-size:cover} </style>

    <section class="position-relative bg-gray pt-5 pb-3">
        <div class="container">
    <h2 class="text-center position-relative text-color mb-5 content-title"><?php echo e($page->page_name); ?></h2>
    <h3 class="mt-5 mb-2">PAGES</h3>
    <a href="./" target="_blank">Hamptons Boat Rental Home Page</a><br>
    <a href="./our-boats" target="_blank">Hamptons Our Boats</a><br>
    <a href="./water-toys" target="_blank">Hamptons Boat Rental Water Toys</a><br>
    <a href="./bachelorette-parties" target="_blank">Hamptons Bachelorette Parties</a><br>
    <a href="./bachelorette-party" target="_blank">Hamptons Boat Rental Bachelorette Party</a><br>
    <a href="./bachelor-parties" target="_blank">Bachelor Party</a><br>
    <a href="./hamptons-to-do" target="_blank">Hamptons Newest Boat & Yacht Rentals</a><br>
    <a href="./contact-us" target="_blank">Contact Hamptons Boat Rental</a><br>
    <a href="./overnight-destinations" target="_blank">Overnight Destinations</a><br>
    <a href="./local-destinations" target="_blank">Local Destinations</a><br>
    <a href="./dining-destinations" target="_blank">Dining Destinations</a><br>
    <a href="./large-group12" target="_blank">Large Groups >12</a><br>
    <a href="./cancellation-weather-policy" target="_blank">Cancellation/Weather Policy</a><br>
    <a href="./overnight-yacht-charter-request" target="_blank">Overnight Yacht Charter Request</a><br>
    <a href="./hamptons-event-yacht-request" target="_blank">Hamptons Event Yacht Request</a><br>
    <a href="./ready-to-book" target="_blank">100% Ready-to-Book Request</a><br>
    <a href="./faq-hamptons-boat-rental" target="_blank">FAQ Hamptons Boat Rental</a><br>
   
    <h3 class="mt-5 mb-2"><a href="./things-to-do-in-the-hamptons" target="_blank">THINGS-TO-DO IN HAMPTONS</a></h3>
    <a href="./things-to-do-in-the-hamptons" target="_blank">Hamptons Things-to-Do</a><br>
    
    <h3 class="mt-5 mb-2"><a href="./popular-boats" target="_blank">ALL POWERBOATS</a></h3>
    <a href="./22-bayliner" target="_blank">22' Bayliner DX2200</a><br>
    <a href="./searay-290" target="_blank">Sea Ray 29' Day-Party Boat</a><br>
    <a href="./32-sundancer" target="_blank">32' Sundancer</a><br>
    <a href="./43-azimut" target="_blank">43' Azimut + Jet Ski</a><br>
    <a href="./hamptons-32-monterey" target="_blank">Hamptons 32′ Monterey</a><br>
    <a href="./34-chris-craft" target="_blank"> 34' Chris Craft Catalina</a><br>
    <a href="./37-coupe-cruiser" target="_blank">37' Coupe Cruiser</a><br>
    <a href="./38-riviera" target="_blank">38' Riviera</a><br>   
    <a href="./40-azimut" target="_blank">Hamptons Yacht Charter Azimut 40'</a><br>
    <a href="./hamptons-49-beneteau" target="_blank">Hamptons 49' Beneteau</a><br>
    <a href="./50-jefferson-motor-yacht" target="_blank">50' Jefferson Motor Yacht</a><br>
    <a href="./58-sunseeker-predator" target="_blank">58' Sunseeker Predator</a><br>
    <a href="./60-azimut" target="_blank">60' Azimut</a><br>
    <a href="./62-pershing2" target="_blank">62' Pershing</a><br>
    <a href="./65-searay2" target="_blank">65' Sea Ray</a><br>
    <a href="./68-sunseeker2" target="_blank">68' Sunseeker (Weekday Specials)</a><br>
    <a href="./72-princess2" target="_blank">72' Princess (Weekdays Only)</a><br>
    <a href="./73-ferretti2" target="_blank">73' Ferretti</a><br>
    <a href="./84-azimut2" target="_blank">84' Azimut</a><br>
    <a href="./hargrave-97" target="_blank">97' Hargrave</a><br>
    <a href="./lazzara-106" target="_blank">106' Lazzara</a><br>
   
    <h3 class="mt-5 mb-2"><a href="./sailboats" target="_blank">SAILBOATS & CATAMARAN</a></h3>
    <a href="./38-catamaran" target="_blank">38' Catamaran</a><br>
    <a href="./57-beneteau" target="_blank">57' Beneteau</a><br>
    <a href="./sagharbor-sailboat-charter-75" target="_blank">Sag Harbor Sailboat Charter 75'</a><br>
    <a href="./sag-harbor-sailboat-79" target="_blank">Sag Harbor Sailboat 79'</a><br>
    <a href="./80-schooner" target="_blank">80' 1930 Schooner (12 Guest Capacity)</a><br>
   
    <h3 class="mt-5 mb-2"><a href="./group-12" target="_blank">GROUPS > 12 & EVENT YACHTS</a></h3>
    <a href="./75-schooner" target="_blank">75' Schooner (41 Guest Capacity)</a><br>
    <a href="./79-schooner" target="_blank">79' Sailboat Schooner (24 Guest Capacity)</a><br>
    <a href="./hamptons-party-yacht-85" target="_blank">Hamptons Party Yacht 85′</a><br>
    <a href="./hamptons-wedding-event-yacht" target="_blank">Hamptons Wedding Event Yacht</a><br>
   
    <h3 class="mt-5"><a href="./luxury-boats" target="_blank">LUXURY OVERNIGHT YACHTS</a></h3>
    <a href="./pershing-62" target="_blank">62' Pershing</a><br>
    <a href="./65-sea-ray" target="_blank">65' Sea Ray</a><br>
    <a href="./68-sunseeker" target="_blank">68' Sunseeker (Weekday Specials)</a><br>
    <a href="./72-princess" target="_blank">72' Princess</a><br>
    <a href="./73-ferretti" target="_blank">73' Ferretti</a><br>
    <a href="./84-azimut" target="_blank">84' Azimut</a><br>
    <a href="./97-hargrave" target="_blank">97' Hargrave</a><br>
    <a href="./106-lazzara" target="_blank">106' Lazzara (No Sunday)</a><br>
   
    <h3 class="mt-5 mb-2"><a href="./fishing-boats" target="_blank">FISHING BOATS</a></h3>
    <a href="./38-riviera2" target="_blank">38' Riviera</a><br>
   
    <h3 class="mt-5 mb-2"><a href="./ski-watersports" target="_blank">SKI & WATERSPORTS BOATS</a></h3>
    <a href="./searay-290sdx2" target="_blank">29' 2020 Sea Ray</a><br>
    
    <h3 class="mt-5"><a href="./value" target="_blank">VALUE BOATS</a></h3>
    <a href="./sag-harbor-sailboat-rental-23" target="_blank">Sag Harbor 23' Sailboat</a><br>
    <a href="./rental-sag-harbor-sailboat-27" target="_blank">Sag Harbor 27' Sailboat</a><br>
    <a href="./sailboat-rental-sag-harbor-34" target="_blank">Sag Harbor 34' Sailboat</a><br>
    
    <h3 class="mt-5 mb-2"><a href="./local-destinations" target="_blank">LOCAL DESTINATIONS</a></h3>
    <a href="./east-hampton" target="_blank">East Hampton</a><br>
    <a href="./greenport-destination" target="_blank">Greenport</a><br>
    <a href="./montauk-destination" target="_blank">Montauk</a><br>
    <a href="./shelter-island" target="_blank">Shelter Island</a><br>
    <a href="./sag-harbor-waters" target="_blank">Sag Harbor Waters</a><br>
   
    <h3 class="mt-5 mb-2"><a href="./overnight-destinations" target="_blank">OVERNIGHT DESTINATIONS</a></h3>
    <a href="./block-island" target="_blank">Block Island RI</a><br>
    <a href="./fishers-island" target="_blank">Fishers Island</a><br>
    <a href="./marthas-vineyard" target="_blank">Martha’s Vineyard MA</a><br>
    <a href="./mohegan-sun" target="_blank">Mohegan Sun CT</a><br>
    <a href="./montauk-destination" target="_blank">Montauk</a><br>
    <a href="./mystic-seaport" target="_blank">Mystic Seaport CT</a><br>
    <a href="./nantucket-destination" target="_blank">Nantucket MA</a><br>
    <a href="./old-saybrook" target="_blank">Old Saybrook CT</a><br>
    <a href="./newport-destination" target="_blank">Newport RI</a><br>
    <a href="./newyork-city" target="_blank">New York City</a><br>
    
    <h3 class="mt-5 mb-2"><a href="./dining-destinations" target="_blank">DINING DESTINATIONS</a></h3>
    <a href="./sunset-beach-restaurant" target="_blank">Sunset Beach Restaurant, SHELTER ISLAND</a><br>
    <a href="./rams-head-inn" target="_blank">Ram's Head Inn, SHELTER ISLAND HEIGHTS</a><br>
    <a href="./marie-eiffel-market" target="_blank">Marie Eiffel Restaurant, SHELTER ISLAND</a><br>
    <a href="./port-waterfront-restaurant" target="_blank">PORT Waterfront Bar and Grill, GREENPORT</a><br>
    <a href="./lucharitos-bar" target="_blank">Lucharito's Bar, GREENPORT</a><br>
    <a href="./claudios-restaurant" target="_blank">Claudios, GREENPORT</a><br>
    <a href="./frisky-oyster" target="_blank">Frisky Oyster, GREENPORT</a><br>
    <a href="./bilboquet" target="_blank">Le Bilboquet, SAG HARBOR</a><br>
    <a href="./tutto-il-giorno" target="_blank">Tutto il Giorno, SAG HARBOR</a><br>
    <a href="./lulu-kitchen" target="_blank">Lulu Kitchen & Bar, SAG HARBOR</a><br>
    <a href="./sag-pizza" target="_blank">Sag Pizza, SAG HARBOR</a><br>
    <a href="./beacon-restaurant" target="_blank">The Beacon Restaurant, SAG HARBOR</a><br>
    <a href="./bell-anchor" target="_blank">Bell & Anchor, SAG HARBOR</a><br>
    <a href="./navy-beach-restaurant" target="_blank">Navy Beach Restaurant, MONTAUK</a><br>
    <a href="./gurneys-star" target="_blank">Gurneys Star Island Resort & Marina, MONTAUK</a><br>
    <a href="./showfish-montauk" target="_blank">Showfish Montauk, MONTAUK</a><br>
    <a href="./duryeas-lobster" target="_blank">Duryea's Lobster Deck, MONTAUK</a><br>
    <a href="./salt-restaurant" target="_blank">SALT Waterfront Restaurant, MERRICK</a><br>
    <a href="./bostwick" target="_blank">Bostwick's on the Harbor</a><br>
    
    <h3 class="mt-5 mb-2"><a href="./things-to-do-in-the-hamptons" target="_blank">THINGS-TO-DO PAGES</a></h3>
    <a href="./things-to-do-in-the-hamptons" target="_blank">Hamptons Things-to-Do</a><br>
    <a href="./salt-restaurant-shelter-island" target="_blank">SALT Waterfront Bar and Grill, Shelter Island</a><br>
    <a href="./shelter-island-estuary-tour" target="_blank">Shelter Island Estuary Tour</a><br>
    <a href="./sag-harbor-charters" target="_blank">Sag Harbor Charters</a><br>
    <a href="./greenport-harbor-boat-rental-sailing-charters" target="_blank">Greenport Boat Rentals</a><br>
    <a href="./navy-beach-montauk-hamptons" target="_blank">Navy Beach, Montauk</a><br>
    <a href="./montauk-boat-rentals" target="_blank">Montauk Boat Rental & Charter</a><br>
    <a href="./shelter-island-paddle-boards" target="_blank">Shelter Island Paddle Boards</a><br>
    <a href="./sunset-beach-shelter-island-beach-massage" target="_blank">Sunset Beach Shelter Island Beach Massage</a><br>
    <a href="./long-island-aquarium-riverhead" target="_blank">Long Island Aquarium, Riverhead</a><br>
    <a href="./kokomos-restaurant-beach" target="_blank">Kokomos Beach Restaurant</a><br>
    <a href="./long-island-hamptons-wineries" target="_blank">North Fork Long Island Wineries</a><br>
    <a href="shelter-island-sunset-beach-hamptons-boat-rentals" target="_blank">Sunset Beach, Shelter Island</a>
   
    <h3 class="mt-5 mb-2"><a href="./water-toys" target="_blank">WATER TOYS PAGES</a></h3>
    <a href="./water-toys" target="_blank">Water Toys</a><br>
    <a href="./seascooter" target="_blank">SEASCOOTER</a><br>
    <a href="./awake" target="_blank">ELECTRIC SURFBOARD</a><br>
    <a href="./seabob" target="_blank">SEABOB</a><br>
    <a href="./hoverboard" target="_blank">HYDROFOIL HOVERBOARD</a><br>
    <a href="./flyboard" target="_blank">FLY BOARD</a><br>
    <a href="./jetpack" target="_blank">JET PACK</a><br>
    <a href="./jetski" target="_blank">JETSKI</a><br>
    <a href="./tubing" target="_blank">TUBING</a><br>
    <a href="./paddle-board" target="_blank">PADDLE BOARD</a><br>
    <a href="./group-paddleboard" target="_blank">4-PERSON GROUP PADDLE BOARD</a><br>
    <a href="./tender-rental" target="_blank">TENDER</a><br>
    <a href="./fishing-equipment-rental" target="_blank">FISHING EQUIPMENT</a><br>
    <a href="./snorkeling" target="_blank">SNORKELING EQUIPMENT</a><br>
    <a href="./drones-gopros" target="_blank">DRONES AND GO PROS</a><br>
    <a href="./nemo" target="_blank">HOOKAH UNDERWATER DIVING</a><br>
    <a href="./sea-doo" target="_blank">2020 SEA DOO SPARK JETSKI</a>
    
    <h3 class="mt-5 mb-2"><a href="./hamptons-blog" target="_blank">BLOG YACHTHAMPTON</a></h3>
    <a href="./hamptons-blog" target="_blank">Blog</a><br>
    
    <h3 class="mt-5 mb-2">YACHTHAMPTON SOCIAL SITES</h3><br>
    <a href="https://www.facebook.com/hamptonsboatrental" target="_blank">Hamptons Boat Rental Facebook</a><br>
    <a href="https://www.instagram.com/hamptonsboatrental" target="_blank">Hamptons Boat Rental Instagram</a><br>
    <a href="https://www.twitter.com/hamptonsboatrental" target="_blank">Hamptons Boat Rental Twitter</a><br>
    <a href="https://www.tripadvisor.com/Profile/yachthamptoncharters" target="_blank">Hamptons Boat Rental TripAdvisor</a><br>
    
    </div>
    </section>

        <!-- Section About Start -->
        <section class="about-2 position-relative">
            <div class="container">
                <?php echo $page->content; ?>

            </div>
        </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/conciergemgmt.yachthampton.com/public_html/resources/views/frontend/templates/sitemap.blade.php ENDPATH**/ ?>
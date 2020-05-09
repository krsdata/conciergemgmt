<?php $__env->startSection('content'); ?>

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
    <section class="page-title featured-image">

    </section>
<style>.featured-image{background:url("/public/frontend/images/bridal.jpg") no-repeat 50% 50%;background-size:cover} </style>

    <style>
        .bach h1 {
            color: #1B1464;
            font-size: 55px;
            padding-top: 20px;
            padding-bottom: 50px;
            letter-spacing: 2px;
        }
        .bach p {
            font-size: 20px;
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
        .nice-section {
        border-top: 3px solid #1B1464;
        font-size: 20px;
    }
    .big-heading {
            color: #1B1464;
            letter-spacing: 2px;
            font-family: Tenor Sans,sans-serif;
            font-weight: 400;
            font-size: 35px;
            padding: 25px 0 30px;
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
    .ntbl ul li,
        .nice-list .nice-item,
        .nice-list li {
            padding-bottom: 10px;
        }
    .narrow-form {
            max-width: 800px;
        margin: auto;
    }
        .bach-sel {
            padding-bottom: 80px;
        }
        .bach-sel h2.big-heading,
        .bach-ideas h2.big-heading,
        .bach-12 h2.big-heading{
            color: #17B8F4;
            padding-top: 0;
            text-transform: uppercase;
            font-size: 32px;
        }
        ul.idea-list {
            margin: 0 -15px;
            list-style-type: none;
                width: 100%;
        }
        ul.idea-list li {
            width: 25%;
            float: left;
            font-size: 20px;
            color: #1B1464;
            padding: 15px;
            text-align: left;
            text-transform: uppercase;
        }
        ul.idea-list li img {
            width: 100%;
            height: auto;
            box-shadow: 0px 3px 6px #0000002b;
        }
        ul.idea-list h3 {
            color: #1B1464;
            font-size: 18px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }
        ul.idea-list h4 {
            font-weight: normal;
            color: #1B1464;
            font-size: 18px;
            font-family: BrandonGrotesque-Regular;
        }
        .bach-sel img,
        .bach-12 img {
            box-shadow: 0px 3px 6px #0000002b;
            margin: 10px 0 20px;
        }
        .bach-sel h3,
        .bach-12 h3 {
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 1px;
            color: #1B1464;
            font-size: 20px;
            margin: 10px 0 70px;
            text-transform: uppercase;
        }
        .bach-sel h4,
        .bach-12 h4 {
            color: #1B1464;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .more-boats-12 {
            margin-top: 50px;
            padding-bottom: 30px;
        }
        .calculatePrice h3 {
            font-size: 25px;
            color: #1B1464;
            font-family: tenor sans,sans-serif;
            padding: 20px 0 0;
            margin-bottom: 20px !important;
        }
        .calculatePrice form {
            margin: 0 -15px;
        }
        .calculatePrice h4 {
            font-size: 20px;
            color: #1B1464;
            margin-top: 15px;
        }
        .calculatePrice p {
            font-size: 20px;
            color: #1B1464;
        }
        .calc-more {
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            color: #1B1464;
            border-left: 1px solid #17B8F4;
            margin-left: 100px;
            margin-top: 100px;
        }
        .calc-more li {
            list-style-type: none;
            padding-bottom: 40px;
        }
        .calc-more h4 {
            color: #17B8F4;
            padding: 0 40px 30px;
            font-weight: 700;
        }
        .bach-zz {
            padding-top: 30px;
            padding-bottom: 60px;
        }
        .bach-zz img {
            width: 100%;
            height: auto;
            padding: 25px 0;
        }
        .boat-info-pckg {
            letter-spacing: 1px;
            font-weight: 400;
            font-size: 20px;
            color: #1B1464;
            text-transform: uppercase;
            text-align: left;
        }
        .boat-info-pckg span {
            font-size: 16px;
            float: right;
        }
        .boat-info-pckg span i {
            margin-left: 15px;
        }
        .pricepoint {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            font-size: 18px;
            color: #17B8F4;
            line-height: 26px;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 15px 0 10px;
        }
        .pricepoint strong {
            font-size: 22px;
            font-weight: 400;
        }
        .bach-sel h5 {
            text-transform: uppercase;
            padding-bottom: 10px;
            color: #1B1464;
        }
        .bach-sel ul {
            list-style-type: none;
            padding-bottom: 20px;
            padding: 0;
            color: #1B1464;
        }
        .bach-sel ul li {
            padding-bottom: 10px;
        }
        .bach-sel ul li i {
            margin-right: 10px;
        }
        @media    only screen and (max-width: 900px) {
            ul.idea-list li {
                width: 50%;
            }
        }
        @media    only screen and (max-width: 800px) {
            .bach h1 {
                font-size: 40px;
            }
            .calc-more {
                margin-left: 0;
                margin-top: 0;
            }
        }
    </style>
    
    <section class="section about position-relative bg-white bach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-12 offset-md-0">
                    <div class="about-item ">
                        <div class="">
                            <h1>BACHELORETTE PARTIES</h1>
                            <p>The Crowning Jewel Of Your Beautiful Bachelorette Party Weekend In The Hamptons, Our Yacht Charter<br>Boat Rentals Can Be Your Own Floating Cocktail Lounge And Party Oasis With Your Closest Friends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="section nice-section about position-relative counting bach-ideas">
    <div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-12 text-center">
        <h2 class="big-heading">Yacht Hampton Bachelorette Party Itinerary Ideas</h2>
        <ul class="idea-list">
            <li>
                <div>
                    <img src="/public/frontend/images/1.jpg" alt="">
                    <h3>Sightseeing & Celebrity Homes</h3>
                    <h4>Spot Celebrity Homes</h4>
                </div>
            </li>
            <li>
                <div>
                    <img src="/public/frontend/images/2.jpg" alt="">
                    <h3>Majors Cove Private Lagoon</h3>
                    <h4>Diving, Swimming & Water Toys</h4>
                </div>
            </li>
            <li>
                <div>
                    <img src="/public/frontend/images/3.jpg" alt="">
                    <h3>Yachthampton</h3>
                    <h4>Our Party Oasis of Fun Water Toys</h4>
                </div>
            </li>
            <li>
                <div>
                    <img src="/public/frontend/images/4.jpg" alt="">
                    <h3>Sunset Beach Beach Club</h3>
                    <h4>(Chic Hamptonsesque Beach Scene) Shelter Island</h4>
                </div>
            </li>
            <li>
                <div>
                    <img src="/public/frontend/images/5.jpg" alt="">
                    <h3>Claudio’s Bar & Grill</h3>
                    <h4>(Fun Bar on Marina with Music) Greenport</h4>
                </div>
            </li>
            <li>
                <div>
                    <img src="/public/frontend/images/6.jpg" alt="">
                    <h3>Salt Bar & Restaurant</h3>
                    <h4>(Lovely Unique Hipster Bar & Grill) Shelter Island</h4>
                </div>
            </li>
            <li>
                <div>
                    <img src="/public/frontend/images/7.jpg" alt="">
                    <h3>Navy Beach</h3>
                    <h4>(Beach Town Chill Scene) Montauk</h4>
                </div>
            </li>
            <li>
                <div>
                    <img src="/public/frontend/images/8.jpg" alt="">
                    <h3>Absolutely Anything You Wish</h3>
                    <h4>(The Boat is 100% Yours!)</h4>
                </div>
            </li>
        </ul>
    </div>
    </div>
    </div>
    </div>    
    </section>
    
    <section class="section nice-section about position-relative counting bach-sel">
    <div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-12 text-center">
        <h2 class="big-heading">Whispering Angel Rose’ bachelorette packages</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>BEST VALUE PACKAGE</h4>
                <img class="img-fluid rounded boat-feature ls-is-cached lazyload" data-src="https://hamptonsboatrental.com/public/photos/2/29-SDX-OB/29-feature.jpg" alt="yachthampton_boat">
                <p class="boat-info-pckg">2020 SEA-RAY <span><i class="fas fa-ruler-horizontal"></i> 58’ FEET  <i class="fas fa-user-friends"></i> 12 PEOPLE</span></p>
                <p class="pricepoint"><strong>$2,100</strong> <span>+ $300 FUEL & $300 GRATUITY</span></p>
                <h5>Includes:</h5>
                <ul>
                    <li><i class="fas fa-check"></i> CAPTAIN</li>
                    <li><i class="fas fa-check"></i> WHISPERING ANGLE ROSE</li>
                    <li><i class="fas fa-check"></i> VAIL CAPTAIN HAT</li>
                    <li><i class="fas fa-check"></i> NAUTI-BRIDE SHIRT</li>
                </ul>
                <div class="text-center more-boats-sel">
                    <a class="nice-button-dark-blue dark-blue-button" href="searay-290" rel="noopener">BOOK NOW</a>
                </div>
            </div>
            <div class="col-md-6">
                <h4>PARTY PACKAGE</h4>
                <img class="img-fluid rounded boat-feature ls-is-cached lazyload" data-src="https://hamptonsboatrental.com/public/photos/2/32-sundancer/sundancer-feature.jpg" alt="yachthampton_boat">
                <p class="boat-info-pckg">2020 SUNDANCER <span><i class="fas fa-ruler-horizontal"></i> 58’ FEET  <i class="fas fa-user-friends"></i> 12 PEOPLE</span></p>
                <p class="pricepoint"><strong>$2,100</strong> <span>+ $300 FUEL & $300 GRATUITY</span></p>
                <h5>Includes:</h5>
                <ul>
                    <li><i class="fas fa-check"></i> CAPTAIN</li>
                    <li><i class="fas fa-check"></i> WHISPERING ANGLE ROSE</li>
                    <li><i class="fas fa-check"></i> VAIL CAPTAIN HAT</li>
                    <li><i class="fas fa-check"></i> NAUTI-BRIDE SHIRT</li>
                </ul>
                <div class="text-center more-boats-sel">
                    <a class="nice-button-dark-blue dark-blue-button" href="32-sundancer" rel="noopener">BOOK NOW</a>
                </div>
            </div>
        </div>
        
    </div>
    </div>
    </div>
    </div>    
    </section>
    
    <section class="section nice-section about position-relative counting bach-12">
    <div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-12 text-center">
        <h2 class="big-heading">Bridal parties larger than 12 </h2>
        <h3>if your group is larger than 12 We have two options for you to choose from:</h3>
        <div class="row">
            <div class="col-md-6">
                <h4>HIGH-CAPACITY SAILBOATS</h4>
                <img class="img-fluid rounded boat-feature ls-is-cached lazyload" data-src="https://hamptonsboatrental.com/public/photos/2/79-schooner/79-schooner-feature.jpg" alt="yachthampton_boat">
            </div>
            <div class="col-md-6">
                <h4>RAFTING (TIE-UP TWO BOATS)</h4>
                <img class="img-fluid rounded boat-feature ls-is-cached lazyload" data-src="https://hamptonsboatrental.com/public/photos/2/29-SDX-OB/29-feature.jpg" alt="yachthampton_boat">
            </div>
        </div>
        <div class="text-center more-boats-12">
        <a class="nice-button-dark-blue dark-blue-button" href="large-group12" rel="noopener">Learn more</a>
        </div>
    </div>
    </div>
    </div>
    </div>    
    </section>

    
      <!-- Calculator starts !-->
    
     <section class="section about position-relative bg-gray pt-5 calculatePrice">
        <div class="container">
        <div class="row">
         <div class="col-md-6">
                    <h3 class="font-weight-bold mb-5">COST PER PERSON CALCULATOR</h3>
         <div class="">
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
             <h4>NOTES</h4>
                <p>Please arrange to book in advance our services fill up quickly during bride season.</p>
                <p>Food is not provided but please feel free to bring anything and everything to make your trip the best*</p>
          </div>
          </div>
            <div class="col-md-6">
                <div class="calc-more">
                    <h4>OTHER OFFERS</h4>
                    <ul>
                        <li>PHOTOSHOOT PROPS</li>
                        <li>COMPLIMENTARY<br>CONCIERGE SERVICE </li>
                        <li>VIP BACHELORETTE<br>PARTY PACKAGE </li>
                    </ul>
                </div>
            </div>
        </div></div>
    </section>
    
       <!-- Calculator ends !-->
    
    <section class="section nice-section about position-relative counting bach-zz">
    <div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="big-heading">A CUSTOMIZED CELEBRATION</h2>
                    <p>Every Bachelorette Party Is Different So We Invite You To Customize Your Afternoon With Us; From Partying Out On The Ocean To Historic Excursions, Wining And Dining To Swimming And Cruising – This Is All About Celebrating A Summer Of Friendship And Love.</p>
                </div>
                <div class="col-md-6">
                    <img src="/public/frontend/images/b1.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/public/frontend/images/b2.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="big-heading">A beautiful day</h2>
                    <p>The Coastline Of The Hamptons Boasts A Myriad Of Glitzy Beaches, Secret Coves, And Stunning Sunbathing Spots. Our Beautiful Boat Rental Options Can Charter You To Your Choice Of Opulent Stops, Making It A Summer Day You Are Sure To Remember.</p>
                    <p>We Select Only The Best Captains For Our Hamptons Boat Charters To Ensure You Get Shown To The Scenic Best VIP Spots.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="big-heading">CHAMPAGNE & ROSE MEMORIES</h2>
                    <p>Imagine A Bachelorette Party Bonding, (Without Outside Distractions) With Your Favorite Friends, Lounging On Deck, Cracking Open The Pink Champagne, And Rose’ And Sailing To The Secluded Shores Of Shelter Island For Private Swimming And Exploring The Untouched Coves. You Can Be Sure That This Will Be A Weekend To Remember….</p>
                </div>
                <div class="col-md-6">
                    <img src="/public/frontend/images/b3.jpg" alt="">
                </div>
            </div>
        </div>
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
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/templates/bachelorette-party.blade.php ENDPATH**/ ?>
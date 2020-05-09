<!-- footer Start -->
<footer class="footer section footer-top">

    @if(isset($contact_form) && $contact_form != null)

    <div class="site-section pb-2 contact-box">
        <div class="container mb-2">
            <?php if(Request::segment(1) == "" || Request::segment(1) == "/"){ ?>
            <!--Home Page Form-->
            <!--<div class="row justify-content-center mb-2 homeContactBox">-->
            <!--    <div class="col-md-9 mb-2 mb-lg-2">-->
            <!--        <div class="row">-->
            <!--            <div class="col-md-12">-->
            <!--                <h2 class="font-weight-bold text-uppercase text-black text-center contact-title" data-aos="flip-up" data-aos-delay="300">{{ $contact_form->title }}</h2>-->
            <!--                    <p class="font-weight-light text-uppercase sub-title text-black text-center mb-3">Please fill in the required fields</p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <form method="post" action="{{ url('/send-email')}}" name="general_form">-->
                        <?php /* @include('admin.includes.messages') */ ?>
                        
            <!--                @foreach (['error', 'warning', 'success', 'info'] as $msg)-->
            <!--                  @if(Session::has('alert-' . $msg))-->
            <!--                  <div class="flash-message">-->
            <!--                <p>-->
            <!--                 {{ Session::get('alert-' . $msg) }}-->
            <!--                </p>-->
            <!--                  </div> -->
            <!--                  @endif-->
            <!--                @endforeach-->
                          <!-- end .flash-message --> 
            <!--            @csrf-->
            <!--            <div class="p-5 bg-gray fmr" id="builder"></div>-->
            <!--            <input type="hidden" name="pagename" value="<?php if(isset($dest->page_name)){ echo $page->page_name; } else if(isset($page->page_name)){ echo $page->page_name; } else echo Request::segment(1) ?>">-->
                        <!-- <button type="submit">New Submit</button> -->
            <!--        </form>-->
            <!--    </div>-->

                <!--<div class="col-md-3 mb-2 mb-lg-2 quickLinksBox">-->
                <!--    <p class="font-weight-bold text-uppercase text-black text-left mb-3 quick-title" data-aos="flip-up" data-aos-delay="300">Quick Links</p>-->

                <!--    <div class="quickLinks">-->
                <!--        <p>-->
                <!--            <a href="bachelorette-party" target="_blank">-->
                <!--                Bachelorette Parties <i class="fa fa-arrow-circle-right"></i>-->
                <!--            </a>-->
                <!--        </p>-->
                <!--        <p>-->
                <!--            <a href="large-group12" target="_blank">-->
                <!--                Large Group (12 or More) <i class="fa fa-arrow-circle-right"></i>-->
                <!--            </a>-->
                <!--        </p>-->
                <!--        <p>-->
                <!--            <a href="bachelor-parties" target="_blank">-->
                <!--                Bachelor Parties <i class="fa fa-arrow-circle-right"></i>-->
                <!--            </a>-->
                <!--        </p>-->
                <!--        <p>-->
                <!--            <a href="#" target="_blank">-->
                <!--                Quickpay Here <i class="fa fa-arrow-circle-right"></i>-->
                <!--            </a>-->
                <!--        </p>-->
                <!--    </div>-->

                    
                <!--</div>-->
            <!--</div>-->
             <div class="row justify-content-center mb-2">
                <div class="col-md-9">
                    <div class="col-md-12 col-lg-12 mb-2 mb-lg-2">
                        <h2 class="font-weight-light text-black text-center mb-3 contact-title" data-aos="flip-up" data-aos-delay="300">{{ $contact_form->title }}</h2>
                        <form method="post" action="{{ url('/send-email')}}" name="general_form">
                            
                            <?php /* @include('admin.includes.messages') */ ?>
                            
                                @foreach (['error', 'warning', 'success', 'info'] as $msg)
                                  @if(Session::has('alert-' . $msg))
                                  <div class="flash-message">
                                <p>
                                 {{ Session::get('alert-' . $msg) }}
                                </p>
                                  </div> 
                                  @endif
                                @endforeach
                              <!-- end .flash-message --> 
                            @csrf
                            <div class="p-5 bg-gray fmr" id="builder"></div>
                            <input type="hidden" name="pagename" value="<?php if(isset($dest->page_name)){ echo $page->page_name; } else if(isset($page->page_name)){ echo $page->page_name; } else echo Request::segment(1) ?>">
                            <!-- <button type="submit">New Submit</button> -->
                        </form>
                    </div>
                </div>
            </div>
            <?php } else { ?>

            <!--Other Page Form-->
            <div class="row justify-content-center mb-2">
                <div class="col-md-9">
                    <div class="col-md-12 col-lg-12 mb-2 mb-lg-2">
                        <h2 class="font-weight-light text-black text-center mb-3 contact-title" data-aos="flip-up" data-aos-delay="300">{{ $contact_form->title }}</h2>
                        <form method="post" action="{{ url('/send-email')}}" name="general_form">
                            <?php /* @include('admin.includes.messages') */ ?>
                            
                                @foreach (['error', 'warning', 'success', 'info'] as $msg)
                                  @if(Session::has('alert-' . $msg))
                                  <div class="flash-message">
                                <p>
                                 {{ Session::get('alert-' . $msg) }}
                                </p>
                                  </div> 
                                  @endif
                                @endforeach
                              <!-- end .flash-message --> 
                            @csrf
                            <div class="p-5 bg-gray fmr" id="builder"></div>
                            <input type="hidden" name="pagename" value="<?php if(isset($dest->page_name)){ echo $page->page_name; } else if(isset($page->page_name)){ echo $page->page_name; } else echo Request::segment(1) ?>">
                            <!-- <button type="submit">New Submit</button> -->
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    @endif
    
    <section class="about position-relative pt-5 cms-main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget footerLogoBox">
                      <div class="footerlogo">  <!-- photos/200226061000.png -->
                      <a href="/"><img class="img-responsive lazyload" data-src="../photos/footer-logo.jpg" src="../photos/footer-logo.jpg" alt="yachthampton-footer-logo"/></a>
                      </div> 
                      <div class="sociallink-box">
                      <ul class="cms-addres-list">
                        <li>
                            <div class="media"> 
                                <div class="media-left"> 
                                    <i class="fa fa-map-marker"></i>
                                </div> 
                                <div class="media-body"> 
                            <p>51 Division St. Unit 201<br> Sag Harbor, NY 11963</p>
                                </div> 
                            </div>
                        </li> 

                      </ul></div>
                     
                    </div> </div>
                
                <!--
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget">
                        
                        <h4 class="footer-header mb-2">Quick Links</h4>
                        <ul class="list-unstyled footer-menu lh-35">
                                        <li><a href="booking" target="_blank">Our Efficient Process</a></li>
                                        <li><a href="hamptons-blog" target="_blank">Blog</a></li>
                                        <li><a href="things-to-do-in-the-hamptons" target="_blank">Hamptons Things-to-Do</a></li>
                                        <li><a href="bachelorette-party" target="_blank">Bachelorette Party</a></li>
                                        <li><a href="bachelor-parties" target="_blank">Bachelor Party</a></li>
                                        <li><a href="large-group12" target="_blank">Large Groups >12</a></li>
                                        <li><a href="cancellation-weather-policy" target="_blank">Cancellation/Weather Policy</a></li>
                                        <li><a href="gift-certificates">Gift Certificate</a></li>
                                        <li><a href="pay">Make a Payment</a></li>
                                        
                        </ul>
                    </div>
                </div>
                
                 -->
                 
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget">
                        <h4 class="footer-header mb-2">FAQ/Requests</h4>
                        <!-- <div class="logo mb-2">
                            <h3 class="footer-header">Yacht Hampton</h3>
                        </div>
                        <h6><a href="mailto:captain@hamptonsboatrental.com">captain@hamptonsboatrental.com</a></h6>
                        <span class="text-color h6"><a href="tel:+18004172027">CALL: +{{ $site_settings['phone'] }}</a></span><br>
                        <span class="text-color h6"> <a href="sms:+16314310463">TEXT ONLY: +1-631-431-0463</a></span> -->
                          <ul class="list-unstyled footer-menu lh-35 mt-2">
                                    <!-- <li><a href="kokomos-restaurant" target="_blank">VIP Experience at Kokomos</a></li> -->
                                    <!--<li><a href="http://www.sunsetbeachli.com/" target="_blank">Sunset Beach Shelter Island</a></li>-->
                                    <li><a href="faq-yachthampton" target="_blank">FAQ</a></li>
                                    <li><a href="overnight-yacht-charter-request" target="_blank">Overnight Yacht Charter Request </a></li>
                                    <li><a href="hamptons-event-yacht-request" target="_blank">Hamptons Event Yacht Request</a></li>
                                    <li><a href="bachelorette-parties" target="_blank">Hamptons Bachelorette Parties</a></li>
                                    <li><a href="ready-to-book" target="_blank">100% Ready-to-Book Request</a></li>
                        </ul>
<!-- 
                        <div class="sociallink-box">
                            <h4 class="text-center footer-header">Follow Yacht Hampton</h4>
                            <ul class="social-list-cms text-center">
                                <li>
                                    <a href="https://www.facebook.com/yachthampton" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>    
                                </li>    
                                <li>
                                    <a href="https://www.instagram.com/yachthampton" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>    
                                </li>
                                <li>
                                    <a href="https://www.tripadvisor.com/Profile/yachthamptoncharters" target="_blank">
                                        <i class="fa fa-tripadvisor"></i>
                                    </a>    
                                </li>
                            </ul>    
                        </div>  -->  
                    </div>
                </div>
                
                    <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget">
                     <h4 class="footer-header mb-2">Contacts</h4>
                             <div class="widget footerLogoBox">
                     
                   <ul class="list-unstyled footer-menu lh-35 mt-2">
                                    <!-- <li><a href="kokomos-restaurant" target="_blank">VIP Experience at Kokomos</a></li> -->
                                    <!--<li><a href="http://www.sunsetbeachli.com/" target="_blank">Sunset Beach Shelter Island</a></li>-->
                                  
                                    <li><a href="contact-us" target="_blank">Contact Us</a></li>
                                    
                        </ul>
                      <ul class="cms-addres-list">
                       
                        <li>
                            <div class="media"> 
                                <div class="media-left"> 
                                    <a href="mailto:captain@hamptonsboatrental.com"> 
                                        <i class="fa fa-envelope"></i>
                                    </a> 
                                </div> 
                                <div class="media-body"> 
                                        <a href="mailto:captain@hamptonsboatrental.com">captain@hamptonsboatrental.com</a>
                                </div> 
                            </div>
                        </li>
                        <li>
                            <div class="media"> 
                                <div class="media-left"> 
                                    <a href="sms:+16314310463"> 
                                        <i class="fa fa-comments"></i>
                                    </a> 
                                </div> 
                                <div class="media-body"> 
                                        <a href="sms:+16312010193">Click to Text: +1-631-201-0193</a>
                                </div> 
                            </div>
                        </li>
                        <li>
                            <div class="media"> 
                                <div class="media-left"> 
                                    <a href="tel:+18004172027"> 
                                        <i class="fa fa-phone"></i>
                                    </a> 
                                </div> 
                                <div class="media-body desktopItem"> 
                                    <a href="tel:+18004172027">Click to Call: +1-800-417-2027</a>
                                </div> 
                            </div>
                        </li>  

                      </ul>
                     </div>
                     <!-- <div class="sociallink-box">
                           <!-- <h4 class="footer-header text-center">Check Out The Fun</h4> -->
                            <!-- <ul class="social-list-cms">
                                <li>
                                    <a href="https://www.facebook.com/yachthampton" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>    
                                </li>    
                                <li>
                                    <a href="https://www.instagram.com/yachthampton" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>    
                                </li>
                                <li>
                                    <a href="https://www.tripadvisor.com/Profile/yachthamptoncharters" target="_blank">
                                        <i class="fa fa-tripadvisor"></i>
                                    </a>    
                                </li>
                            </ul>   </div>   -->
                        </div>
                          </div> </div>
            </div>
        </div>
    </section>
     <!-- <section class="position-relative">
    <div class="container">
          <div class="footer-btm pt-2">
        </div>
    </div>
    </section> -->
 <section class="position-relative bottom-footer header-top">
    <div class="container">
            <div class="row pt-4 text-center">
                <div class="col-lg-12 text-white">
                    <div class="copyright">
                         
                       
                          <ul class="social-list-cms">
                                <li>
                                    <a href="https://www.facebook.com/yachthampton" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>    
                                </li>    
                                <li>
                                    <a href="https://www.instagram.com/yachthampton" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>    
                                </li>
                                <li>
                                    <a href="https://www.tripadvisor.com/Profile/yachthamptoncharters" target="_blank">
                                        <i class="fa fa-tripadvisor"></i>
                                    </a>    
                                </li>
                            </ul> 
                          <div class="row mb-2"><div class="col-12 copytext text-center">
                        2020 &copy; Copyright <a href="value" target="_blank" class="text-white">Reserved</a> to <a class="text-white" href="{{ url('/') }}">Yacht Hampton</a> <a class="text-white" href="https://yachthampton.com/login" target="_blank">by</a> <a class="text-white" href="https://hamptonsboatrental.com" target="_blank">Hamptons Boat Rental</a>
                       </div></div>  
                         <!--<div class="row mb-2"><div class="col-12 text-center"><a href="https://hamptonsboatrental.com" target="_blank"><img data-src="../photos/Hamptons-Final-Logo-1.png" src="../photos/Hamptons-Final-Logo-1.png" class="lazyload hamptons-logo"></a></div></div>-->
                     
                        
                    </div>
                   
                           
                </div>
                <!-- <div class="col-lg-6 text-lg-right">
                    <ul class="list-inline footer-socials">
                        <li class="list-inline-item"><a href="{{ $site_settings['sl_fb'] }}" target="_blank"><i class="fab fa-facebook mr-2"></i>Facebook</a></li>
                        <li class="list-inline-item"><a href="{{ $site_settings['sl_twitter'] }}" target="_blank"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
                        <li class="list-inline-item"><a href="{{ $site_settings['sl_ta'] }}"><i class="fab fa-tripadvisor mr-2"></i>TripAdvisor</a></li>
                    </ul>
                </div> -->
            </div>
        
    </div>
    </section>
     <!--<div class="row"><div class="col-12 text-center"><small> <a href="sitemap" target="_blank" class="text-color sitemap">Sitemap</a></small></div></div>   -->
    <div class="back-top">
    <a id="back-to-top" href="#" class="btn btn-light btn-round-full back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
</div>
</footer>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- <script src="https://code.jquery.com/jquery.min.js"></script> -->
<!-- <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
<style>
.cms-homeslider .owl-carousel .owl-item img,
.cms-bacheloree .owl-carousel .owl-item img{-o-object-fit:cover;object-fit:cover;-o-object-position:center center;object-position:center center;}
.owl-carousel {
  background: url("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif") no-repeat center center;
}

.owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: -40px;
    position: relative;
}
.owl-theme .owl-dots .owl-dot span {
    width: 20px;
    height: 3px;
    margin: 0px 3px;
    background: #fff;
    display: block;
    opacity: 0.6;
    -webkit-backface-visibility: visible;
    -webkit-transition: opacity .6s ease;
    -o-transition: opacity .6s ease;
    transition: opacity .6s ease;
    border-radius: 0;
}
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: #fff;
    opacity: 0.9;
}

.owl-dots {
    margin-top: -50px;
}

.owl-nav {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    width: 100%;
    margin: 0;
}

.owl-carousel .owl-nav button.owl-next {
    position: absolute;
    right: 40px;
    top: 50%;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    height: 50px;
}
.owl-carousel .owl-nav button.owl-prev
{
    position: absolute;
    left: 40px;
    top: 50%;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    height: 50px; 
}
.owl-carousel .owl-nav button.owl-prev span {
    display: inline-block;
    font-size: 80px;
    line-height: 50px;
}
.owl-carousel .owl-nav button.owl-next span {
    display: inline-block;
    font-size: 80px;
    line-height: 50px;
}

.owl-theme .owl-nav [class*=owl-]:hover {
    background: transparent;
    color: inherit;
    text-decoration: none;
}
button:focus {
    outline:none;
}

/* === New CSS for Slider === */
.carousel-control-next, .carousel-control-prev{
    opacity: 1;
    width: 5%;
}
.sr-only{
    clip: unset !important;
    width: 33px;
    height: 34px;
    color: #ddd;
    background: #222;
    line-height: 34px;
    font-size: 55px;
}
</style>    
<script>
  jQuery('.cmsinstaslider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    autoWidth:false,
    responsive:{
        0:{
            items:2,
             nav:false,
             dots: true
        },
        600:{
            items:3,
             nav:false,
             dots: true
        },
        1000:{
            items:5,
            nav:true,
             dots: false
        }
    }
  });
  
  jQuery('.single-product').owlCarousel({
    autoHeight: false,
    lazyLoad: true,
    items: 1,
    autoplay: true,
    animateOut: 'fadeOut',
    nav: true,
    dots: true,
    loop: true,
  });

var loader;

function loadNow(opacity) {
    if (opacity <= 0) {
        displayContent();
    } else {
        loader.style.opacity = opacity;
        window.setTimeout(function() {
            loadNow(opacity - 0.07);
        }, 80);
    }
}

function displayContent() {
    loader.style.display = 'none';
    document.getElementById('single-product').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function() {
    loader = document.getElementById('mainloder');
    loadNow(1);
});

jQuery('.back-top a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = jQuery(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

$('#navbarsExample09 ul li.dropdown').each(function(e){
    var dropdown = $(this);
    if(dropdown.find('li').hasClass('active')){
        dropdown.addClass('active');
    }
});

</script>
<script>
$(document).ready(function() {
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      dialog.show(); 
    }
});
</script>
@extends('frontend.mainframe')
@section('content')
<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting large-groups">

 <section class="page-title featured-image">
    </section>
<style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>
    <style>
.blog-item {
    border-bottom: none;    
}
.cms-boatslider {
    max-height: 700px;
    overflow: hidden;
}
.boat-header {
    background: transparent;
    color: #17B8F4;
    text-transform: uppercase;
    border-top: 2px solid #17B8F4;
    margin-top: 50px;
}
.boat-filter-section {
    border-bottom: 2px solid#1B1464;
    padding: 30px 0;
    height: 100px;
    text-transform: uppercase;
    color: #1B1464;
    font-size: 25px;
    font-family: 'Open Sans', sans-serif;
}
.boat-filter-section .container {
    max-width: 1300px;
}
.filterBtns span {
    font-weight: 400;
    float: left;
    font-size: 22px;
}
.boat-filter-section .filterOpt {
    border: none;
    font-size: 22px;
    font-weight: 100;
    color: #1B1464;
    text-transform: unset;
    font-family: 'Montserrat', sans-serif;
    padding: 0 10px;
}
.boat-filter-section .filterOpt:hover {
    background: #fff;
    color: #1B1464;
}
.boat-filter-section .filterOpt.activate {
    background: #fff;
    color: #1B1464;
}
.boat_it {
    margin-top: 0;
}
.boat-no {
    position: absolute;
    top: 15px;
    left: 15px;
    border: 1px solid #1B1464;
    background: #fff;
    font-size: 20px;
    color: #1B1464;
    border-radius: 45px;
    width: 45px;
    text-align: center;
    transition: all 0.5s ease;
    height: 45px;
    line-height: 45px;
}
a:hover .boat-no {
    background: #1B1464;
    color: #fff;
}
.boat-heading {
    color: #1B1464;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
        font-size: 22px;
    line-height: 28px;
    margin-top: 15px;
    position: relative;
}
.boat-heading a {
    color: #1B1464;
    display: block;
}
.boat-heading a .place {
    position: absolute;
    top: -20px;
    right: 0;
    font-size: 16px;
    letter-spacing: 0;
    color: #FCBA63;
    font-weight: 400;
}
.boat-pricing {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    font-size: 16px;
    color: #1B1464;
    line-height: 26px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.boat-pricing strong {
    font-size: 20px;
    font-weight: 400;
}
.boat-info {
    letter-spacing: 1px;
    font-weight: 400;
    font-size: 16px;
    color: #1B1464;
    text-transform: uppercase;
    text-align: center;
}
.ourboatbox:hover a:after {
    display: none !important;
}
.learn-more {
        border-radius: 50px;
    text-transform: uppercase;
    color: #15b8f3;
    font-weight: 400;
    letter-spacing: 2px;
    border: 1px solid #15b8f3;
    text-align: center;
    height: 35px;
    line-height: 35px;
    text-decoration: none;
    padding: 0 20px;
    transition: all 250ms ease-out;
    font-size: 13px;
    float: right;
    vertical-align: middle;
    display: inline-block;
    margin-top: -3px;
}
.learn-more:hover {
    background: #15b8f3;
    color: #fff;
}
.section.blog-wrap { 
    padding-left: 15px;
    padding-right: 15px;
}
.boat-info > .mr-3 {
    white-space: nowrap;
}
        .boat-info > .mr-3:first-of-type {
            float: left;
        }
        .boat-info > .mr-3:last-of-type {
            float: right;
            margin-right: 0 !important;
        }
@media  only screen and (max-width: 1000px) {
    .learn-more {
        clear: both;
        width: 100%;
        float: none;
        display: inline-block;
        margin-top: 20px;
    }
}
@media  only screen and (max-width: 800px) {
    .filterBtns span {
        width: 100%;
    }
    .boat-filter-section {
        height: auto;    
    }
}
</style>
<style>
    .large-groups {
        padding: 0 20px;
    }
    .large-groups .featured-image {
        margin: 0 -20px;
    }
    .large-groups .page-title:before {
        opacity: 0;
        display: none;
    }
    .large-groups .disclaimer {
        color: #000000;
        font-size: 20px;
        text-align: center;
        margin-top: 50px;
    }
    .large-groups form {
        max-width: 800px;
        margin: auto;
    }
    .large-groups .more-boats {
        padding-bottom: 70px;
    }
    .large-groups .boat-header {
        margin-top: 0;
    }
    .large-groups .section {
        padding: 0;
    }
    .tie-up-info {
        font-size: 20px;
    }
    .tie-up-info .p2 {
        text-transform: uppercase;
        color: #1B1464;
        font-size: 27px;
        letter-spacing: 2px;
        text-align: center;
            font-family: 'Montserrat', sans-serif;
        padding-top: 50px;
        font-weight: 600;
    }
    .tie-up-info .p3 {
        text-transform: uppercase;
        text-align: center;
        font-size: 23px;
        letter-spacing: 3px;
        color: #17B8F4;
        padding-top: 30px;
            font-family: 'Montserrat', sans-serif;
    }
    .group-intro h1 {
        color: #1B1464;
        font-size: 55px;
        padding-top: 20px;
        padding-bottom: 50px;
        letter-spacing: 2px;
    }
    .group-intro h1 span {
        display: inline-block;
        font-size: 30px;
        margin-left: 20px;
        vertical-align: middle;
    }
    .group-intro h2 {
        color: #17B8F4;
        font-size: 30px;
        text-align: center;
        text-transform: uppercase;
    }
    .group-intro ul {
        text-align: center;
        padding-top: 40px;
        padding-bottom: 50px;
    }
    .group-intro ul li {
        display: inline-block;
        padding: 20px 30px;
        color: #1B1464;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: 1px;
        font-size: 22px;
    }
    .no span {
        display: inline-block;
        width: 100px;
        height: 100px;
        line-height: 100px;
        border: 1px solid #1B1464;
        border-radius: 100px;
        font-size: 40px;
        font-weight: 100;
        color: #1B1464;
        margin-bottom: 20px;
    }
    @media  only screen and (max-width: 800px) {
        .group-intro h1 {
            font-size: 40px;
        }
        .group-intro h2 {
            font-size: 25px;
        }
    }
</style>

<section class="position-relative pb-4 pt-4 group-intro">
    <div class="containers">
        <h1 class="font-tenor">LARGE PARTIES <span><i class="fas fa-user-friends"></i> 12+ PEOPLE</span></h1>
        <h2 class="font-tenor">WE OFFER three options to take a group more than 12 </h2>
        <ul>
            <li><div class="no"><span>1</span></div><div>HIGH-CAPACITY SAILBOATS</div></li>
            <li><div class="no"><span>2</span></div><div>EVENT YACHTS</div></li>
            <li><div class="no"><span>3</span></div><div>RAFTING (TIE-UP TWO BOATS)</div></li>
        </ul>
    </div>
</section>

 <section class="section blog-wrap">
        <div class="containers mb-5 pt-3 pb-3 boat-header">
            <p class="mb-1 mt-2 font-tenor">1. HIGH-CAPACITY Sailboats </p>
        </div>
      
        <!-- 1st Boat !-->
        <div class="containers">
            <div class="rows">

                <div class="col-lg-6 col-md-6 mb-5">
<div class="blog-item">
<div class="ourboatbox">
<a href="https://hamptonsboatrental.com/75-schooner" target="_blank">
<img class="img-fluid rounded boat-feature ls-is-cached lazyloaded" data-src="https://hamptonsboatrental.com/public/photos/2/75-schooner/157946315943129539.jpg" src="https://hamptonsboatrental.com/public/photos/2/75-schooner/157946315943129539.jpg" alt="yachthampton_boat">
<span class="boat-no">26</span>
</a>
</div>
<div class="row">
<div class="col-lg-12">
</div>
</div>
<div class="blog-item-content bg-white p-1 boat_it">
<h3 class="boat-heading mb-4 pt-2">
<a href="75-schooner" target="_blank">75' Schooner (41 Guest Capacity) <span class="place"><i class="fas fa-map-marker-alt"></i> SAG HARBOR </span></a>
</h3>
<div class="mb-4 boat-pricing">
<strong>From $4,000 </strong> + Fuel &amp; Gratuity <a href="75-schooner" class="learn-more">Learn more</a>
</div>
<div class="mb-4 boat-info">
<span class="mr-3">
<i class="fas fa-ruler-horizontal"></i> 75 FEET
</span> <span class="mr-3">
<i class="fas fa-user-friends"></i> 41 PEOPLE
</span> <span class="mr-3">
<i class="fa fa-sun-o"></i> Day Trips
</span>
</div>


</div>
</div>
</div>
                
                <div class="col-lg-6 col-md-6 mb-5">
<div class="blog-item">
<div class="ourboatbox">
<a href="https://hamptonsboatrental.com/79-schooner" target="_blank">
<img class="img-fluid rounded boat-feature ls-is-cached lazyloaded" data-src="https://hamptonsboatrental.com/public/photos/2/79-schooner/79-schooner-feature.jpg" src="https://hamptonsboatrental.com/public/photos/2/79-schooner/79-schooner-feature.jpg" alt="yachthampton_boat">
<span class="boat-no">27</span>
</a>
</div>
<div class="row">
<div class="col-lg-12">
</div>
</div>
<div class="blog-item-content bg-white p-1 boat_it">
<h3 class="boat-heading mb-4 pt-2">
<a href="79-schooner" target="_blank">79' Sailboat Schooner (24 Guest Capacity) <span class="place"><i class="fas fa-map-marker-alt"></i> SAG HARBOR </span></a>
</h3>
<div class="mb-4 boat-pricing">
<strong>From $3,400 </strong> + Fuel &amp; Gratuity <a href="79-schooner" class="learn-more">Learn more</a>
</div>
<div class="mb-4 boat-info">
<span class="mr-3">
<i class="fas fa-ruler-horizontal"></i> 79 FEET
</span> <span class="mr-3">
<i class="fas fa-user-friends"></i> 24 PEOPLE
</span> <span class="mr-3">
<i class="fa fa-sun-o"></i> Day Trips
</span>
</div>

</div>
</div>
</div>
            </div>
     </div>
</section>
                
 <section class="section blog-wrap">
        <div class="containers mb-5 pt-3 pb-3 boat-header">
            <p class="mb-1 mt-2 font-tenor">2. Event yachts</p>
        </div>
      
        <!-- 1st Boat !-->
        <div class="containers">
            <div class="rows">
                
                <div class="col-lg-6 col-md-6 mb-5">
<div class="blog-item">
<div class="ourboatbox">
<a href="https://hamptonsboatrental.com/hamptons-party-yacht-85" target="_blank">
<img class="img-fluid rounded boat-feature ls-is-cached lazyloaded" data-src="https://hamptonsboatrental.com/public/photos/2/85-eventyacht/85-eventyacht-feature.jpg" src="https://hamptonsboatrental.com/public/photos/2/85-eventyacht/85-eventyacht-feature.jpg" alt="yachthampton_boat">
<span class="boat-no">28</span>
</a>
</div>
<div class="row">
<div class="col-lg-12">
</div>
</div>
<div class="blog-item-content bg-white p-1 boat_it">
<h3 class="boat-heading mb-4 pt-2">
<a href="hamptons-party-yacht-85" target="_blank">Hamptons Party Yacht 85′ <span class="place"><i class="fas fa-map-marker-alt"></i> SAG HARBOR </span></a>
</h3>
<div class="mb-4 boat-pricing">
<strong>From $9,500 </strong> + Fuel &amp; Gratuity <a href="hamptons-party-yacht-85" class="learn-more">Learn more</a>
</div>
<div class="mb-4 boat-info">
<span class="mr-3">
<i class="fas fa-ruler-horizontal"></i> 85 FEET
</span> <span class="mr-3">
<i class="fas fa-user-friends"></i> 80 PEOPLE
</span> <span class="mr-3">
<i class="fa fa-sun-o"></i> Day Trips
&amp; Overnights
</span>
</div>

</div>
</div>
</div>
                
                <div class="col-lg-6 col-md-6 mb-5">
<div class="blog-item">
<div class="ourboatbox">
<a href="https://hamptonsboatrental.com/hamptons-wedding-event-yacht" target="_blank">
<img class="img-fluid rounded boat-feature ls-is-cached lazyloaded" data-src="https://hamptonsboatrental.com/public/photos/2/122-winslow/122-winslow-feature.jpg" src="https://hamptonsboatrental.com/public/photos/2/122-winslow/122-winslow-feature.jpg" alt="yachthampton_boat">
<span class="boat-no">29</span>
</a>
</div>
<div class="row">
<div class="col-lg-12">
</div>
</div>
<div class="blog-item-content bg-white p-1 boat_it">
<h3 class="boat-heading mb-4 pt-2">
<a href="hamptons-wedding-event-yacht" target="_blank">Hamptons Wedding Event Yacht <span class="place"><i class="fas fa-map-marker-alt"></i> SAG HARBOR </span></a>
</h3>
<div class="mb-4 boat-pricing">
<strong>From $11,670 </strong> + Fuel &amp; Gratuity <a href="hamptons-wedding-event-yacht" class="learn-more">Learn more</a>
</div>
<div class="mb-4 boat-info">
<span class="mr-3">
<i class="fas fa-ruler-horizontal"></i> 122 FEET
</span> <span class="mr-3">
<i class="fas fa-user-friends"></i> 90 PEOPLE
</span> <span class="mr-3">
<i class="fa fa-sun-o"></i> Day Trips
&amp; Overnights
</span>
</div>

</div>
</div>
</div>
                        
            </div>
        </div>
    </section>

 <section class="section blog-wrap">
        <div class="containers mb-0 pt-3 pb-3 boat-header">
            <p class="mb-1 mt-2 font-tenor">3. Rafting boats (TIE-UP)</p>
        </div>
     <div class="containers mb-5 pt-3 pb-3 tie-up-info">
         <p>Booking any two of the boats in our fleet and then tying them up at your location will allow you to have a party of more than 12 guests.</p>
            <p class="p2">BEST VALUE PACKAGE</p>
            <p class="p3">We offer a Discount Package when renting the two boats below</p>
          </div>
      
       
        <!-- 1st Boat !-->
        <div class="containers">
            <div class="rows">

                <div class="col-lg-6 col-md-6 mb-5">
<div class="blog-item">
<div class="ourboatbox">
<a href="https://hamptonsboatrental.com/searay-290" target="_blank">
<img class="img-fluid rounded boat-feature ls-is-cached lazyloaded" data-src="https://hamptonsboatrental.com/public/photos/2/29-SDX-OB/29-feature.jpg" src="https://hamptonsboatrental.com/public/photos/2/29-SDX-OB/29-feature.jpg" alt="yachthampton_boat">
<span class="boat-no">1</span>
</a>
</div>
<div class="row">
<div class="col-lg-12">
</div>
</div>
<div class="blog-item-content bg-white p-1 boat_it">
<h3 class="boat-heading mb-4 pt-2">
<a href="searay-290" target="_blank">29' 2020 Sea Ray Day-Party Boat <span class="place"><i class="fas fa-map-marker-alt"></i> SAG HARBOR </span></a>
</h3>
<div class="mb-4 boat-pricing">
<strong>From $1,700 </strong> + Fuel &amp; Gratuity <a href="searay-290" class="learn-more">Learn more</a>
</div>
<div class="mb-4 boat-info">
<span class="mr-3">
 <i class="fas fa-ruler-horizontal"></i> 29 FEET
</span> <span class="mr-3">
<i class="fas fa-user-friends"></i> 12 PEOPLE
</span> <span class="mr-3">
<i class="fa fa-sun-o"></i> Day Trips
</span>
</div>

</div>
</div>
</div>
                
                <div class="col-lg-6 col-md-6 mb-5">
<div class="blog-item">
<div class="ourboatbox">
<a href="https://hamptonsboatrental.com/32-sundancer" target="_blank">
<img class="img-fluid rounded boat-feature ls-is-cached lazyloaded" data-src="https://hamptonsboatrental.com/public/photos/2/32-sundancer/sundancer-feature.jpg" src="https://hamptonsboatrental.com/public/photos/2/32-sundancer/sundancer-feature.jpg" alt="yachthampton_boat">
<span class="boat-no">2</span>
</a>
</div>
<div class="row">
<div class="col-lg-12">
</div>
</div>
<div class="blog-item-content bg-white p-1 boat_it">
<h3 class="boat-heading mb-4 pt-2">
<a href="32-sundancer" target="_blank">32' 2020 Sundancer <span class="place"><i class="fas fa-map-marker-alt"></i> SAG HARBOR </span></a>
</h3>
<div class="mb-4 boat-pricing">
<strong>From $2,100 </strong> + Fuel &amp; Gratuity <a href="32-sundancer" class="learn-more">Learn more</a>
</div>
<div class="mb-4 boat-info">
<span class="mr-3">
<i class="fas fa-ruler-horizontal"></i> 32 FEET
</span> <span class="mr-3">
<i class="fas fa-user-friends"></i> 12 PEOPLE
</span> <span class="mr-3">

<i class="fa fa-sun-o"></i> Day Trips
&amp; Overnights
</span>
</div>

</div>
</div>
</div>
                
            
                
            
            </div>
        </div>
        
        <div class="text-center more-boats">
            <a class="nice-button-dark-blue dark-blue-button" href="our-boats" rel="noopener">See all available boats</a>
        </div>
        
        <div class="site-section pb-2 contact-box">
        <div class="mb-2">

            <div class="row justify-content-center mb-2">
                <div class="col-md-9">
                    <div class="col-md-12 col-lg-12 mb-2 mb-lg-2">
                        <div class="row">
<div class="col-md-12">
<h2 class="font-weight-bold text-uppercase text-center contact-title aos-init aos-animate" data-aos="flip-up" data-aos-delay="300">Let’s Escape For The Day!</h2>
<p class="font-weight-light text-uppercase sub-title text-black text-center mb-3">Please fill in the required fields</p>
</div>
</div>
                        <form method="post" action="https://hamptonsboatrental.com/send-email" name="general_form">
        @foreach (['error', 'warning', 'success', 'info'] as $msg)
                              @if(Session::has('alert-' . $msg))
                              <div class="flash-message">
                            <p>
                             {{ Session::get('alert-' . $msg) }}
                            </p>
                              </div> 
                              @endif
                            @endforeach
        <input type="hidden" name="_token" value="fiL8TRXglVgJZeW3Hv0GyDsb0I0INLGNRlHypUgt">
        <div class="p-5 bg-gray fmr" id="builder">
            <div ref="component" class="formio-component formio-component-form  formio-component-label-hidden" id="e8xdf18">
                <div novalidate="" ref="webform" class="formio-form">
                    <div ref="component" class="row formio-component formio-component-columns formio-component-columns  formio-component-label-hidden" id="eq6pw3">

                        <div ref="column-eq6pw3" class="col-md-6
    col-md-offset-0
    col-md-push-0
    col-md-pull-0">
                            <div ref="component" class="form-group has-feedback formio-component formio-component-textfield formio-component-Full Name" id="en77qr7">

                                <label class="col-form-label">
                                    Full Name

                                </label>

                                <div ref="element">

                                    <input value="" tabindex="name" lang="en" class="form-control" type="text" name="data[Full Name]" ref="input">

                                </div>

                                <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                            </div>

                        </div>

                        <div ref="column-eq6pw3" class="col-md-6
    col-md-offset-0
    col-md-push-0
    col-md-pull-0">
                            <div ref="component" class="form-group has-feedback formio-component formio-component-phoneNumber formio-component-Phone" id="exstxt">

                                <label class="col-form-label">
                                    Cellphone

                                    <i class="fa fa-question-circle text-muted" ref="tooltip"></i>

                                </label>

                                <div ref="element">

                                    <input value="" tabindex="Cellphone" lang="en" class="form-control" type="text" name="data[Phone]" ref="input" placeholder="(___) ___-____">

                                </div>

                                <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                            </div>

                        </div>

                        <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                    </div>
                    <div ref="component" class="form-group has-feedback formio-component formio-component-email formio-component-email  required" id="en5fsk">

                        <label class="col-form-label  field-required">
                            Email

                            <i class="fa fa-question-circle text-muted" ref="tooltip"></i>

                        </label>

                        <div ref="element">

                            <input value="" lang="en" class="form-control" type="email" name="data[email]" ref="input" required>

                        </div>

                        <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                    </div>
                    <div ref="component" class="row formio-component formio-component-columns formio-component-columns1  formio-component-label-hidden" id="ehd72t">

                        <div ref="column-ehd72t" class="col-md-6
    col-md-offset-0
    col-md-push-0
    col-md-pull-0">
                            <div ref="component" class="form-group has-feedback formio-component formio-component-datetime formio-component-Preferred Date &amp; Time" id="eymk0hb">

                                <label class="col-form-label">
                                    Date

                                </label>

                                <div ref="element">
                                    <div class="input-group">

                                        <input value="" lang="en" class="form-control flatpickr-input" type="hidden" name="data[Preferred Date &amp; Time]" ref="input" placeholder="MM-dd-yyyy">
                                        <input class="form-control form-control input" placeholder="MM-dd-yyyy" tabindex="0" type="text">

                                        <div ref="suffix" class="input-group-append">
                                            <span class="input-group-text">
    <i style="" class="fa fa-calendar" ref="icon"></i>
  </span>
                                        </div>

                                    </div>

                                </div>

                                <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                            </div>

                        </div>

                        <div ref="column-ehd72t" class="col-md-6
    col-md-offset-0
    col-md-push-0
    col-md-pull-0">
                            <div ref="component" class="form-group has-feedback formio-component formio-component-textfield formio-component-Preferred Time" id="e3g0oqu">

                                <label class="col-form-label">
                                    Preferred Times

                                </label>

                                <div ref="element">

                                    <input value="" tabindex="times_requested" placeholder="More options the better" lang="en" class="form-control" type="text" name="data[Preferred Time]" ref="input">

                                </div>

                                <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                            </div>

                        </div>

                        <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                    </div>
                    <div ref="component" class="form-group has-feedback formio-component formio-component-select formio-component-Boat Choice  required" id="exfy36h">

                        <label class="col-form-label  field-required">
                            Boat Choice

                        </label>

                        <div class="choices form-group formio-choices" data-type="select-one" dir="ltr" tabindex="-1" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                            <div class="form-control ui fluid selection dropdown" tabindex="0">
                                <select lang="en" class="form-control choices__input" type="text" name="data[Boat Choice]" ref="selectContainer" dir="ltr" tabindex="-1" data-choice="active" required>
                                    <option value="" disabled selected>Please select</option>
                                    <option value="29&amp;#039; 2020 Sea Ray">1. 29' 2020 Sea Ray</option>
                                    <option value="32&amp;#039; Sundancer">2. 32' Sundance</option>
                                    <option value="43&amp;#039; Azimut" >3. 43' Azimut</option>
                                    <option value="38&amp;#039; Catamaran" >4. 38' Catamaran</option>
                                    <option value="37&amp;#039; Coupe Cruiser" >5. 37' Coupe Cruiser</option>
                                    <option value="40&amp;#039; Azimut Atlantis Verve" >6. 40' Azimut Atlantis Verve</option>
                                    <option value="38&amp;#039; Riviera" >7. 38' Riviera</option>
                                    <option value="50&amp;#039; Jefferson Motor Yacht" >8. 50' Jefferson Motor Yacht</option>
                                    <option value="60&amp;#039; Azimut Flybridge" >9. 60' Azimut Flybridge</option>
                                    <option value="49&amp;#039; Beneteau" >10. 49' Beneteau</option>
                                    <option value="58&amp;#039; Sunseeker Predator" >11. 58' Sunseeker Predator</option>
                                    <option value="32&amp;#039; Monterey" >12. 32' Monterey</option>
                                    <option value="75&amp;#039; Schooner" >13. 75' Schooner (41 Guest Capacity)</option>
                                    <option value="79&amp;#039; Sailboat Schooner" >14. 79' Sailboat Schooner</option>
                                    <option value="85′ Event Yacht" >15. 85′ Event Yacht</option>
                                    <option value="122&amp;#039; Winslow" >16. 122' Winslow (90 Guest Capacity)</option>
                                    <option value="57&amp;#039; Beneteau" >17. 57' Beneteau (12 Guest Capacity)</option>
                                    <option value="80&amp;#039; 1930 Schooner" >18. 80' 1930 Schooner</option>
                                    <option value="75&amp;#039; Schooner" >19. 75' Schooner (41 Guest Capacity)</option>
                                    <option value="79&amp;#039; Sailboat Schooner" >20. 79' Sailboat Schooner</option>
                                    <option value="73&amp;#039; Ferretti" >21. 73' Ferretti</option>
                                    <option value="62&amp;#039; Pershing" >22. 62' Pershing</option>
                                    <option value="84&amp;#039; Azimut" >23. 84' Azimut</option>
                                    <option value="72′ Princess" >24. 72′ Princess (Weekdays Only)</option>
                                    <option value="68′ Sunseeker" >25. 68′ Sunseeker (Weekday Specials)</option>
                                    <option value="75&amp;#039; Sunseeker" >26. 75' Sunseeker</option>
                                    <option value="97′ Hargrave" >27. 97′ Hargrave</option>
                                    <option value="106&amp;#039; Lazzara" >28. 106' Lazzara (No Sunday)</option>
                                    <option value="29&amp;#039; 2020 Sea Ray" >29. 29' 2020 Sea Ray</option>
                                    <option value="38&amp;#039; Riviera" >30. 38' Riviera</option>
                                    <option value="23′ Pearson Sailboat" >31. 23′ Pearson Sailboat</option>
                                    <option value="27′ Catalina Sailboat" >32. 27′ Catalina Sailboat</option>
                                    <option value="34′ Catalina Sailboat" >33. 34′ Catalina Sailboat</option>
                                    <option value="65&amp;#039; Sea Ray" >34. 65' Sea Ray</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div ref="component" class="form-group has-feedback formio-component formio-component-select formio-component-boatChoice2" id="e9c8jnq">

                        <label class="col-form-label">
                            Boat Choice 2

                        </label>

                        <div class="choices form-group formio-choices" data-type="select-one" dir="ltr" tabindex="-1" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                            <div class="form-control ui fluid selection dropdown" tabindex="0">
                                <select lang="en" class="form-control choices__input" type="text" name="data[boatChoice2]" ref="selectContainer" dir="ltr" tabindex="-1" data-choice="active">
                                    <option value="" disabled selected>Please select</option>
                                    <option value="29&amp;#039; 2020 Sea Ray">1. 29' 2020 Sea Ray</option>
                                    <option value="32&amp;#039; Sundancer">2. 32' Sundance</option>
                                    <option value="43&amp;#039; Azimut" >3. 43' Azimut</option>
                                    <option value="38&amp;#039; Catamaran" >4. 38' Catamaran</option>
                                    <option value="37&amp;#039; Coupe Cruiser" >5. 37' Coupe Cruiser</option>
                                    <option value="40&amp;#039; Azimut Atlantis Verve" >6. 40' Azimut Atlantis Verve</option>
                                    <option value="38&amp;#039; Riviera" >7. 38' Riviera</option>
                                    <option value="50&amp;#039; Jefferson Motor Yacht" >8. 50' Jefferson Motor Yacht</option>
                                    <option value="60&amp;#039; Azimut Flybridge" >9. 60' Azimut Flybridge</option>
                                    <option value="49&amp;#039; Beneteau" >10. 49' Beneteau</option>
                                    <option value="58&amp;#039; Sunseeker Predator" >11. 58' Sunseeker Predator</option>
                                    <option value="32&amp;#039; Monterey" >12. 32' Monterey</option>
                                    <option value="75&amp;#039; Schooner" >13. 75' Schooner (41 Guest Capacity)</option>
                                    <option value="79&amp;#039; Sailboat Schooner" >14. 79' Sailboat Schooner</option>
                                    <option value="85′ Event Yacht" >15. 85′ Event Yacht</option>
                                    <option value="122&amp;#039; Winslow" >16. 122' Winslow (90 Guest Capacity)</option>
                                    <option value="57&amp;#039; Beneteau" >17. 57' Beneteau (12 Guest Capacity)</option>
                                    <option value="80&amp;#039; 1930 Schooner" >18. 80' 1930 Schooner</option>
                                    <option value="75&amp;#039; Schooner" >19. 75' Schooner (41 Guest Capacity)</option>
                                    <option value="79&amp;#039; Sailboat Schooner" >20. 79' Sailboat Schooner</option>
                                    <option value="73&amp;#039; Ferretti" >21. 73' Ferretti</option>
                                    <option value="62&amp;#039; Pershing" >22. 62' Pershing</option>
                                    <option value="84&amp;#039; Azimut" >23. 84' Azimut</option>
                                    <option value="72′ Princess" >24. 72′ Princess (Weekdays Only)</option>
                                    <option value="68′ Sunseeker" >25. 68′ Sunseeker (Weekday Specials)</option>
                                    <option value="75&amp;#039; Sunseeker" >26. 75' Sunseeker</option>
                                    <option value="97′ Hargrave" >27. 97′ Hargrave</option>
                                    <option value="106&amp;#039; Lazzara" >28. 106' Lazzara (No Sunday)</option>
                                    <option value="29&amp;#039; 2020 Sea Ray" >29. 29' 2020 Sea Ray</option>
                                    <option value="38&amp;#039; Riviera" >30. 38' Riviera</option>
                                    <option value="23′ Pearson Sailboat" >31. 23′ Pearson Sailboat</option>
                                    <option value="27′ Catalina Sailboat" >32. 27′ Catalina Sailboat</option>
                                    <option value="34′ Catalina Sailboat" >33. 34′ Catalina Sailboat</option>
                                    <option value="65&amp;#039; Sea Ray" >34. 65' Sea Ray</option>
                                </select>
                            </div>
                    </div>
                        </div>
                    <div ref="component" class="form-group has-feedback formio-component formio-component-select formio-component-boatChoice3" id="e2yjvbf">

                        <label class="col-form-label">
                            Boat Choice 3

                        </label>

                        <div class="choices form-group formio-choices" data-type="select-one" dir="ltr" tabindex="-1" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                            <div class="form-control ui fluid selection dropdown" tabindex="0">
                                <select lang="en" class="form-control choices__input" type="text" name="data[boatChoice3]" ref="selectContainer" dir="ltr" tabindex="-1" data-choice="active">
                                    <option value="" disabled selected>Please select</option>
                                    <option value="29&amp;#039; 2020 Sea Ray">1. 29' 2020 Sea Ray</option>
                                    <option value="32&amp;#039; Sundancer">2. 32' Sundance</option>
                                    <option value="43&amp;#039; Azimut" >3. 43' Azimut</option>
                                    <option value="38&amp;#039; Catamaran" >4. 38' Catamaran</option>
                                    <option value="37&amp;#039; Coupe Cruiser" >5. 37' Coupe Cruiser</option>
                                    <option value="40&amp;#039; Azimut Atlantis Verve" >6. 40' Azimut Atlantis Verve</option>
                                    <option value="38&amp;#039; Riviera" >7. 38' Riviera</option>
                                    <option value="50&amp;#039; Jefferson Motor Yacht" >8. 50' Jefferson Motor Yacht</option>
                                    <option value="60&amp;#039; Azimut Flybridge" >9. 60' Azimut Flybridge</option>
                                    <option value="49&amp;#039; Beneteau" >10. 49' Beneteau</option>
                                    <option value="58&amp;#039; Sunseeker Predator" >11. 58' Sunseeker Predator</option>
                                    <option value="32&amp;#039; Monterey" >12. 32' Monterey</option>
                                    <option value="75&amp;#039; Schooner" >13. 75' Schooner (41 Guest Capacity)</option>
                                    <option value="79&amp;#039; Sailboat Schooner" >14. 79' Sailboat Schooner</option>
                                    <option value="85′ Event Yacht" >15. 85′ Event Yacht</option>
                                    <option value="122&amp;#039; Winslow" >16. 122' Winslow (90 Guest Capacity)</option>
                                    <option value="57&amp;#039; Beneteau" >17. 57' Beneteau (12 Guest Capacity)</option>
                                    <option value="80&amp;#039; 1930 Schooner" >18. 80' 1930 Schooner</option>
                                    <option value="75&amp;#039; Schooner" >19. 75' Schooner (41 Guest Capacity)</option>
                                    <option value="79&amp;#039; Sailboat Schooner" >20. 79' Sailboat Schooner</option>
                                    <option value="73&amp;#039; Ferretti" >21. 73' Ferretti</option>
                                    <option value="62&amp;#039; Pershing" >22. 62' Pershing</option>
                                    <option value="84&amp;#039; Azimut" >23. 84' Azimut</option>
                                    <option value="72′ Princess" >24. 72′ Princess (Weekdays Only)</option>
                                    <option value="68′ Sunseeker" >25. 68′ Sunseeker (Weekday Specials)</option>
                                    <option value="75&amp;#039; Sunseeker" >26. 75' Sunseeker</option>
                                    <option value="97′ Hargrave" >27. 97′ Hargrave</option>
                                    <option value="106&amp;#039; Lazzara" >28. 106' Lazzara (No Sunday)</option>
                                    <option value="29&amp;#039; 2020 Sea Ray" >29. 29' 2020 Sea Ray</option>
                                    <option value="38&amp;#039; Riviera" >30. 38' Riviera</option>
                                    <option value="23′ Pearson Sailboat" >31. 23′ Pearson Sailboat</option>
                                    <option value="27′ Catalina Sailboat" >32. 27′ Catalina Sailboat</option>
                                    <option value="34′ Catalina Sailboat" >33. 34′ Catalina Sailboat</option>
                                    <option value="65&amp;#039; Sea Ray" >34. 65' Sea Ray</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div ref="component" class="form-group has-feedback formio-component formio-component-textarea formio-component-Additional Message" id="em9kddk">

                        <label class="col-form-label">
                            Please Ask Your Questions Here...

                        </label>

                        <div ref="element">

                            <textarea rows="6" tabindex="question" placeholder="Place backup date and times here" lang="en" class="form-control" type="text" name="data[Additional Message]" ref="input"></textarea>

                        </div>

                        <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                    </div>
                    <div ref="component" class="form-group has-feedback formio-component formio-component-button formio-component-submit  form-group" id="e7ox8t9">

                        <button lang="en" class="btn btn-info btn-xs" type="submit" name="data[submit]" ref="button">

                            Submit

                        </button>
                        <div ref="buttonMessageContainer">
                            <span ref="buttonMessage" class="help-block"></span>
                        </div>

                        <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

                    </div>

                </div>

                <div class="formio-errors invalid-feedback" ref="messageContainer"></div>

            </div>
        </div>
        <input type="hidden" name="pagename" value="<?php if(isset($dest->page_name)){ echo $page->page_name; } else if(isset($page->page_name)){ echo $page->page_name; } else echo Request::segment(1) ?>">
    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
        
        <div class="container">
            <div class="row">
                <p class="disclaimer">The United States Coast Guard Has Strict Regulations For All Vessels Carrying More Than 12 Passengers And At Yacht Hampton Boat Rental, We Pride Ourselves On Our Flawless Safety And Compliance Record. As Leaders In The Hamptons Market, We Offer Two Options For Groups Larger Than 12; Boats That Have Performed The Necessary Modifications To Have A Higher Capacity Of Passengers, Or Renting Two Of Our Boats And Tying Them Together At Your Destination (The Term Is Rafting).</p>    
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
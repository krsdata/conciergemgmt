@extends('frontend.mainframe')
@section('content')
<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<style>
    .toy-name {
        padding-top: 0;
        font-weight: 400;
        font-size: 38px;
        line-height: 50px;
    }
    .toy-detail {
        font-size: 20px;
        color: rgba(0,0,0,.65);
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
    .toy-detail h2 {
        font-weight: 400;
        padding-top: 0;
        margin-top: 0 !important;
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
</style>

<div class="counting">
        <div id="content">
            <section class="position-relative boat-topname">
                <div class="container">
                    <h1 class="unit-1-heading text-color toy-name" data-aos="fade-center" data-aos-duration="1000">{{ $page->page_name }}</h1>
                </div>
                </section>
                
                
                    @if(!empty($slider))
            <!-- Header Slider Start !-->

            <section class="single-cms-loader">
                <div class="container">

                    <div id="mainloder" class="mainloder">
            <div class="subloder">
             <!-- <div class="lds-ring"><div></div><div></div><div></div><div></div></div> -->
             <img src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif" />
            </div> 
        </div>

            <div id="single-product" class="single-product owl-carousel owl-theme">
                <!-- Image loading icon -->
                @if(!empty($slider->slides))
                    <?php $first = 0; ?>
                @foreach($slider->slides as $ss)
                <?php /*
                <img class="owl-lazy" data-src="{{ $ss->image_path }}" alt="yachthampton slides" style="max-height: 750px;" / */ ?>
                 <?php $first++; ?>
                    @endforeach
                @endif
            </div>    
        <div id="myCarousel" class="carousel slide carousel-fade carousel-ajax fix-slider" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                @if(!empty($slider->slides))
                    <?php $first = 0; ?>
                    @foreach($slider->slides as $ss)
                <li data-target="myCarousel" data-slide-to="{{ $first }}" @if($first == 0){{ 'class="active"' }}@endif></li>
                            <?php $first++; ?>
                        @endforeach
                @endif
            </ol>
            <div class="carousel-inner">
                @if(!empty($slider->slides))
                    <?php $first = 0; ?>
                @foreach($slider->slides as $ss)
                <div class="carousel-item @if($first == 0){{ 'active' }}@endif">
                    <img class="d-block w-100 lazyload" data-src="{{ $ss->image_path }}" alt="yachthampton slides" style="max-height: 750px;">
                    <div class="carousel-caption d-none d-md-block mb-5">
                    </div>
                </div>
                    <?php $first++; ?>
                    @endforeach
                @endif
            </div>
            
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">‹</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">›</span>
            </a>
        </div>
</div>
    </section>
    @endif
     <div class="container">   
</div>
</div>
    <!-- Header Slider End !-->

    {!! $page->content !!}
    
    <section class="section about position-relative toy-detail">
        <div class="container">
            <h2 class="sub-heading mt-3 mb-4">The next step in the electric surfboard industry</h2>
            <p class="">Based On Its Three Principles Of Safety, Fun And Power; Our Electronic Surfboard Has Been Designed With One Key Factor In Mind Easy-To-Use, Enabling Users To Lay On The Board, Kneel On The Board Then Learn To Stand On The Board. For Speeds Of 5 Miles/Hour To Upto 30 Miles/Hour Based On Your Comfort Label.</p>
            <p class="">You Are In Control Of The Speed With Your Handheld Controller.</p>
        </div>
    </section>
    
    <section class="section nice-section about position-relative counting">
    <div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-12">
        <h2 class="big-heading">VIDEO</h2>
        <div class="row embed-responsive embed-responsive-16by9 mt-5 mb-3"><iframe width="1120" height="630" class="embed-responsive-item" src="https://youtube.com/embed/UknUoVWUfAU" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
    </div>
    </div>
    </div>
    </div>    
    </section>
    
    <section class="section nice-section about position-relative counting">
    <div class="site-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-12">
        <h2 class="big-heading">FEATURES</h2>
        <div class="row">
            <div class="col-md-6">
               <h3 class="sub-heading">NOTABLE FEATURES</h3>
               <ul class="nice-list">
                    <li><strong>Top speed</strong> 35 mph / 30 knots</li>

                    <li><strong>Acceleration</strong> 0 - 30 MPH in 4 seconds</li>
 
                    <li><strong>Weight w/ Battery</strong> 77 pounds</li>

                    <li><strong>Battery lasts</strong> 40 Minutes
                        <br>80 Minutes to charge</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="sub-heading">BOOKING</h3> 
                <ul class="nice-list">
                    <li><strong>Complimentary on boats</strong> (based on availability)<br>
                    SEA-RAY DAY PARTY BOAT <br>
                    SUNDANCER <br>
                    Monterey-Feature</li>

                    <li><strong>Packages available for entire fleet</strong><br>
                    inquire UPON booking OR FORM BELOW</li>

                    <li><strong>Must be 8 years of age or older</strong></li>

                    <li><strong>Signed safety, injury, and damage waivers prior to use</strong></li>
                </ul>
            </div>
            <div class="col-md-12">
                <h3 class="sub-heading">SAFETY</h3> 
                <p>Our Electronic Surfboard Uses Safety Sensors Throughout Its System, Including Temperature Monitoring, Automatic Shutdown If The Board Turns Upside Down, And A Magnetically-Triggered Power Key (Dead Man’s Grip Function) To Ensure The Board Doesn’t Speed Off Without The Rider.</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>    
    </section>

</div>

<div class="site-section pb-2 contact-box mt-5">
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
                        <form method="post" action="{{ url('/send-email')}}" name="general_form" class="narrow-form" id="csrf">
                            @csrf
        @foreach (['error', 'warning', 'success', 'info'] as $msg)
                              @if(Session::has('alert-' . $msg))
                              <div class="flash-message">
                            <p>
                             {{ Session::get('alert-' . $msg) }}
                            </p>
                              </div> 
                              @endif
                            @endforeach
     
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

@endsection
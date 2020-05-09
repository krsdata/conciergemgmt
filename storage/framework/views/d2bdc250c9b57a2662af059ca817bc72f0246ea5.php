<style>
   .footerlogo img {
    object-fit: cover;
    width: auto;
    height: auto;
}
.cms-main-footer .footerlogo img.img-responsive {
    width:auto!important;
    /* height: auto; */
}
</style>
<section class="homeContactSection">
    <?php if(isset($contact_form) && $contact_form != null): ?>
    <div class="contact-box">
        <div class="mb-2">
            <?php if(Request::segment(1) == "" || Request::segment(1) == "/"){ ?>
            <div class="justify-content-center mb-2 homeContactBox">
                
                <div class="col-md- mb-2 mb-lg-2 contactBox">
    <div class="row">
        <div class="col-md-12">
            <h2 class="font-weight-bold text-uppercase text-center contact-title aos-init aos-animate" data-aos="flip-up" data-aos-delay="300"><?php echo e($contact_form->title); ?></h2>
            <p class="font-weight-light text-uppercase sub-title text-black text-center mb-3">Please fill in the required fields</p>
        </div>
    </div>
    <form method="post" action="<?php echo e(url('/send-email')); ?>" name="general_form">
        <?php $__currentLoopData = ['error', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if(Session::has('alert-' . $msg)): ?>
                              <div class="flash-message">
                            <p>
                             <?php echo e(Session::get('alert-' . $msg)); ?>

                            </p>
                              </div> 
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo csrf_field(); ?>
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
                                    Cell Phone

                                    

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

                <!--<div class="col-md- mb-2 mb-lg-2 quickLinksBox">-->
                <!--    <div class="quickLinks">-->
                <!--        <p class="font-weight-bold text-uppercase text-left mb-3 quick-title" data-aos="flip-up" data-aos-delay="300">Quick Links</p>-->

                <!--        <p>-->
                <!--            <a href="./bachelorette-party" target="_blank">-->
                <!--                Bachelorette Parties <i class="fa fa-arrow-circle-right"></i>-->
                <!--            </a>-->
                <!--        </p>-->
                <!--        <p>-->
                <!--            <a href="large-group12" target="_blank">-->
                <!--                Large Group (12 or More) <i class="fa fa-arrow-circle-right"></i>-->
                <!--            </a>-->
                <!--        </p>-->
                <!--        <p>-->
                <!--            <a href="./bachelor-parties" target="_blank">-->
                <!--                Bachelor Parties <i class="fa fa-arrow-circle-right"></i>-->
                <!--            </a>-->
                <!--        </p>-->
                <!--         <p>-->
                <!--            <a href="./montauk-bachelorette-parties-booking" target="_blank">-->
                <!--                Bachelorette Booking<i class="fa fa-arrow-circle-right"></i>-->
                <!--            </a>-->
                <!--        </p>-->
                <!--    </div>-->

                    
                <!--</div>-->
            </div>
            <?php } ?>
        </div>
    </div>
    <?php endif; ?>
</section>
<footer class="footer section footer-top">
    <?php if(isset($contact_form) && $contact_form != null): ?>
    <div class="site-section pb-2 contact-box">
        <div class="mb-2">
            <?php if(Request::segment(1) == "" || Request::segment(1) == "/"){ ?>
            <!--Home Page Form-->
            <?php /*<div class="justify-content-center mb-2 homeContactBox">
                <div class="col-md- mb-2 mb-lg-2 contactBox">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="font-weight-bold text-uppercase text-black text-center contact-title" data-aos="flip-up" data-aos-delay="300">{{ $contact_form->title }}</h2>
                                <p class="font-weight-light text-uppercase sub-title text-black text-center mb-3">Please fill in the required fields</p>
                        </div>
                    </div>
                    <form method="post" action="{{ url('/send-email')}}" name="general_form">
                        <?php // @include('admin.includes.messages')  ?>
                        
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

                <div class="col-md- mb-2 mb-lg-2 quickLinksBox">
                    <p class="font-weight-bold text-uppercase text-black text-left mb-3 quick-title" data-aos="flip-up" data-aos-delay="300">Quick Links</p>

                    <div class="quickLinks">
                        <p>
                            <a href="./bachelorette-party" target="_blank">
                                Bachelorette Parties <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </p>
                        <p>
                            <a href="#" target="_blank">
                                Large Group (12 or More) <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </p>
                        <p>
                            <a href="./bachelor-parties" target="_blank">
                                Bachelor Parties <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </p>
                    </div>

                    
                </div>
            </div>
            <?php */ } else { ?>

            <div class="row justify-content-center mb-2">
                <div class="col-md-9">
                    <div class="col-md-12 col-lg-12 mb-2 mb-lg-2">
                        <h2 class="font-weight-light text-black text-center mb-3 contact-title" data-aos="flip-up" data-aos-delay="300"></h2>
                        <form method="post" action="<?php echo e(url('/send-email')); ?>" name="general_form">
        <?php $__currentLoopData = ['error', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if(Session::has('alert-' . $msg)): ?>
                              <div class="flash-message">
                            <p>
                             <?php echo e(Session::get('alert-' . $msg)); ?>

                            </p>
                              </div> 
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo csrf_field(); ?>
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
            <?php } ?>
        </div>
    </div>
    <?php endif; ?>

    <div class="clearfix"></div>
    <section class="about position-relative pt-5 cms-main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget footerLogoBox">
                      <div class="footerlogo">
                      <a href="./"><img class="img-responsive lazyload" data-src="<?php echo e(asset('/coastal-concierge-logo-175w.png')); ?>" alt="coastal-concierge-footer-logo"/></a>
                      </div> 
                      <div class="sociallink-box">
                      <ul class="cms-addres-list">
                        <li>
                            <div class="media"> 
                                <div class="media-left"> 
                                    <i class="fa fa-map-marker"></i>
                                </div> 
                                <div class="media-body"> 
                            <p>132 Main Street Unit 10<br> Westhampton Beach, NY 11978</p>
                                </div> 
                            </div>
                        </li> 

                      </ul></div>
                     
                    </div> </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget">
                        <!--<h4 class="footer-header mb-2">FAQ/Requests</h4>-->
                        <!--  <ul class="list-unstyled footer-menu lh-35 mt-2">-->
                        <!--            <li><a href="faq-hamptons-boat-rental" target="_blank">FAQ</a></li>-->
                        <!--            <li><a href="overnight-yacht-charter-request" target="_blank">Overnight Yacht Charter Request </a></li>-->
                        <!--            <li><a href="hamptons-event-yacht-request" target="_blank">Hamptons Event Yacht Request</a></li>-->
                        <!--            <li><a href="bachelorette-parties" target="_blank">Hamptons Bachelorette Parties</a></li>-->
                        <!--            <li><a href="ready-to-book" target="_blank">100% Ready-to-Book Request</a></li>-->
                        <!--</ul>-->
                    </div>
                </div>
                
                    <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget">
                     <h4 class="footer-header mb-2">Contacts</h4>
                             <div class="widget footerLogoBox">
                     
                   <ul class="list-unstyled footer-menu lh-35 mt-2">
                                  
                                    <li><a href="contact-us" target="_blank">Contact Us</a></li>
                                    
                        </ul>
                      <ul class="cms-addres-list">
                       
                        <li>
                            <div class="media"> 
                                <div class="media-left"> 
                                    <a href="mailto:laura@coastalconciergemgmt.com "> 
                                        <i class="fa fa-envelope"></i>
                                    </a> 
                                </div> 
                                <div class="media-body"> 
                                        <a href="mailto:laura@coastalconciergemgmt.com ">laura@coastalconciergemgmt.com </a>
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
                                        <a href="sms:+16315007777">Click to Text: +631-599-1864</a>
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
                                    <a href="tel:+18004172027">Click to Call: +631-599-1864</a>
                                </div> 
                            </div>
                            
                        </li> 
                         
                           
                      </ul>
                      
                                 <!--<ul class="list-unstyled footer-menu lh-35"> <li><a href="pay" target="_blank">Make a Payment</a></li>       </ul>-->
                        
                     </div>
        
                        </div>
                          </div> </div>
            </div>
        
    </section>
 <section class="position-relative bottom-footer header-top">
    <div class="container">
            <div class="row pt-4 text-center">
                <div class="col-lg-12 text-white">
                    <div class="copyright">
                         
                       
                          <ul class="social-list-cms">
                                <li>
                                    <a href="https://www.facebook.com/CoastalConciergeMgmt/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>    
                                </li>    
                                <li>
                                    <a href="https://www.instagram.com/coastalconciergemgmt/" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>    
                                </li>
                                <!--<li>-->
                                <!--    <a href="https://www.tripadvisor.com/Profile/yachthamptoncharters" target="_blank">-->
                                <!--        <i class="fa fa-tripadvisor"></i>-->
                                <!--    </a>    -->
                                <!--</li>-->
                            </ul> 
                          <div class="row mb-2"><div class="col-12 copytext text-center">
                        2020 &copy; Copyright 
                        <!--<a href="value" target="_blank" class="text-white">Reserved</a> to -->
                        <!--<a class="text-white" href="hamptons-to-do">Yacht Hampton</a>-->
                        <!--<a class="text-white" href="https://hamptonsboatrental.com/login" target="_blank">by</a>-->
                        <a class="text-white" href="https://coastalconciergemgmt.com/" target="_blank"> Coastal Concierge Management.</a>
                        <a href="value" target="_blank" class="text-white">All Rights Reserved.</a>
                         
                       </div></div>  
                    </div>
                </div>
            </div>
        
    </div>
    </section>
     <!--<div class="row"><div class="col-12 text-center"><small> <a href="sitemap" target="_blank" class="text-color sitemap">Sitemap</a></small></div></div>   -->
    <div class="back-top">
    <a id="back-to-top" href="#" class="btn btn-light btn-round-full back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
</div>
</footer><?php /**PATH /home1/ncwfegko/conciergemgmt.yachthampton.com/public_html/resources/views/frontend/includes/footer.blade.php ENDPATH**/ ?>
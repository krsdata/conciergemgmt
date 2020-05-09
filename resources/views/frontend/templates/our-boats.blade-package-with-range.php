@extends('frontend.mainframe')
@section('content')

<link rel="stylesheet" href="{{ asset('/frontend/css/boats-filter.css') }}">

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
    @if(!empty($slider) && !empty($slider->slides))
        <section class="cms-boatslider">
            <div id="mainloder" class="mainloder" style="max-height: 100vh;">
                <div class="subloder">
                 <!-- <div class="lds-ring"><div></div><div></div><div></div><div></div></div> -->
                 <img src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif" />
                </div> 
            </div>
            <div class="single-product owl-carousel owl-theme">
                 <?php $count = 0; ?>
                    @foreach($slider->slides as $ss)
                <?php /*
                <div class="item">
                    <img class="d-block w-100 lazyload" data-src="{{ $ss->image_path }}" alt="First slide" style="max-height: 750px;">
                    <div class="carousel-caption d-none d-md-block mb-5">
                                <div class="block text-left mb-4">
                                    <h2 class="animated fadeInUp mb-5 text-white">{{ $ss->title }}</h2>
                                    <a href="#" target="_blank" class="btn btn-main animated fadeInUp btn-round-full">Book Now!<i
                                                class="btn-icon fa fa-angle-right ml-2"></i></a>
                                </div>
                            </div>
                </div>   
                 <?php */ $count++; ?>
                    @endforeach 
            </div>
            

            <div id="myCarousel" class="carousel slide carousel-fade carousel-ajax" data-ride="carousel" data-interval="5000" style="display:;">
                <ol class="carousel-indicators">
                    <?php $count = 0; ?>
                    @foreach($slider->slides as $ss)
                    <?php if(count($slider->slides) > 1){ ?>
                        <li data-target="#myCarousel" data-slide-to="{{ $count }}" @if($count == 0)class="active"@endif></li>
                    <?php } $count++; ?>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    <?php $count = 0; ?>
                    @foreach($slider->slides as $ss)
                        <div class="carousel-item @if($count == 0){{ 'active' }}@endif">
                            <img class="d-block w-100 lazyload" data-src="{{ $ss->image_path }}" src="{{ $ss->image_path }}" alt="Our Boats Header Image">

                            <div class="carousel-caption d-none d-md-block mb-5">
                                <div class="block text-left mb-4">
                                    <h2 class="animated fadeInUp mb-5 text-white">{{ $ss->title }}</h2>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                    @endforeach
                </div>
    
                <?php if($count > 1) { ?>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">‹</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">›</span>
                </a>
                <?php } ?>
            </div>
        </section>
    @endif
    
    <?php $catCount = 0; ?>

    <!--Filter Box Start-->
    <section class="section blog-wrap boat-filter-section">
        <div class="container">
            <div class="row optionWindow">
                <div class="col-md-12 text-center filterBtns">
                    <span>Filter By:&nbsp;&nbsp;</span>
                    <button type="butotn" id="budgetBtn" class="filterOpt desktopOptions">$ Budget</button>
                    <button type="butotn" id="btTypeBtn" class="filterOpt desktopOptions">Boat Types</button>
                    <!--<button type="butotn" id="deptPortBtn" class="filterOpt desktopOptions">Departure Port</button>-->
                    <button type="butotn" id="passengerBtn" class="filterOpt desktopOptions"># Passengers</button>

                    <!--Mobile Buttons-->
                    <button type="butotn" data-toggle="modal" id="budgetModalBtn" data-target="#budgetModal"class="filterOpt mobileOptions mobileFilter">$ Budget</button>
                    <button type="butotn" data-toggle="modal" id="boatTypesModalBtn" data-target="#boatTypesModal" class="filterOpt mobileOptions  mobileFilter">Boat Types</button>
                    <button type="butotn" data-toggle="modal" id="passengerModalBtn" data-target="#passengerModal" class="filterOpt mobileOptions  mobileFilter"># Passengers</button>
                    <button type="butotn" id="advanceBtn" data-toggle="modal" data-target="#filterModal" class="filterOpt" data-toggle="modal" data-target="#filterModal">Advanced Filters</button>
                </div>
            </div>
            
            <!--Budget Box Start-->
            <div class="optionBox budgetBox" id="budgetBox">
                <div class="optHeader">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="price-range-block">
                                <span id="rangeValues" class="rangeValues budgetRangeValues"></span>
                                <div class="buildings">
                                    <?php for($i=1; $i<45; $i++){ ?>
                                    <div class="line<?php echo $i ?>"></div>
                                    <?php } ?>
                                </div>
                                <div id="slider-range" class="price-filter-range slider-range" name="rangeInput"></div>
                            </div>
                        </div>
                    </div>
  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="minBox mb-3">
                                <label>Minimum Price</label>
                                <span>$</span>
                                <input name="form_min" placeholder="Min" value="" type="text" min=0 max="30000" oninput="validity.valid||(value='1000');" id="min_price" class="form-control min_price" />
                                <input type="hidden" id="filterMinPrice" class="filterMinPrice" value="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="minBox mb-3">
                                <label>Maximum Price</label>
                                <span>$</span>
                                <input name="form_max" placeholder="Max" value="" type="text" min=0 max="30000" oninput="validity.valid||(value='30000');" id="max_price" class="form-control max_price"/>
                                <input type="hidden" id="filterMaxPrice" class="filterMaxPrice" value="30000">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="optFooter">
                    <a href="#" id="clearBudget" class="clear">Clear</a>
                    <button class="save">Save Filter</button>
                </div>
            </div>
            <!--Budget Box End-->

            <!--Passenger Box Start-->
            <div class="optionBox passengerBox" id="passengerBox">
                <div class="optHeader">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="price-range-block">
                                <span id="rangeValuesCap" class="rangeValues rangeValuesCap"></span>
                                <div id="slider-range-cap" class="price-filter-range slider-range-cap" name="rangeInput"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="minBox">
                                <label>Minimum Person</label>
                                <input name="form_mincap" placeholder="Minimum" value="" type="text" min=1 max="100" oninput="validity.valid||(value='1');" id="min_cap" class="form-control min_cap" />
                                <input type="hidden" class="filterMinCap" id="filterMinCap" value="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="minBox">
                                <label>Maximum Person</label>
                                <input name="form_maxcap" value="" placeholder="Maximum" type="text" min=1 max="100" oninput="validity.valid||(value='100');" id="max_cap" class="form-control max_cap"/>
                                <input type="hidden" class="filterMaxCap" id="filterMaxCap" value="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="optFooter">
                    <a href="#" id="clearPassenger" class="clear">Clear</a>
                    <button class="save">Save Filter</button>
                </div>
            </div>
            <!--Passenger Box End-->

            <!--Boat Types Box Start-->
            <div class="optionBox boatTypesBox" id="boatTypesBox">
                <div class="optHeader">
                    <ul>
                        <?php
                            if(!empty($boatType))
                            {
                                foreach ($boatType as $key => $value) {
                        ?>
                        <li>
                            <label class="module-options"><?php echo $value ?>
                                <input name="form_boatType[]" class="form_boatType" type="checkbox" value="<?php echo $key ?>"><span class="checkmark"></span>
                            </label>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
                <div class="optFooter">
                    <a href="#" id="clearBoatTypes" class="clear">Clear</a>
                    <button class="save">Save Filter</button>
                </div>
            </div>
            <!--Boat Types Box End-->
        </div>
    </section>

    <!-- Advance Filter Modal -->
    <div class="modal fade filterModal" id="filterModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modalClose" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">
                    <span class="desktopOptions">Advanced Filters</span>
                    <span class="mobileOptions">Filters</span>
                </h4>
                <a href="#" id="clearAdvance" class="clear mobileOptions">Clear all</a>
            </div>
            <div class="modal-body">
              <div class="modalHeader">
                <!--form_departure options-->
                <div class="modalOptions deptPortBox">
                    <p>Departure Port</p>
                    <ul>
                        <?php
                            if(!empty($departurePort)){
                                foreach ($departurePort as $key => $value) {
                        ?>
                        <li>
                            <label class="module-options"><?php echo $value ?>
                                <input name="form_departure[]" class="form_departure" type="checkbox" value="<?php echo $value ?>"><span class="checkmark"></span>
                            </label>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>

                <hr/>
                <!--Boat length options-->
                <div class="modalOptions boatLengthBox">
                    <p>Boat Length</p>
                    <ul>
                        <?php
                            if(!empty($boatLength)){
                                foreach ($boatLength as $key => $value) {
                        ?>
                        <li>
                            <label class="module-options"><?php echo $value ?>
                                <input name="form_boatLength[]" type="checkbox" value="<?php echo $value ?>"><span class="checkmark"></span>
                            </label>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
                
                <hr/>

                <!--Destination options-->
                <div class="modalOptions destinationBox">
                    <p>Destination</p>
                    <ul>
                        <?php
                            if(!empty($destination)){
                                foreach ($destination as $key => $value) {
                        ?>
                        <li>
                            <label class="module-options"><?php echo $value ?>
                                <input name="form_destination[]" type="checkbox" value="<?php echo $key ?>"><span class="checkmark"></span>
                            </label>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>

                <hr/>

                <!--Duration options-->
                <div class="modalOptions durationBox">
                    <p>Duration</p>
                    <ul>
                        <?php
                            if(!empty($duration)){
                                foreach ($duration as $key => $value) {;
                        ?>
                        <li>
                            <label class="module-options"><?php echo $value ?>
                                <input name="form_duration[]" type="checkbox" value="<?php echo $key ?>"><span class="checkmark"></span>
                            </label>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>

                <hr/>

                <!--Slipper Capacity Start-->
                <div class="row">
                    <div class="col-md-6">
                        <!--Sleeping Capacity options-->
                        <div class="modalOptions">
                            <p>Sleeping Capacity</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="price-range-block">
                                        <span id="rangeValuesSleep" class="rangeValues"></span>
                                        <div id="slider-range-sleep" class="price-filter-range" name="rangeInput"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="minBox">
                                        <label>Minimum Beds</label>
                                        <input name="form_minsleep" placeholder="Minimum" value="" type="number" min=0 max="20" oninput="validity.valid||(value='0');" id="min_sleep" class="form-control" />
                                        <!--Used while form submit-->
                                        <input type="hidden" id="filterMinSleep" value="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="minBox">
                                        <label>Maximum Beds</label>
                                        <input name="form_maxsleep" value="" placeholder="Maximum" type="number" min=0 max="20" oninput="validity.valid||(value='20');" id="max_sleep" class="form-control"/>

                                        <!--Used while form submit-->
                                        <input type="hidden" id="filterMaxSleep" value="20">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Slipper Capacity End-->
              </div>
            </div>
            <div class="modal-footer">
                <a href="#" id="clearAdvance" class="clear">Clear all</a>
                <button type="button" class="save">Search</button>
            </div>
          </div>
        </div>
    </div>

    <!-- Budget Mobile Modal -->
    <div class="modal fade filterModal" id="budgetModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modalClose" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">
                    &nbsp;
                </h4>
                <a href="#" id="clearBudget" class="clear mobileOptions">Clear</a>
            </div>
            <div class="modal-body">
              <div class="modalHeader">

                <!--Budget Box Start, For mobile only-->
                <div class="modalOptions budgetBox mobileOptions">
                    <p>Price Range</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="price-range-block">
                                <span id="rangeValues" class="rangeValues budgetRangeValues"></span>
                                <div class="buildings">
                                    <?php for($i=1; $i<45; $i++){ ?>
                                    <div class="line<?php echo $i ?>"></div>
                                    <?php } ?>
                                </div>
                                <div id="slider-range" class="price-filter-range slider-range" name="rangeInput"></div>
                            </div>
                        </div>
                    </div>
 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="minBox mb-3">
                                <label>Minimum Price</label>
                                <span>$</span>
                                <input name="form_min" placeholder="Min" value="" type="text" min=0 max="30000" oninput="validity.valid||(value='1000');" id="min_price" class="form-control min_price" />
                                <input type="hidden" id="filterMinPrice" class="filterMinPrice" value="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="minBox mb-3">
                                <label>Maximum Price</label>
                                <span>$</span>
                                <input name="form_max" placeholder="Max" value="" type="text" min=0 max="30000" oninput="validity.valid||(value='30000');" id="max_price" class="form-control max_price"/>
                                <input type="hidden" id="filterMaxPrice" class="filterMaxPrice" value="30000">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Budget Box End-->
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="save">Save Filter</button>
            </div>
          </div>
          
        </div>
    </div>
    
    <!-- Boat Types Mobile Modal -->
    <div class="modal fade filterModal" id="boatTypesModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modalClose" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">
                    &nbsp;
                </h4>
                <a href="#" id="clearBoatTypes" class="clear mobileOptions">Clear</a>
            </div>
            <div class="modal-body">
              <div class="modalHeader">
                <!--Boat Types Box Start, For mobile only-->
                <div class="modalOptions boatTypesBox mobileOptions">
                    <p>Boat Types</p>
                    <ul>
                        <?php
                            if(!empty($boatType))
                            {
                                foreach ($boatType as $key => $value) {
                        ?>
                        <li>
                            <label class="module-options"><?php echo $value ?>
                                <input name="form_boatType[]" class="form_boatType" type="checkbox" value="<?php echo $key ?>"><span class="checkmark"></span>
                            </label>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
                <!--Boat Types Box End-->
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="save">Save Filter</button>
            </div>
          </div>
        </div>
    </div>

    <!-- Passenger Mobile Modal -->
    <div class="modal fade filterModal" id="passengerModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modalClose" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">
                    &nbsp;
                </h4>
                <a href="#" id="clearPassenger" class="clear mobileOptions">Clear</a>
            </div>
            <div class="modal-body">
              <div class="modalHeader">
                <div class="modalOptions deptPortBox mobileOptions">
                    <p>Passengers</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="price-range-block">
                                <span id="rangeValuesCap" class="rangeValues rangeValuesCap"></span>
                                <div id="slider-range-cap" class="price-filter-range slider-range-cap" name="rangeInput"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="minBox">
                                <label>Minimum Person</label>
                                <input name="form_mincap" placeholder="Minimum" value="" type="text" min=1 max="100" oninput="validity.valid||(value='1');" id="min_cap" class="form-control min_cap" />
                                <input type="hidden" class="filterMinCap" id="filterMinCap" value="1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="minBox">
                                <label>Maximum Person</label>
                                <input name="form_maxcap" value="" placeholder="Maximum" type="text" min=1 max="100" oninput="validity.valid||(value='100');" id="max_cap" class="form-control max_cap"/>
                                <input type="hidden" class="filterMaxCap" id="filterMaxCap" value="100">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Dept Port Box End-->
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="save">Save Filter</button>
            </div>
          </div>
        </div>
    </div>
    <!--Filter Box End-->
    
    <section class="section blog-wrap bg-gray pt-3">
        <div class="containers">
            <div class="rows" id="nonFilterBoats">
                <!--Boats Start col-lg-push-3-->
                <div class="col-md-12" id="boats">
                    <?php $advanceFilterBox = false; $i = 0; ?>
                    @if(isset($categories) && !empty($categories))
                    @foreach($categories as $c)

                    <?php 
                        if(isset($filterData['form_boatType']))
                        {
                            $flBoatType = $filterData['form_boatType'];
                            //print_r($flBoatType);
                            $found = \App\Helper\CommonFunction::findCatInFilter($c->title, $flBoatType);
                            if($found)
                            {

                    ?>
                    <div class="containers mb-5 pt-3 pb-3 boat-header">
                        <p class="mb-1 mt-2 text-center text-white">{{ $c->title }}</p>
                    </div>
                    <?php }} else if(strtolower($c->title) != 'entire fleet') { ?>
                    <div class="containers mb-5 pt-3 pb-3 boat-header">
                        <p class="mb-1 mt-2 text-center text-white">{{ $c->title }}</p>
                    </div>
                    <?php } ?>

                    <div class="row">
                        <?php
                            //echo $url = url()->current();
                            if(!empty($c->boats)) {

                            $array = json_decode(json_encode($c->boats), True);
                            
                            foreach($c->boats as $b) {
                                $canShow = true;                            

                                if($canShow) {
                            ?>
                                <div class="col-lg-6 col-md-6 mb-5">
                                    <div class="blog-item">
                                        @foreach($b->details as $bd)
                                            @if($bd->key == 'best_seller' && $bd->value == 'on')
                                                <div class="seller-img">
                                                  <img class="lazyload" data-src="{{ asset('/photos/2/blue_seller.png') }}" src="{{ asset('/photos/2/blue_seller.png') }}" alt="best seller image yachthampton" />
                                                </div>
                                            @endif
                                            @if($bd->key == 'jet_ski' && $bd->value == 'on')
                                                <div class="jet_ski">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/jet_ski.png') }}" src="{{ asset('/photos/2/jet_ski.png') }}" alt="jetski icon yachthampton" />
                                                </div>
                                            @endif

                                            @if($bd->key == 'sea_bob' && $bd->value == 'on')
                                                <div class="sea_bob">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/sea_bob.png') }}" src="{{ asset('/photos/2/sea_bob.png') }}" alt="sea bob icon yachthampton" />
                                                </div>
                                            @endif

                                            @if($bd->key == 'paddle-board' && $bd->value == 'on')
                                                <div class="paddle-board">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/paddleboard.png') }}" src="{{ asset('/photos/2/paddleboard.png') }}" alt="paddle-board icon yachthampton" />
                                                </div>
                                            @endif

                                            @if($bd->key == 'brand_new' && $bd->value == 'on')
                                                <div class="seller-img">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/brand_new.png') }}" src="{{ asset('/photos/2/brand_new.png') }}" alt="brand new icon yachthampton" />
                                                </div>
                                            @endif
                                            @if($bd->key == '4_hour' && $bd->value == 'on')
                                                <div class="image10">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/4-hour-rate.png') }}" src="{{ asset('/photos/2/4-hour-rate.png') }}" alt="4 hour rate icon yachthampton" />
                                                </div>
                                            @elseif($bd->key == '8_hour' && $bd->value == 'on')
                                                <div class="image10">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/8-hour-rate.png') }}" src="{{ asset('/photos/2/8-hour-rate.png') }}" alt="8 hour rate icon yachthampton" />
                                                </div>
                                            @else
                                            @endif
                                        @endforeach
                                        <div class="ourboatbox">
                                            <a href="{{ url('/'.$b->slug->slug) }}" target="_blank">
                                                <img class="img-fluid rounded boat-feature lazyload" data-src="{{ $b->image }}" src="{{ $b->image }}" alt="yachthampton_boat" />
                                            </a>
                                        </div>
                                    <div class="row">
                                            <div class="col-lg-12">
                                                <span class="popular-image">
                                                    {{--<img class="lazyload" data-src="{{ asset('/photos/2/cirlce-no.png') }}">--}}
                                                    <span class="post-no">{{ $b->sn_no }}</span>
                                                </span>
                                                <span class="boats_price_box">
                                                    <span class="boats_price_box_item2">From</span>
                                                    <span class="boats_price_box_item text-white h4">$@foreach($b->details as $bd)@if($bd->key == 'price'){{ $bd->value }}@endif @endforeach</span>
                                                    <span class="boats_price_box_item1">@foreach($b->details as $bd)@if($bd->key == 'added_price'){{'+'.$bd->value}} @endif @endforeach</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="blog-item-content bg-white p-1 boat_it">
                                            <h3 class="text-center mb-4 pt-2">
                                                <a href="{{ $b->slug->slug }}" target="_blank">{{ $b->page_name }}</a>
                                            </h3>

                                            <div class="text-center mb-3 boat-info">
                                                <span class="text-capitalize">
                                                    <i class="fas fa-map-marker-alt"></i>@foreach($b->details as $bd)@if($bd->key == 'harbor'){{ $bd->value }}@endif @endforeach
                                                </span>
                                            </div>
                                            <div class="text-center mb-3 boat-info">
                                                <span class="text-capitalize mr-3">
                                                    <i class="fas fa-ruler-horizontal"></i>@foreach($b->details as $bd)@if($bd->key == 'size'){{ $bd->value }}@endif @endforeach FT
                                                </span>
                                                <span class="text-capitalize mr-3">
                                                    <i class="fas fa-tachometer-alt"></i>@foreach($b->details as $bd)@if($bd->key == 'speed'){{ $bd->value }}@endif @endforeach MPH
                                                </span>
                                                <span class="text-capitalize mr-3">
                                                    <i class="fas fa-user-friends"></i>@foreach($b->details as $bd)@if($bd->key == 'capacity'){{ $bd->value }}@endif @endforeach
                                                </span>
                                                <span class="text-capitalize">
                                                    <i class="fas fa-bed"></i>@foreach($b->details as $bd)@if($bd->key == 'beds'){{ $bd->value }}@endif @endforeach
                                                </span>
                                            </div>

                                            <!--Day trips and overnights options start -->
                                            <div class="text-center boat-info">
                                                @foreach($b->details as $bd)@if($bd->key == 'day_trips') 
                                                <span class="text-capitalize">
                                                    <i class="fa fa-sun-o"></i> Day Trips
                                                </span>
                                                @endif @endforeach

                                                @foreach($b->details as $bd)@if($bd->key == 'overnights' && $bd->value == 'on') 
                                                <span class="text-capitalize ml-2">
                                                    <i class="fa fa-moon-o"></i> Overnights
                                                </span>
                                                @endif @endforeach
                                            </div>
                                            <!--Day trips and overnights options end -->
                                 
                                            <div class="col text-center mt-4 pb-3">
                                                <a href="{{ $b->slug->slug }}" target="_blank" class="btn btn-small btn-main btn-round-full border-0 button-space button-width">Learn More</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php } //else { echo "Nr recod"; } // Can Show condition end ?>
                        <?php }} else { ?>
                            <div class="text-center">
                                <h4>No boats are added yet!</h4>
                            </div>
                        <?php } ?>

                    </div>
                    @endforeach
                    @endif
                </div>
                <!--Boats End-->
            </div>

            <!--Filter Boats Start-->
            <div class="rows" id="filterBoats"></div>

            <div class="rows" id="noRecord" style="display:none;">
                <div class="col-md-12 text-center">
                    <div class="alert alert-danger"><b>Sorry!</b> No boat found of your selected criteria.</div>
                    <a href="#" id="defaultBoatsBtn" class="btn btn-primary defaultBoatsBtn">Load Default Boats</a>
                </div>
            </div>
            <!--Filter Boats End-->
        </div>
    </section>
        

    <!-- Section About Start -->
    <section class="about-2 position-relative">
        <div class="container">
            {!! $page->content !!}
        </div>
    </section>
</div>

    <script type="text/javascript">
        function showFilter(){
            $("#advanceFilterBox").show();
            $("#showFilterBtn").hide();
            $("#hideFilterBtn").show();
            return false;
        }
        function hideFilter(){
            $("#advanceFilterBox").hide();
            $("#showFilterBtn").show();
            $("#hideFilterBtn").hide();
            return false;
        }
        function submitForm(){
            //$("#filterForm").submit();
            //document.getElementById("filterForm").submit();
        }
        
    </script>

@endsection
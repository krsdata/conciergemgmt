<!--Boats Start-->
<?php 
$showBoats = true; if(!empty($boatsOnWaterToys)){ ?>
<section class="bg-gray packageBox waterToysBox">
    <div class="container">
        <!--Boats Start - Included with Reservation-->
        <div class="row">
            <?php
            	$count = 1;
                foreach ($boatsOnWaterToys as $b) {
                    /*$details = \App\BoatDetail::where(['boat_id' => $b->id])->get('*');
                    foreach ($details as $bd) {
                        echo "<pre>"; echo $bd->key. "<br>";
                    } exit;*/

                    //$b->slug->slug
                    $boat_slug = \App\Routes::where(['type' => 'boat', 'pbc_id' => $b->id])->get('*');
                    //echo "<pre>"; print_r($boat_slug);exit;
                    foreach ($boat_slug as $sl) {
                        $b->slug = $sl->slug;
                    }
                    //echo $b->slug;exit;

                    $toy = strtolower($page->page_name);
                    //$toyExist = \App\BoatWaterToys::where(['boat_id' => $b->id])->whereRaw("find_in_set('%$toy%','value')")->get('*');
                    
                    $toyKeys = \App\BoatWaterToys::where(['boat_id' => $b->id])->get('*');
                    //echo $toyKeys;
                    $keyNames = array();
                    if(!empty($toyKeys)) {
                        foreach ($toyKeys as $row) {
                            $row->value = strtolower($row->value);
                            if($row->value == 'included' || $row->value == 'include')
                                $keyNames[] = $row->keyname;
                            //$keyNames[] = $row->keyname;
                        }
                    }

                    if(!empty($keyNames))
                    {
                        $toyFound = false;
                        foreach ($keyNames as $key) {
                            if(strpos($toy, $key) !== false){
                                $toyFound = true;
                            }
                        }
                    if($toyFound){ 
                        
            ?>
			
			<?php if($count == 1){ ?>
			<div class="col-lg-12 col-md-12 mt-3 mb-5">
				<h1 class="unit-1-heading text-center text-color aos-init aos-animate" data-aos="fade-center" data-aos-duration="2000">Included Free With Reservation</h1>
			</div>
			<?php } $count++; ?>

            <div class="col-lg-6 col-md-6 mb-5">
                <div class="blog-item">
                    <?php
                        $details = \App\BoatDetail::where(['boat_id' => $b->id])->get('*');
                    ?>

                    @foreach($details as $bd)
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
                        <a href="{{ url('/'.$b->slug) }}" target="_blank">
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
                                <span class="boats_price_box_item text-white h4">$@foreach($details as $bd)@if($bd->key == 'price'){{ $bd->value }}@endif @endforeach</span>
                                <span class="boats_price_box_item1">+@foreach($details as $bd)@if($bd->key == 'added_price'){{$bd->value}}@endif @endforeach</span>
                            </span>
                        </div>
                    </div>
                    <div class="blog-item-content bg-white p-1 boat_it">
                        <h3 class="text-center font-weight-bold mb-4 pt-2">
                            <a href="{{ $b->slug }}" target="_blank">{{ $b->page_name }}</a>
                        </h3>

                        <div class="text-center mb-3 boat-info">
                            <span class="text-capitalize">
                                <i class="fas fa-map-marker-alt"></i>@foreach($details as $bd)@if($bd->key == 'harbor'){{ $bd->value }}@endif @endforeach
                            </span>
                        </div>
                        <div class="text-center mb-3 boat-info">
                            <span class="text-capitalize mr-3">
                                <i class="fas fa-ruler-horizontal"></i>@foreach($details as $bd)@if($bd->key == 'size'){{ $bd->value }}@endif @endforeach FT
                            </span>
                            <span class="text-capitalize mr-3">
                                <i class="fas fa-tachometer-alt"></i>@foreach($details as $bd)@if($bd->key == 'speed'){{ $bd->value }}@endif @endforeach MPH
                            </span>
                            <span class="text-capitalize mr-3">
                                <i class="fas fa-user-friends"></i>@foreach($details as $bd)@if($bd->key == 'capacity'){{ $bd->value }}@endif @endforeach
                            </span>
                            <span class="text-capitalize">
                                <i class="fas fa-bed"></i>@foreach($details as $bd)@if($bd->key == 'beds'){{ $bd->value }}@endif @endforeach
                            </span>
                        </div>

                        <!--Day trips and overnights options start -->
                        <div class="text-center boat-info">
                            @foreach($details as $bd)@if($bd->key == 'day_trips') 
                            <span class="text-capitalize">
                                <i class="fa fa-sun-o"></i> Day Trips
                            </span>
                            @endif @endforeach

                            @foreach($details as $bd)@if($bd->key == 'overnights' && $bd->value == 'on') 
                            <span class="text-capitalize ml-2">
                                <i class="fa fa-moon-o"></i> Overnights
                            </span>
                            @endif @endforeach
                        </div>
                        <!--Day trips and overnights options end -->
             
                        <div class="col text-center mt-4 pb-3">
                            <a href="{{ $b->slug }}" target="_blank" class="btn btn-lg btn-main btn-round-full border-0 mb-3 font-weight-bold button-space button-width">Learn More</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <?php } } } ?>
        </div>

        <!--Boats Start - Available With Reservation-->
        <div class="row">
            <?php
                $count = 1;
                foreach ($boatsOnWaterToys as $b) {
                    /*$details = \App\BoatDetail::where(['boat_id' => $b->id])->get('*');
                    foreach ($details as $bd) {
                        echo "<pre>"; echo $bd->key. "<br>";
                    } exit;*/

                    //$b->slug->slug
                    $boat_slug = \App\Routes::where(['type' => 'boat', 'pbc_id' => $b->id])->get('*');
                    //echo "<pre>"; print_r($boat_slug);exit;
                    foreach ($boat_slug as $sl) {
                        $b->slug = $sl->slug;
                    }
                    //echo $b->slug;exit;

                    $toy = strtolower($page->page_name);
                    //$toyExist = \App\BoatWaterToys::where(['boat_id' => $b->id])->whereRaw("find_in_set('%$toy%','value')")->get('*');
                    $toyKeys = \App\BoatWaterToys::where(['boat_id' => $b->id])->get('*');
                    $keyNames = array();
                    if(!empty($toyKeys)) {
                        foreach ($toyKeys as $row) {
                            $row->value = strtolower($row->value);
                            if($row->value == 'upon request' || $row->value == 'upon requests')
                                $keyNames[] = $row->keyname;
                        }
                    }

                    if(!empty($keyNames))
                    {
                        $toyFound = false;
                        foreach ($keyNames as $key) {
                            if(strpos($toy, $key) !== false){
                                $toyFound = true;
                            }
                        }
                    if($toyFound){ 
                        
            ?>
            
            <?php if($count == 1){ ?>
            <div class="col-lg-12 col-md-12 mt-3 mb-5">
                <h1 class="unit-1-heading text-center text-color aos-init aos-animate" data-aos="fade-center" data-aos-duration="2000">Available with Reservation</h1>
            </div>
            <?php } $count++; ?>

            <div class="col-lg-6 col-md-6 mb-5">
                <div class="blog-item">
                    <?php
                        $details = \App\BoatDetail::where(['boat_id' => $b->id])->get('*');
                    ?>

                    @foreach($details as $bd)
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
                        <a href="{{ url('/'.$b->slug) }}" target="_blank">
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
                                <span class="boats_price_box_item text-white h4">$@foreach($details as $bd)@if($bd->key == 'price'){{ $bd->value }}@endif @endforeach</span>
                                <span class="boats_price_box_item1">+@foreach($details as $bd)@if($bd->key == 'added_price'){{$bd->value}}@endif @endforeach</span>
                            </span>
                        </div>
                    </div>
                    <div class="blog-item-content bg-white p-1 boat_it">
                        <h3 class="text-center font-weight-bold mb-4 pt-2">
                            <a href="{{ $b->slug }}" target="_blank">{{ $b->page_name }}</a>
                        </h3>

                        <div class="text-center mb-3 boat-info">
                            <span class="text-capitalize">
                                <i class="fas fa-map-marker-alt"></i>@foreach($details as $bd)@if($bd->key == 'harbor'){{ $bd->value }}@endif @endforeach
                            </span>
                        </div>
                        <div class="text-center mb-3 boat-info">
                            <span class="text-capitalize mr-3">
                                <i class="fas fa-ruler-horizontal"></i>@foreach($details as $bd)@if($bd->key == 'size'){{ $bd->value }}@endif @endforeach FT
                            </span>
                            <span class="text-capitalize mr-3">
                                <i class="fas fa-tachometer-alt"></i>@foreach($details as $bd)@if($bd->key == 'speed'){{ $bd->value }}@endif @endforeach MPH
                            </span>
                            <span class="text-capitalize mr-3">
                                <i class="fas fa-user-friends"></i>@foreach($details as $bd)@if($bd->key == 'capacity'){{ $bd->value }}@endif @endforeach
                            </span>
                            <span class="text-capitalize">
                                <i class="fas fa-bed"></i>@foreach($details as $bd)@if($bd->key == 'beds'){{ $bd->value }}@endif @endforeach
                            </span>
                        </div>

                        <!--Day trips and overnights options start -->
                        <div class="text-center boat-info">
                            @foreach($details as $bd)@if($bd->key == 'day_trips') 
                            <span class="text-capitalize">
                                <i class="fa fa-sun-o"></i> Day Trips
                            </span>
                            @endif @endforeach

                            @foreach($details as $bd)@if($bd->key == 'overnights' && $bd->value == 'on') 
                            <span class="text-capitalize ml-2">
                                <i class="fa fa-moon-o"></i> Overnights
                            </span>
                            @endif @endforeach
                        </div>
                        <!--Day trips and overnights options end -->
             
                        <div class="col text-center mt-4 pb-3">
                            <a href="{{ $b->slug }}" target="_blank" class="btn btn-small btn-main btn-round-full border-0 font-weight-bold button-space">Learn More</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php } } } ?>
        </div>
    </div>
</section>
<?php } ?>

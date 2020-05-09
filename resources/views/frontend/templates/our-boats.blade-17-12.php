@extends('frontend.mainframe')
@section('content')

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
                 <?php $count++; ?>
                    @endforeach 
            </div>
            

            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="display:none;">
                <ol class="carousel-indicators">
                    <?php $count = 0; ?>
                    @foreach($slider->slides as $ss)
                        <li data-target="#myCarousel" data-slide-to="{{ $count }}" @if($count == 0)class="active"@endif></li>
                        <?php $count++; ?>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    <?php $count = 0; ?>
                    @foreach($slider->slides as $ss)
                        <div class="carousel-item @if($count == 0){{ 'active' }}@endif">
                            <img class="d-block w-100 lazyload" data-src="{{ $ss->image_path }}" alt="First slide" style="max-height: 750px;">

                            <div class="carousel-caption d-none d-md-block mb-5">
                                <div class="block text-left mb-4">
                                    <h2 class="animated fadeInUp mb-5 text-white">{{ $ss->title }}</h2>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        @endif

    @if(isset($categories) && !empty($categories))
        @foreach($categories as $c)
            <section class="section blog-wrap bg-gray">
                <div class="container mb-5 pt-5 pb-5 boat-header">
                    <h3 class="mb-1 text-center text-white">{{ $c->title }}</h3>
                </div>
                <div class="container">
                    <div class="row">
                        @if(!empty($c->boats))
                            @foreach($c->boats as $b)
                                <div class="col-lg-6 col-md-6 mb-5">
                                    <div class="blog-item">
                                        @foreach($b->details as $bd)
                                            @if($bd->key == 'best_seller' && $bd->value == 'on')
                                                <div class="seller-img">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/blue_seller.png') }}">
                                                </div>
                                            @endif
                                            @if($bd->key == 'jet_ski' && $bd->value == 'on')
                                                <div class="jet_ski">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/jet_ski.png') }}">
                                                </div>
                                            @endif
                                            @if($bd->key == '4_hour' && $bd->value == 'on')
                                                <div class="image10">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/4-hour-rate.png') }}" alt="" />
                                                </div>
                                            @elseif($bd->key == '8_hour' && $bd->value == 'on')
                                                <div class="image10">
                                                    <img class="lazyload" data-src="{{ asset('/photos/2/8-hour-rate.png') }}" alt="" />
                                                </div>
                                            @else
                                            @endif
                                        @endforeach
                                        <div class="ourboatbox">
                                            <a href="{{ url('/'.$b->slug->slug) }}" target="_blank">
                                   <img data-src="{{ $b->image }}" alt="yachthampton_boat" class="img-fluid rounded boat-feature lazyload">
                               </a>
                               </div>
                                    <div class="row">
                                                <div class="col-lg-12">
                                                    <span class="popular-image">
                                                        {{--<img class="lazyload" data-src="{{ asset('/photos/2/cirlce-no.png') }}">--}}
                                                        <span class="post-no">{{ $b->sn_no }}</span>
                                                    </span>
                                                    <span class="boats_price_box">
                                                        <span class="boats_price_box_item">$@foreach($b->details as $bd)@if($bd->key == 'price'){{ $bd->value }}@endif @endforeach</span>
                                                        <span class="boats_price_box_item1">+@foreach($b->details as $bd)@if($bd->key == 'added_price'){{ $bd->value }}@endif @endforeach</span>
                                                    </span>
                                                </div>
                                            </div>
                                        <div class="blog-item-content bg-white p-5 boat_it">

                                            <div class="blog-item-meta bg-gray py-3">
                                                <h3 class="text-center mb-2">
                                                    <a href="{{ $b->slug->slug }}" target="_blank">{{ $b->page_name }}</a>
                                                </h3>

                                                <div class="text-center mt-2 mb-2">
                                                    <span class="text-black text-capitalize mr-3">
                                                        <i class="fas fa-map-marker-alt mr-1"></i> @foreach($b->details as $bd)@if($bd->key == 'harbor'){{ $bd->value }}@endif @endforeach
                                                    </span>
                                                </div>
                                                <div class="text-center">
                                                    <span class="text-black text-capitalize mr-3">
                                                        <i class="fa fa-arrows-h mr-2"></i> @foreach($b->details as $bd)@if($bd->key == 'size'){{ $bd->value }}@endif @endforeach FT
                                                    </span>
                                                    <span class="text-black text-capitalize mr-3">
                                                        <i class="fa fa-tachometer mr-2"></i> @foreach($b->details as $bd)@if($bd->key == 'speed'){{ $bd->value }}@endif @endforeach MPH
                                                    </span>
                                                    <span class="text-black text-capitalize mr-3">
                                                        <i class="fa fa-users mr-1"></i> @foreach($b->details as $bd)@if($bd->key == 'capacity'){{ $bd->value }}@endif @endforeach
                                                    </span>
                                                    <span class="text-black text-capitalize mr-3">
                                                        <i class="fa fa-bed mr-1"></i> @foreach($b->details as $bd)@if($bd->key == 'beds'){{ $bd->value }}@endif @endforeach
                                                    </span>
                                                </div>
                                                <div class="col text-center mt-3 pb-3">
                                                    <a href="{{ $b->slug->slug }}" target="_blank" class="btn btn-small btn-main btn-round-full center">Click For Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center">
                                <h4>No boats are added yet!</h4>
                            </div>
                        @endif

                    </div>
                </div>
            </section>
            @endforeach
        @endif

    <!-- Section About Start -->
    <section class="about-2 position-relative">
        <div class="container">
            {!! $page->content !!}
        </div>
    </section>

@endsection
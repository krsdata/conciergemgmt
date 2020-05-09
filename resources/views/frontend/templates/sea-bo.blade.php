@extends('frontend.mainframe')
@section('content')
<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
        <div id="content">
            <section class="position-relative bg-gray boat-topname">
                <h1 class="unit-1-heading text-center text-color" data-aos="fade-center" data-aos-duration="1000">{{ $page->page_name }}</h1>
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

</div>
@endsection
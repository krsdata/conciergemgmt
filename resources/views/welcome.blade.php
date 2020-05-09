@extends('frontend.mainframe')
@section('content')

<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
    
    @if(!empty($slider) && !empty($slider->slides))
    <section class="cms-homeslider">
         <div id="mainloder" class="mainloder" style="max-height: 100%;">
            <div class="subloder">
             <?php /*<!-- <div class="lds-ring"><div></div><div></div><div></div><div></div></div> 
             <img src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/ajax-loader.gif" />--> */ ?>
            </div> 
        </div>
        
        
        <div id="single-product" class="single-product owl-carousel owl-theme slide">
            <?php $count = 0; ?>
                @foreach($slider->slides as $ss)
                <?php /*
                <div class="item">
                    <img class="owl-lazy" data-src="{{ $ss->image_path }}" alt="yachthampton slides" style="max-height: 750px;"/>
                    <div class="carousel-caption d-none d-md-block mb-5">
                            <div class="block text-left mb-4">
                                <h2 class="animated fadeInUp mb-5 text-white">{{ $ss->title }}</h2>
                            </div>
                    </div>
                </div>
             <?php */  $count++; ?>
             @endforeach
        </div> 
         

        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="500" style="display: ;">
            <ol class="carousel-indicators">
                <?php $count = 0; ?>
                @foreach($slider->slides as $ss)
                <?php if(count($slider->slides) > 1) { ?>
                <li data-target="#myCarousel" data-slide-to="{{ $count }}" @if($count == 0)class="active"@endif></li>
                <?php } $count++; ?>
                @endforeach
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php $count = 0; ?>
                @foreach($slider->slides as $ss)
                    <div class="carousel-item @if($count == 0){{ 'active' }}@endif">
                        <img class="d-block w-100 lazyload" data-src="{{ $ss->image_path }}" alt="First slide"> <!-- style="max-height: 750px;"-->
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
    
    {!! $page->content !!}
    @if($instastatus->status == 1)
    <?php /* ?>
     <section id="insta-gallery">
        <div class="container">

            <div class="row justify-content-center">
                <h1 class="text-center text-light mt-5 mb-5 insta-head">Gallery From Our Instagram</h1>
            </div>
            
            <div class="row insta-row justify-content-center">
                
                @if($insta != null)
                    @foreach($insta as $i)
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4 insta-imagegrid">
                    <a href="#" class="fancybox openmodal" rel="{{ $i->id }}" data-toggle="modal" data-target="#modalnew">
                        <img data-src="{{ $i->images->thumbnail->url }}" class="zoom img-fluid lazyload" alt="">
                    </a>
                </div>
                    @endforeach
                @endif

            </div>
            <div class="row justify-content-center">
                <a class="btn btn-main btn-round-full text-center mt-5 mb-5" href="https://instagram.com/yachthampton" target="_blank" rel="noopener">FOLLOW US ON INSTAGRAM <i class="fab fa-instagram mr-2"></i></a>
            </div>
        </div>
    </section>
    <?php */ ?>
    @endif
    <?php /*
    <div class="modal fade" id="modalnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="min-height: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <!--a href="javascript:void(0)" target="_blank" class="modal-title" id="exampleModalLongTitle">See on Instagram</a-->
                    <label>Yachthampton Instagram</label>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding:0;">
                    <div id="insta-posts" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            @if($insta != null)
                                @foreach($insta as $i)
                                    <div class="carousel-item insta-carousel" id="slide-{{ $i->id }}">
                                        <div class="d-flex">
                                            <div class="col-sm-6 col-12 d-flex align-items-center justify-content-center text-center" style="background-color: #000;padding:0;">
                                                <img class="cms-instathumbnilimg w-100 lazyload" data-src="{{ $i->images->standard_resolution->url }}" alt="yachthampton instagram post">
                                            </div>
                                            <div class="col-sm-6 cms-instatitle" style="overflow-y:auto;">
                                                <div class="row">
                                                    <div class="pt-2 d-flex flex-wrap">
                                                    <div class="media" style="width:50%">
                                                        <div class="media-left mr-1">
                                                            <a href="https://instagram.com/yachthampton" target="_blank">
                                                                <img class="media-object"
                                                                     src="{{ $i->user->profile_picture }}"
                                                                     alt="{{ $i->user->full_name }}">
                                                            </a>
                                                        </div>
                                                        <div class="media-body my-auto" style="width:50%">
                                                            <p class="text-left font-weight-bold mt-1">{{ $i->user->full_name }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="insta-title">
                                                        <a href="{{ $i->link }}" target="_blank" class="modal-title" id="exampleModalLongTitle"><img src="{{ asset('/photos/Instagram_icon.png') }}" style="height:34px;width:32px;margin:0 3px 0 0;"> See on Instagram</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="media col-lg-12">
                                                        <div class="media-body my-auto">
                                                            <p class="text-left body-text"><small>{{ $i->caption->text }}</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="ml-3 mr-1">
                                                        <small class="ml-1">{{ date('M j, Y | H:i', $i->created_time) }}</small>
                                                        <p class="text-md">{{ $i->likes->count }}&nbsp;<i class="fa fa-heart text-danger"></i>&nbsp;&nbsp;{{ $i->comments->count }}&nbsp;<i class="fa fa-comments text-info"></i></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        
                    </div>
                    <div class="cmsinstanavbar">
                    <a class="carousel-control-prev" href="#insta-posts" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#insta-posts" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    */ ?>

</div>
    @endsection
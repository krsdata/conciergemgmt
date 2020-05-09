@extends('frontend.mainframe')
@section('content')
<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
 <section class="page-title featured-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                      <h1 class="text-capitalize mb-4 text-lg">{{ $page->page_name }}</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Yachthampton</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>

<section class="position-relative bg-gray pt-5 pb-3">
<div class="container">
<h2 class="text-center position-relative text-color mb-5 content-title">Newport</h2>
<h3 class="mt-5">Location</h3>
<p>Newport, RI is known as a New England summer resort and is famous for its historic mansions and its rich sailing history.From the harbour on the west, the city rises up a gentle hillside to a low plateau.</p>
<h3 class="mt-5">Best Time to Visit Newport, RI</h3>
<p>From June until August is the best time to soak up the sun aboard a Yacht Hampton Charter. In May and September, mild temperatures and few rain showers mean you'll have ideal weather for exploring the city's famous mansions.</p>
<h3 class="mt-5">Getting to Newport</h3>
<p>Our destination is conveniently located in the heart of New England, visit us by boat! Once you arrive, our downtown is best discovered on foot.</p>
<h3 class="mt-5">Things to Do in Newport</h3>
<p>Newport and The Classic Coast is a feast for the senses; a veritable banquet of salt air, dappled light,  and ocean breezes. Honestly, just spending some quiet time staring out at our horizon can feel life changing. Of course, if you want to turn up the volume, our coast is here to paddle, walk, cruise, and more. So whatever adventure floats your boat, go find it...and take your time. We’ll be here, opening our doors, cooking up classic meals, and preparing seats by the fire or the harbor’s edge when you’re ready to refuel.</p>
<h3 class="mt-5">Travel Distance</h3>
<p>3 h 30 min (120.5 mi) via I-95 N</p>
<h3 class="mt-5 mb-5">Marinas</h3>
<table class="table">
  <thead>
    <tr>
      <th class="w-25" scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Rate Per Foot</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
Newport Shipyard & Marina</td>
      <td>1 Washington St, Newport, RI 02840</td>
      <td>
            <b>NIGHTLY RATES (per foot)</b>  
            <p>January 1 - April 14: $2.75</p>
            <p>April 15 - April 30: $4.00</p>
            <p>May 1 - May 31: $5.50</p>
            <p>June 1 - September 30: $7.95</p>
            <p>October 1 - October 14: $6.00</p>
            <p>October 15 - November 14: quoted</p>
            <p>November 15 - December 31: $2.75</p>
            <p>"Touch & Go" - $3.00 (4 hour max)</p>

            <b>***MONTHLY RATES (per foot)</b>
            <p>January 1 - April 14: $75</p>
            <p>April 15 - April 30: $115</p>
            <p>May 1 - May 31: $145</p>
            <p>June 1 - September 30: $175</p>
            <p>October 1 - October 14: $175</p>
            <p>October 15 - November 14: $115</p>
            <p>November 15 - December 31: $75</p></td>
    </tr>
    <tr>
      <td>Newport Yachting Center Marina</td>
      <td>20 Commercial Wharf, Newport, RI 02840</td>
      <td>
          
        <b>April through June 9</b>
        <p>$3.25 per foot</p>
        <p>Memorial Day Weekend (2 night minimum)</p>
        <p>$4.00 per foot</p>
        <p>June 9 - June 27</p>
        <p>$6.00 per foot</p>
        <p>June 28 - July 6 (2 night minimum)</p>
        <p>$6.75 per foot</p>
        <p>July 7 - Sept 4</p>
        <p>$6.25 Sun - Thur</p>
        <p>$6.75 Fri - Sat & Holidays</p>

<b>September 5 through 19</b>
<p>Newport International Boat Show - CLOSED</p>
<b>September 20 to the end of the season</b>
<p>$3.25 per foot</p>
<p>Columbus Day Weekend (2 night minimum)</p>
<p>$4.00 per foot</p></td>
    </tr>
    <tr>
      <td>Goat Island Marina</td>
      <td>5 Marina Plaza, Newport, RI 02840</td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
</section>
<section class="position-relative bg-gray pb-3">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center mt-3 mb-4">Gallery</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newport/newport-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/newport/newport-1.jpg" src="/public/photos/2/destinations/newport/newport-1.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newport/newport-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/newport/newport-2.jpg" src="/public/photos/2/destinations/newport/newport-2.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newport/newport-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/newport/newport-3.jpg" src="/public/photos/2/destinations/newport/newport-3.jpg" class="img-fluid lazyload">
                    </a>
                </div>
            </div>
                <div class="row insta-row justify-content-center mt-4">
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newport/newport-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/newport/newport-4.jpg" src="/public/photos/2/destinations/newport/newport-4.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newport/newport-5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/newport/newport-5.jpg" src="/public/photos/2/destinations/newport/newport-5.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newport/newport-6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/newport/newport-6.jpg" src="/public/photos/2/destinations/newport/newport-6.jpg" class="img-fluid lazyload">
                    </a>
                </div>
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
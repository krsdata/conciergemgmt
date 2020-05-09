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
<h2 class="text-center position-relative text-color mb-5 content-title">Nantucket</h2>
<h3 class="mt-5">Location</h3>
<p>Nantucket Island, located just 30 miles off the coast of Cape Cod, feels like its own little world. An ideal one, where the beaches are always perfectly windswept, the lighthouses are straight out of a postcard, and life goes at a slower pace. Could it be “the best island in the world”? National Geographic said it was. Did you know you don’t even need a car on Nantucket? It’s too charming for cars. Swimming, shopping, fishing, and dining on fresh seafood are all glorious ways to spend a day, or a week, here.</p>
<h3 class="mt-5">Best Time to Visit Nantucket</h3>
<p>In the summer months, typically from early May until late August, the town is warm and welcoming, not just the weather!</p>
<h3 class="mt-5">Getting to Nantucket</h3>
<p class="mt-2">Traveling to and from Nantucket can be a wonderful experience, whether you arrive by boat or by plane. Let us take you there!</p>
<h3 class="mt-5">Things to Do in Nantucket</h3>
<p>Windswept beaches, sand dunes, blinking lighthouses and a charming pace of life await on this 50-square mile island. The world's former top whaling port is now designated a National Historic District. Leave the car and take the shuttle or bike around. Seaside cottages, old whaling captains' mansions and historic harbors contain quaint inns, boutique stores, chowder shacks and upscale dining delights. Swim, surf or load up the tackle for Nantucket's excellent striper, bluefish and bonito fishing.Windswept beaches, sand dunes, blinking lighthouses and a charming pace of life await on this 50-square mile island. Leave the car and take the tender or charter to explore the historic harbors. Once it is time to go overboard the boutique stores, chowder shacks and upscale dining delights can provide you and your party with unforgettable experiences. Swim or load up the tackle for Nantucket's excellent striper, bluefish and bonito fishing.</p>
<h3 class="mt-5">Travel Distance</h3>
<p>6 h 49 min (222.9 mi) via I-95 N</p>
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
      <td>Vineyard Haven Marina</td>
      <td>1 Swain's Wharf Rd, Nantucket, MA 02554</td>
      <td>
          <p>Dock: $1.95/ft - $12.25/ft</p>
      </td>
    </tr>
    <tr>
      <td>Madaket Marine</td>
      <td>20 N Cambridge St, Nantucket, MA 02554</td>
      <td>$</td>
    </tr>
    <tr>
      <td>Bass River Marina</td>
      <td>140 Main St, West Dennis, MA 02670</td>
      <td>$</td>
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
                     <a href="/public/photos/2/destinations/nantucket/nantucket-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/nantucket/nantucket-1.jpg" src="/public/photos/2/destinations/nantucket/nantucket-1.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/nantucket/nantucket-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/nantucket/nantucket-2.jpg" src="/public/photos/2/destinations/nantucket/nantucket-2.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/nantucket/nantucket-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/nantucket/nantucket-3.jpg" src="/public/photos/2/destinations/nantucket/nantucket-3.jpg" class="img-fluid lazyload">
                    </a>
                </div>
            </div>
                <div class="row insta-row justify-content-center mt-4">
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/nantucket/nantucket-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/nantucket/nantucket-4.jpg" src="/public/photos/2/destinations/nantucket/nantucket-4.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/nantucket/nantucket-5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/nantucket/nantucket-5.jpg" src="/public/photos/2/destinations/nantucket/nantucket-5.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/nantucket/nantucket-6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/nantucket/nantucket-6.jpg" src="/public/photos/2/destinations/nantucket/nantucket-6.jpg" class="img-fluid lazyload">
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
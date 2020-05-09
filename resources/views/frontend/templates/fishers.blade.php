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
<h2 class="text-center position-relative text-color mb-5 content-title">Fishers Island</h2>
<h3 class="mt-5">Location</h3>
<p>Fishers Island, New York, located at the eastern entrance to Long Island Sound. It lies approximately two miles off the south-eastern coast of Connecticut opposite Stonington.</p>
<h3 class="mt-5">Getting to Fishers Island</h3>
<p>There is no direct connection from Long Island to Fishers Island. However, you can take the bus to Riverhead County Center, take the bus to Orient Point Ferry Dock, take the walk to Orient Point, take the car ferry to New London, then take the car ferry to Fishers Island. Alternatively, you can take a vehicle from Centereach to Fishers Island via Ronkonkoma LIRR, Ronkonkoma, Penn Station, New York Penn Station, New London Union Station, and New London in around 7h 38m.</p>
<p>For more details directions to reach Fishers Island please visit: <a href="https://www.fishersislandclub.com/travel-to-fishers-island/directions-to-fishers-island-222.html" target="_blank" rel="noopener">Directions to Fishers Island</a></p>
<h3 class="mt-5">Things to do in Fishers Island</h3>
<p>Fishers Island has some of the hottest nightlife, attractions, and things to do on Long Island, and if you're looking to go out and have a good time, you won't have to go far. From family fun activities, to singles and dating events, and everything in between – there's truly something for everyone to do in Fishers Island, and across Long Island.</p>
<p>With beautiful summer days all year round and the prime location between Downtown Miami and South Beach, the list of attractions to visit are endless. The deluxe, world-class amenities on-site are available for you to live the vacation of your dreams whether it includes sunbathing at the beach or even a yacht excursion with the family. For those who seek to explore beyond the island for new adventures, there are various attractions nearby for you to discover.</p>
<h3 class="mt-5">Travel Distance</h3>
<p>3 h 17 min (73.0 mi) via Cross Sound Ferry</p>
<p>4 h 50 min (203.7 mi) via I-495 W and I-95 N</p>
<p>4 h 58 min (208.8 mi) via I-95 N</p>
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
      <td>Pine Island Marina</td>
      <td>49 Central Ave, Fishers Island, NY 06390</td>
      <td>
        <b>Dock</b> 
        <p>$3.50/ft - $6/ft.</p>
        <b>Mooring</b> 
        <p>Day Trips Only.</p>
        <p>Day Trip. 26' and under $35.</p></td>
    </tr>
    <tr>
      <td>Pirate's Cove Marine Inc</td>
      <td>12 Peninsula Rd, Fishers Island, NY 06390</td>
      <td>
        
        <p>$2.00/ft daily plus electric.</p>
        <p>$25/ft monthly plus electric.</p>
</td>
    </tr>
    <tr>
      <td>Pine Island Marina</td>
      <td>916 Shennecossett Rd, Groton, CT 06340</td>
      <td>
        <b>Dock</b>
        <p>$3/ft - $3.50/ft</p>
        <b>Mooring</b> 
        <p>$2/ft - $2.50/ft</p>
        </td>
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
                     <a href="/public/photos/2/destinations/fishers-island/fishers-island-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/fishers-island/fishers-island-1.jpg" src="/public/photos/2/destinations/fishers-island/fishers-island-1.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/fishers-island/fishers-island-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/fishers-island/fishers-island-2.jpg" src="/public/photos/2/destinations/fishers-island/fishers-island-2.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/fishers-island/fishers-island-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/fishers-island/fishers-island-3.jpg" src="/public/photos/2/destinations/block-island/fishers-island-3.jpg" class="img-fluid lazyload">
                    </a>
                </div>
            </div>
                <div class="row insta-row justify-content-center mt-4">
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/fishers-island/fishers-island-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/fishers-island/fishers-island-4.jpg" src="/public/photos/2/destinations/fishers-island/fishers-island-4.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/fishers-island/fishers-island-5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/fishers-island/fishers-island-5.jpg" src="/public/photos/2/destinations/fishers-island/fishers-island-5.jpg" class="img-fluid lazyload">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/fishers-island/fishers-island-6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img data-src="/public/photos/2/destinations/fishers-island/fishers-island-6.jpg" src="/public/photos/2/destinations/fishers-island/fishers-island-6.jpg" class="img-fluid lazyload">
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
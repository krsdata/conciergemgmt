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
<h2 class="text-center position-relative text-color mb-5 content-title">Old Saybrook</h2>
<h3 class="mt-5">Location</h3>
<p>Old Saybrook is a town in Middlesex County, Connecticut, United States. The population was 10,242 at the 2010 census. It contains the incorporated borough of Fenwick, as well as the census-designated places of Old Saybrook Center and Saybrook Manor.General William Hart House & Museum. Here is a quick list of things to explore in Old Saybrook.</p>
<h3 class="mt-5">Getting to Old Saybrook</h3>
<p>Given it's an island, at some point a plane or a ferry will be involved. There are a surprising amount of options for such a small place. I actually find getting there is part of the fun. It's a quintessential New England experience without all the hubbub of Nantucket or Martha's Vineyard. If you want to bring a car over taking a ferry out of Pt. Judith is your only option (make sure to book a car reservation in advance).</p>
<h3 class="mt-5">Things to do in Old Saybrook</h3>
<p>&bull; Fort Saybrook Monument Park.</p>
<p>&bull; Katharine Hepburn Cultural Arts Center.</p>
<p>&bull; Public beaches, boat launches, boat charters, fishing.</p>
<p>&bull; Saybrook Point Inn & Spa.</p>
<h3 class="mt-5">Travel Distance</h3>
<p>2 h 45 min (84.1 mi) via Cross Sound Ferry</p>
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
      <td>Harbor One Marina</td>
      <td>26 Bridge Street
        Old Saybrook, CT 06475</td>
      <td>
          <p>&bull; Memorial Day Weekend to October 1</p>

        <b>0-59ft</b> 
        <p>$3.50/ft per day + electric (Weekly: $3.00/ft per day + electric)</p>
        <b>60+ ft</b>
        <p>$5.00/ft per day + electric</p>
        <p>&bull; Off Season May 1st to Memorial day weekend & October 1 to November 1</p>
        <b>0-59ft</b>
        <p>$2.50/ft per day + electric</p>
        <b>60+ ft</b>
        <p>$3.00/ft per day + electric</p></td>
    </tr>
    <tr>
      <td>Saybrook Point Marina</td>
      <td>2 Bridge St, Old Saybrook, CT 06475</td>
      <td><p>$3.25/ft - $3.75/ft</p></td>
    </tr>
    <tr>
      <td>Oak Leaf Marina Inc</td>
      <td>218 Ferry Rd, Old Saybrook, CT 06475</td>
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
                     <a href="/public/photos/2/destinations/old-saybrook/old-saybrook-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/old-saybrook/old-saybrook-1.jpg" src="/public/photos/2/destinations/old-saybrook/old-saybrook-1.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/old-saybrook/old-saybrook-2.jpg" src="/public/photos/2/destinations/old-saybrook/old-saybrook-2.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/old-saybrook/old-saybrook-3.jpg" src="/public/photos/2/destinations/old-saybrook/old-saybrook-3.jpg">
                    </a>
                </div>
            </div>
                <div class="row insta-row justify-content-center mt-4">
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/old-saybrook/old-saybrook-4.jpg" src="/public/photos/2/destinations/old-saybrook/old-saybrook-4.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/old-saybrook/old-saybrook-5.jpg" src="/public/photos/2/destinations/old-saybrook/old-saybrook-5.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/old-saybrook/old-saybrook-6.jpg" src="/public/photos/2/destinations/old-saybrook/old-saybrook-6.jpg">
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
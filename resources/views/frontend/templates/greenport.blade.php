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
  <h2 class="text-center position-relative text-color mb-5 content-title">Greenport</h2>
  <h3 class="mt-5">Location</h3>
  <p class="mt-2">Located on the northern fork of Long Island, Greenport proves that you don’t have to go very far to get away. Settled in the 1600s by a small band of adventurers, furthering the commercial development of Long Island. With such a rich history it’s easy to imagine the alluring nature of Greenport.</p>
  <h3 class="mt-5">Getting to Greenport</h3>
  <p class="mt-2">LIRR is a great way to get to Greenport but once you're in Greenport you'll need a car if you want to visit any of the area wineries or if you want to travel around the area.</p>
  <p>The cheapest and quickest way to get from Manhattan to Greenport is to drive which costs. There is a direct bus departing from 3 Av/E 44 St and arriving at Greenport. Services depart every four hours and operate every day.</p>
  <h3 class="mt-5">Things to Do in Greenport</h3>
  <p class="mt-2">After you’ve gotten your fill of the water and the views it’s time to fill up your stomach and stop by one of the many independent restaurants, all right within walking distance. Greenport cuisine is top choice for foodies who prefer the farm-to-table method and enjoy trying out delicious foods, and wines, from local producers. Voted in 2011 by Forbes as, “One of America’s Prettiest Towns,” it is impossible not to fall in love with Greenport and its seaside views.</p>
  <p>Greenport possesses the perfect mixture of historical allure, eclectic shops, and delicious food choices ranging from more upscale to very economical, all thrown together in a friendly, little, seaside, walk around town. Voted in 2011 by Forbes as, &ldquo;One of America&rsquo;s Prettiest Towns,&rdquo; it is impossible not to fall in love with Greenport.</p>
  <h3 class="mt-5">Travel Distance</h3>
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
        <td>Safe Harbor Greenport</td>
        <td>500 Beach Rd, Greenport, NY 11944</td>
        <td>$</td>
      </tr>
      <tr>
        <td>Mitchell Park & Marina</td>
        <td>500 Beach Rd, Greenport, NY 11944</td>
        <td><p>Dock</p>
          <p>$2/ft - $4/ft</p></td>
      </tr>
  	
  	<tr>
        <td>Townsend Manor Inn</td>
        <td>714 Main Street
  Greenport, NY 11944</td>
        <td>
      <b>April 15 - May 24 | Oct. 9 -Nov. 1</b>
      <b>TRANSIENT DOCKAGE RATES</b>
      <p>25' Minimum</p>
      <p>$1.50 per foot</p>
      <p>2 WEEK MINIMUM RATE</p>
      <p>$1.00 per foot</p>
      <p>1 MONTH MINIMUM RATE</p>
      <p>.75 per foot</p>
      <p>SEASONAL RATE</p>
      <p>$150.00 per foot per season</p>
      <p>-25'MINIMUM-</p>
        </td>
      </tr>
  	
    </tbody>
  </table>
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
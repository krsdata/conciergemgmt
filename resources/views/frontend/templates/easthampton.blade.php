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
<h2 class="text-center position-relative text-color mb-5 content-title">East Hampton</h2>
<h3 class="mt-5">Location</h3>
<p class="mt-2">Take one of the Yacht Hampton Charters to the East End to get to your Hamptons destination.</p>
<h3 class="mt-5">Best Time to Visit East Hampton</h3>
<p class="mt-2">For a respite from the crowds, the best time to travel to the Hamptons is before the tourists arrive at Memorial Day or after the end of the summer season at Labor Day.</p>
<h3 class="mt-5">Getting to East Hampton</h3>
<p class="mt-2">The cheapest and fastest option for getting to the Hamptons is to take a train on the Montauk Line of the Long Island Rail Road (LIRR) from Penn Station in Manhattan. The Ronkonkoma branch makes stops on the North Fork, all the way out to Greenport, while the Montauk branch hits stops along the South Fork, including East Hampton, Amagansett and Montauk.</p>
<h3 class="mt-5">Things to Do in East Hampton</h3>
<p class="mt-2">East Hampton is the perfect summer getaway. You can still enjoy the beach and dine in the restaurants along the coast.</p>
<p>There’s far more to the Hamptons than just drinking rosé while lying on a giant swan-shaped pool float. Come aboard the Yacht Hamptons Charter boats for a unique Hampton’s experience.</p>
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
      <td>East Hampton Point</td>
      <td>19 Boat Yard Rd, East Hampton, NY 11937</td>
      <td>
          <b>2019 Transient Reservation Rates</b>
      <p>Monthly $135/ft.</p>
 <p>Weekly $35/ft.</p>
  <p>Daily $5.50/ft.</p>
   <p>Hourly $2/ft.</p>
   <b>Electrical Connection</b>
   <p>30Amp, Daily: $25, Weekly: $125, Monthly: $600</p>
   <p>50Amp or 2x30Amp, Daily: $30, Weekly: $150, Monthly: $725</p>
   <p>100Amp or 2x50Amp, Daily: $50, Weekly: $250, Monthly: $1,200</p>
      </td>
    </tr>
    <tr>
      <td>Three Mile Harbor</td>
      <td>6 Boat Yard Rd, East Hampton, NY 11937</td>
      <td>
          <p>Three Mile Harbor Marina receives transient boaters between the operating hours of 9:00am and 5:00pm, 7 days a week, in season. Check-in time is at 11:00am</p>
          
    </td>
    </tr>
    <tr>
      <td>Harbor Marina of East Hampton</td>
      <td>423 Three Mile Harbor Hog Creek Rd, 39 Gann Rd, East Hampton, NY 11937</td>
      <td><p>Dock- $3.95/ft off-peak; $5.95/ft peak</p>
<p>Mooring- Not Offered</p>
<p>Day Trip- $1.75/ft per hour w/ $40 minimum</p></td>
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
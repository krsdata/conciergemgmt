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
                              <li class="list-inline-item"><a href="{{ url('/').$page->slug }}" class="text-white-50">Yachthampton</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  <style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>

  <section class="position-relative bg-gray pt-5 pb-3">
  <div class="container">
  <h2 class="text-center position-relative text-color mb-5 content-title">Mystic Seaport</h2>
  <h3 class="mt-5">Location</h3>
  <p>Nestled halfway between New York and Boston, Mystic is the perfect getaway. It consists of more than 60 historic buildings, most of them rare commercial structures and meticulously restored.</p>
  <h3 class="mt-5">Best Time to Visit Mystic Seaport</h3>
  <p>Average temperatures in Mystic vary drastically. The area is somewhat temperate — in the 40th percentile for pleasant weather — compared to tourist destinations worldwide.</p>
  <h3 class="mt-5">Things to Do in Mystic Seaport</h3>
  <p>Many enjoy observing the restoration of historic sea vessels.</p>
  <p>Experience the diverse culinary landscape of our award winning food and drink scene. With farm and sea to table, Italian, international cuisine, classic pub fare and an array of sweet shops, Downtown Mystic is a foodie’s dream.</p>
  <p>The district boasts more than 80 independently-owned shops and galleries offering clothing, gifts, art, jewelry, books and more.</p>
  <p>Experience the Mystic River on a cruise, using Yacht Hampton’s rented kayaks or paddle boards. Attend a host of annual events!</p>
  <h3 class="mt-5">Getting to Mystic Seaport</h3>
  <p>From New York City and Points Traveling North on I-95</p>
  <p>Take Exit 90 off I-95.</p>
  <p>From right lane, turn right onto Route 27 South.</p>
  <p>Proceed approximately one mile.</p>
  <p>Parking for Mystic Seaport is on the left.</p>
  <p>Long Island residents can reach New London via Cross Sound Ferry.</p>
  <h3 class="mt-5">Travel Distance</h3>
  <p>2 h 36 min (74.1 mi) via Cross Sound Ferry</p>
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
        <td>Mystic Seaport Marina</td>
        <td>75 Greenmanville Ave.
  Mystic, CT 06355</td>
        <td>$3.25 per foot</td>
      </tr>
      <tr>
        <td>Seaport Marine</td>
        <td>2 Washington St, Mystic, CT 06355</td>
        <td>Dock: $2.75/ft - $4.50/ft</td>
      </tr>
      <tr>
        <td>Mystic Downtown Marina</td>
        <td>31 Water St, Mystic, CT 06355</td>
        <td>$</td>
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
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
  <h2 class="text-center position-relative text-color mb-5 content-title">Montauk</h2>
  <h3 class="mt-5">Location</h3>
  <p>At the easternmost end of Long Island, Montauk has more than 5,000 acres of parks and beaches, making it the perfect place for an idyllic getaway from nearby New York City. You’ll spend your days sunbathing, swimming, or sipping drinks upon a Yacht Hampton Charter, and nature lovers will find no shortage of outdoor activities at this bucolic paradise.</p>
  <h3 class="mt-5">Best Time to Visit Montauk</h3>
  <p>There is never a bad time to visit Montauk although we do recommend the summer.</p>
  <p>Montauk is 120 miles away from New York City, making it a popular summer destination for New Yorkers. You'll get to take advantage of the nice weather, abundant nature, and amazing activities all on us.</p>
  <h3 class="mt-5">Things to Do in Montauk</h3>
  <p>Discover Montauk's natural beauty by swimming in the ocean off the stern of our  boats here at Yacht Hamptons Charters! Montauk also comes with some famous beaches great for surfing, One of the most famous is Ditch Plains. Take a look over the beach on the buffs or try one of the famous lobster rolls. Check out main street and all the unique store they have to offer from surf shops to restaurants.</p>
  <h3 class="mt-5">Travel Distance</h3>
  <p>35 min (drive)</p>
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
        <td>Montauk Marine Basin</td>
        <td>426 W Lake Dr, Montauk, NY 11954</td>
        <td>
          <b>Up to 30 feet</b>
          <p>$20.00/hour</p>
          <b>31 ft and over</b>
          <p>$25.00/hour</p>
          <p>Minimum Charge $30.00</p>
          
      </td>
      </tr>
      <tr>
        <td>Sportsmans Dock</td>
        <td> 414 W Lake Dr, Montauk, NY 11954</td>
        <td>
              <b>Standard Rates</b>
              <p>To 40': $4.50/foot daily</p>
              <p>40' - 65': $5.00/foot daily</p>
              <b>Holiday Rates</b>
              <p>To 40': $4.50/foot daily</p>
              <p>40' - 65': $5.00/foot daily</p>
              <p>July 4th and Labor Day 3 night Minimum - Advance Payment Required</p>
  </td>
      </tr>
      <tr>
        <td>Gurneys Star Island</td>
        <td>32 Star Island Rd, Montauk, NY 11954</td>
        <td>
           <b>Dock</b>
          <p>$7 - $9/ft 80'+</p>
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
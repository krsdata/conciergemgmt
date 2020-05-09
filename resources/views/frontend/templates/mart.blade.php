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
                              <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                              <li class="list-inline-item"><span class="text-white">/</span></li>
                              <li class="list-inline-item"><a href="{{ url('/').$page->slug }}" class="text-white-50">{{ $page->title }}</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  <style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>

  <section class="position-relative bg-gray pt-5 pb-3">
  <div class="container">
  <h2 class="text-center position-relative text-color mb-5 content-title">Martha&rsquo;s Vineyard</h2>
  <h3 class="mt-5">Location</h3>
  <p>Martha's Vineyard is an island located south of Cape Cod in Massachusetts that is known for being an affluent summer colony. Martha's Vineyard includes the smaller adjacent Chappaquiddick Island, which is usually connected to the Vineyard.</p>
  <p>Martha’s Vineyard is a very charming, beautiful place with a great sense of community and diversity. Martha’s Vineyard is comprised of six towns spread around 100 square miles, each town has its own flavor. Travel and explore using Yacht Hapmton’s Charters!</p>
  <h3 class="mt-5">Best time to Travel Martha&rsquo;s Vineyard</h3>
  <p>The best time to visit the island is from May until September, when the Atlantic Ocean ensures temperatures around the low 70s and rarely above 90 degrees. The ocean is warm enough for swimming, and using the water toys provided by Yacht Hampton.</p>
  <h3 class="mt-5">Getting to Martha&rsquo;s Vineyard</h3>
  <p>The island, the largest off Massachusetts’ coast, is only accessible by boat or air. Let Yacht Hampton take you there!</p>
  <h3 class="mt-5">Things to Do in Martha&rsquo;s Vineyard</h3>
  <p>Relax on the sandy beaches or hit the water using our water toy rentals. Visit the scenic lighthouses, located across the island.</p>
  <h3 class="mt-5">Travel Distance</h3>
  <p>5 h 36 min (206.3 mi) via I-95 N</p>
  <p>6 h 13 min (250.3 mi) via I-395 N</p>
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
  Montauk Marine Basin</td>
        <td>426 W Lake Dr, Montauk, NY 11954</td>
        <td>
            
              <p>Up to 30 feet $20.00/hour</p>
              <p>31 ft and over $25.00/hour</p>   
              <p>Minimum Charge $30.00</p></td>
      </tr>
      <tr>
        <td>Sportsmans Dock</td>
        <td>414 W Lake Dr, Montauk, NY 11954</td>
        <td>
          
          <b>Standard Rates</b>
          <p>To 40' $4.50/foot daily</p>
          <p>40' - 65' $5.00/foot daily</p>
          <b>Holiday Rates</b>
          <p>To 40' $4.50/foot daily</p>
          <p>40' - 65' $5.00/foot daily</p>
          <p>July 4th and Labor Day 3 night Minimum - Advance Payment Required</p>
          
          </td>
      </tr>
      <tr>
        <td>Gurneys Star Island </td>
        <td>32 Star Island Rd, Montauk, NY 11954</td>
        <td>
  <p>Dock: $7 - $9/ft 80'+</p>

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
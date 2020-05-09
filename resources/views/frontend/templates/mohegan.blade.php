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
  <h2 class="text-center position-relative text-color mb-5 content-title">Mohegan Sun</h2>
  <h3 class="mt-5">Location</h3>
  <p class="mt-2">Mohegan Sun is an American casino, with 364,000 square feet of gambling space. Operated by the Mohegan Tribe, it is located on 240 acres of reservation land along the banks of the Thames River in Uncasville, Connecticut.</p>
  <h3 class="mt-5">Best Time to Travel Mohegan Sun</h3>
  <p class="mt-2">Friday and Saturday nights are the most crowded time in Mohegan Sun. Hotels prices are typically higher during events, stay aboard the Yacht Hampton Charters!</p>
  <h3 class="mt-5">Getting to Mohegan Sun</h3>
  <p class="mt-2">Amtrak Northeast Regional operates a train from New York to Mohegan Sun Arena every 3 hours. Tickets cost $45 - $95 and the journey takes 2h 54m. Amtrak also services this route once daily. Alternatively, Greyhound USA operates a bus from New York to Mohegan Sun Arena 3 times a day. Tickets cost $21 - $30 and the journey takes 4h 25m.</p>
  <p>The quickest and cheapest way to get from New York to Mohegan Sun Arena is to drive which costs $12 - $19 and takes 2h 32m.</p>
  <h3 class="mt-5">Things to Do in Mohegan Sun</h3>
  <p class="mt-2">Mohegan Sun is undoubtedly massive, with things to discover around every turn. There are high-end shops that make for some great window shopping, three huge casinos with their own themes and games, great bars and restaurants, and events happening nearly every day.</p>
  <h3 class="mt-5">Travel Distance</h3>
  <p>2 h 40 min (77.3 mi) via Cross Sound Ferry</p>
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
        <td></td>
        <td></td>
        <td>$</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>$</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
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
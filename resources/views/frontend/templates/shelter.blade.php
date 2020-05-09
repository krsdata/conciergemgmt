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
<h2 class="text-center position-relative text-color mb-5 content-title">Shelter Island</h2>
<h3 class="mt-5">Location</h3>
<p class="mt-2">Shelter Island, in the language of its original inhabitants, the Manhansets, meant “an island protected by islands.” It lies between the North and South Forks of Long Island. But geological particulars aside, the sentiment and the feeling of protection from overcrowding and rough seas remains to this day.</p>
<h3 class="mt-5">Getting to Shelter Island</h3>
<p class="mt-2">No matter what mode of transportation you fancy, Shelter Island will be waiting at the end of your destination with a welcome greeting and luxurious accommodations!</p>
<p>You can come here by Car, Bus, Train or by Air.</p>
<h3 class="mt-5">Things to Do in Shelter Island</h3>
<p class="mt-2">Half-mile-long Crescent Beach has the island’s best sunsets. The Mashomack Preserve occupies the entire southeastern peninsula of Shelter Island, fringed with 12 miles of undeveloped coastline. The preserve has a water trail that explores the creeks and coast in Coelce Harbor.</p>
<h3 class="mt-5">Travel Distance</h3>
<h3 class="mt-5 mb-5">Marinas</h3>
<div class="table-responsive-lg">
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
      <td>Shelter Island Yacht Club</td>
      <td>12 Chequit Ave, Shelter Island Heights, NY 11965</td>
      <td>Maximum stay is limited to three (3) days for guests and transients.
          <b>Dock</b>
            <p>$3.25/ft - $3.75/ft</p>
           
    </td>
    </tr>
    <tr>
      <td>Coecles Harbor Marina & Boatyard</td>
      <td>18 Hudson Ave, Shelter Island, NY 11964</td>
      <td>
            <b>Dock</b>
            <p>$3.50/ft - $87.50/ft</p>
            <b>Mooring</b>
            <p>$1/ft - $30/ft</p>
            </td>
    </tr>
    <tr>
      <td>Island Boatyard Inc</td>
      <td>65 Menantic Rd, Shelter Island, NY 11964</td>
      <td>
          <p>Overnight transient slips are also available.</p>
          <b>Dock</b>
<p>$2/ft - $5.50/ft</p></td>
    </tr>
  </tbody>
</table>
</div></div>
</section>

    <!-- Section About Start -->
    <section class="about-2 position-relative">
        <div class="container">
            {!! $page->content !!}
        </div>
    </section>
</div>

@endsection
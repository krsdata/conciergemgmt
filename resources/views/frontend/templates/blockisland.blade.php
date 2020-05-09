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
<h2 class="text-center position-relative text-color mb-5 content-title">Block Island</h2>
<h3 class="mt-5">Location</h3>
<p class="mt-2">Block Island is just south of mainland Rhode Island. Its 1800s red-brick Southeast. Sandy beaches include popular Crescent Beach, on the east coast. Getting here is half the adventure of the vacation....With regularly scheduled transportation to and from the island, visitors can discover Block Island in just one day or stay and experience the vacation of a lifetime.</p>
<p class="mt-2">Block Island maintains two harbors and is well-known as one of New England's premier boating destinations.</p>
<h3 class="mt-5">Getting to Block Island</h3>
<p class="mt-2">Given it's an island, there are still a surprising amount of options for such a small place. Getting there is a part of the fun. It's a quintessential New England experience without all the hubbub of Nantucket or Martha's Vineyard.</p>
<h3 class="mt-5">Things to do in Block Island</h3>
<p class="mt-2">There is more to Block Island than gorgeous beaches. With more than 50 stores and specialty shops,the Island's plentiful shops offer casual souvenirs as well as unique gifts from around the world and antiques.</p>
<p class="mt-2">Dining experiences on Block Island are as diverse as they are delicious. Restaurants offer everything from five-star dining, rated wine lists, local seafood.</p>
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
      <td>New Harbor Boat Basin</td>
      <td>221 Jobs Hill Rd, New Shoreham, RI 02807</td>
      <td>
        <b>May 27 through June 28</b>
        <p>$5.00 per foot</p>
        <b>June 29 - Labor Day</b>
        <p>$6.00 per foot</p>
        <b>September 3 through Columbus Day</b>
        <p>$5.00 per foot</p>
    </td>
    </tr>
    
    <tr>
 
      <td>Champlin's Marina</td>
      <td>80 West Side Road, Block Island, RI 02807</td>
      <td>
          
        <b>29 ft and under</b>
        <p>$5.75 per ft per night</p>
        <b>30 - 65 ft</b>
        <p>$6.00 per ft per night</p>
        <b>66 ft and over</b>
        <p>$6.50 per ft per night</p>
    </td>
    </tr>
	
	<tr>
 
      <td>Payne's Dock</td>
      <td>133 Ocean Ave, New Shoreham, RI 02807</td>
      <td>
        <b>For Vessels up to 34 ft</b>
        <p>$4.25 per ft/night W/ $102 min.</p>
        <b>For Vessels 34 - 49 ft</b>
        <p>$4.75 per ft/night</p>
        <b>For Vessels 50 - 69 ft</b>
        <p>$5.00 per ft/night</p>
        <b>For Vessels OVER 70 ft</b>
        <p>$5.50 per ft/night</p>
        <p>$2.00 per ft/day (NO OVERNIGHT)</p></td>
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
                     <a href="/public/photos/2/destinations/block-island/block-island-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/block-island/block-island-1.jpg" src="/public/photos/2/destinations/block-island/block-island-1.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/block-island/block-island-2.jpg" src="/public/photos/2/destinations/block-island/block-island-2.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/block-island/block-island-3.jpg" src="/public/photos/2/destinations/block-island/block-island-3.jpg">
                    </a>
                </div>
            </div>
                <div class="row insta-row justify-content-center mt-4">
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/block-island/block-island-4.jpg" src="/public/photos/2/destinations/block-island/block-island-4.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/block-island/block-island-5.jpg" src="/public/photos/2/destinations/block-island/block-island-5.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/block-island/block-island-6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/block-island/block-island-6.jpg" src="/public/photos/2/destinations/block-island/block-island-6.jpg">
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
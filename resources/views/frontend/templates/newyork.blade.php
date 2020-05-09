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
                    <!--     <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Yachthampton</a></li>
                        </ul> !-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>

<section class="position-relative bg-gray pt-5 pb-3">
<div class="container">
<h2 class="text-center position-relative text-color mb-5 content-title">New York City</h2>
<h3 class="mt-5">Location</h3>
<p class="mt-2">Block Island is just south of mainland Rhode Island. Its 1800s red-brick Southeast Lighthouse sits atop the dramatic clay cliffs of Mohegan Bluffs, with a rocky beach below. Sandy beaches include popular Crescent Beach, on the east coast. The island&rsquo;s northern tip features North Lighthouse, built in 1867, and Sachem Pond, home to gulls and swallows. Migratory songbirds visit the Block Island National Wildlife Refuge.</p>
<p class="mt-2">Getting here is half the adventure of the vacation....With regularly scheduled transportation to and from the island, visitors can discover Block Island in just one day or stay and experience the vacation of a lifetime.</p>
<p class="mt-2">Block Island maintains two harbors and is well-known as one of New England's premier boating destinations.</p>
<h3 class="mt-5">Getting to Block Island</h3>
<p class="mt-2">Given it's an island, at some point a plane or a ferry will be involved and there are a surprising amount of options for such a small place. I actually find getting there part of the fun. It's a quintessential New England experience without all the hubbub of Nantucket or Martha's Vineyard.</p>
<p class="mt-2">If you want to bring a car over taking a ferry out of Pt. Judith is your only option (make sure to book a car reservation in advance).</p>
<h3 class="mt-5">Things to do in Block Island</h3>
<p class="mt-2">There is more to Block Island than gorgeous beaches. With more than 50 stores and specialty shops, and numerous art galleries, Block Island offers a diverse shopping experience. The Island's plentiful shops offer casual souvenirs as well as unique gifts from around the world and antiques.</p>
<p class="mt-2">Feel like getting some exercise? Activities include bike riding, hiking, horseback riding, birdwatching, snorkelling, fishing, parasailing, kayaking and sailing.</p>
<p class="mt-2">Dining experiences on Block Island are as diverse as they are delicious. Restaurants offer everything from five-star dining and Wine Spectator rated wine lists to local seafood served at picnic tables.</p>
<h3 class="mt-5">Travel Distance</h3>
<h3 class="mt-5 mb-5">Marinas</h3>
</div>
</section>
<section class="position-relative bg-gray pb-3">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center mt-3 mb-4">Gallery</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newyorkcity/new-york-1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/newyorkcity/new-york-1.jpg" src="/public/photos/2/destinations/newyorkcity/new-york-1.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newyorkcity/new-york-2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/newyorkcity/new-york-2.jpg" src="/public/photos/2/destinations/newyorkcity/new-york-2.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newyorkcity/new-york-3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/newyorkcity/new-york-3.jpg" src="/public/photos/2/destinations/newyorkcity/new-york-3.jpg">
                    </a>
                </div>
            </div>
                <div class="row insta-row justify-content-center mt-4">
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newyorkcity/new-york-4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/newyorkcity/new-york-4.jpg" src="/public/photos/2/destinations/newyorkcity/new-york-4.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newyorkcity/new-york-5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/newyorkcity/new-york-5.jpg" src="/public/photos/2/destinations/newyorkcity/new-york-5.jpg">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 thumb mb-4">
                     <a href="/public/photos/2/destinations/newyorkcity/new-york-6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="/public/photos/2/destinations/newyorkcity/new-york-6.jpg" src="/public/photos/2/destinations/newyorkcity/new-york-6.jpg">
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




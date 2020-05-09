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
                    <!--    <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Yachthampton</a></li>
                        </ul> !-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>.featured-image{background:url("{{ $page->featured_image }}") no-repeat 50% 50%;background-size:cover} </style>

<section class="position-relative bg-gray pb-4 pt-4">
<div class="container">
<h2 class="text-center position-relative text-color mb-4 content-title">Yacht Hampton Weather Policy</h2>
<p class="ptr">We strive to provide the best possible Hamptons boating experience you can ever wish for. We have a no-rain and small craft advisory policy so we do not set sail if it is currently raining or rain is imminent in the forecast. We also obviously care about your safety, so we will not set sail in any inclement weather and during any small craft advisory. We will generally make those decisions 2-hours before sailing time. If our captain decides not to set sail that day, due to rain or if a small craft advisory is in affect, you will have an option for a rain date or a full refund.</p>
<p>We ask that when our guests book a boat they should be certain that they will enjoy the boat that day. Once a client books a boat we notify all subsequent inquiries that &ldquo;the boat is unavailable and taken&rdquo;, so for this reason we do not offer any refund on cancellations. If you cancel a reservation greater than 90 days away we do allow a no-cost change of the date. Inclement weather as stated above is the sole reason for a cancellation.</p>
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
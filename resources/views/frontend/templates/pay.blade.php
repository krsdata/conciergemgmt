@extends('frontend.mainframe')
@section('content')

<?php ?>

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
<section class="cms-paymentbox pb-4">
<div class="container">
   <div class="paymentlogobox text-center">
                   <img class="img-responsive yhc-logo lazyload" data-src="/public/photos/payment-yachthampton.png" src="/public/photos/payment-yachthampton.png" alt="yachthampton-footer-logo">
                    </div>
	<div class="paymentlogobox">
		<img src="/public/photos/payhand.png" class="img-responsive" alt="logo" />
		<h2 class="mt-3 mb-2 text-orange">
			Select Payment Method
		</h2>	
	</div>	
			@if (Session::has('success'))
                <div class="alert alert-primary text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
             @if (Session::has('error'))
                <div class="alert alert-danger text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('error') }}</p>
                </div>
            @endif
  
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 left_payment">
			<div class="innerboxpayment">
				<h3>
					Secure Payments by
				</h3>	
				<div class="logo-payment">
					<img src="/public/photos/master.png" class="img-responsive" alt="logo">
				</div>
				<div class="cms-paymentbutton">
					<!-- <a href="/redirectpage" class="paymentlink">
						Pay by Credit Card
					</a> -->	
					<!-- <a href="{{ url('/credit-card-payment') }}" class="paymentlink">
						Pay by Credit Card
					</a> -->
					 <form method="post" action="/redirectpage" enctype="multipart/form-data">
				        {{ csrf_field() }}
				        <input type="hidden" name="redirectvalue" value="testcard"/>
				        <button type="submit" class="paymentlink">Pay by Credit Card</button>
				    </form>		
				</div>	
			</div>	
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right_payment">
			<div class="innerboxpayment">
				<h3>
					Secure Payments by
				</h3>
				<div class="logo-payment">
					<img src="/public/photos/paypal.png" class="img-responsive" alt="logo">
				</div>
			<div class="cms-paymentbutton">
				<form method="post" action="/redirectpage" enctype="multipart/form-data">
			        {{ csrf_field() }}
			        <input type="hidden" name="redirectpaypal" value="redirectpaypal"/>
			        <button type="submit" class="paymentlink">Pay by PayPal</button>
			    </form>
			</div>
				<!-- <div class="cms-paymentbutton">
					<a href="{{ url('/payment') }}" class="paymentlink">
						Pay by PayPal
					</a>		
				</div> -->
			</div>			
		</div>	
	</div>	
</div>
</section>
</div>
<?php ?>
@endsection
<?php $data = Session::get('data'); if(isset($data[0]) && $data[0] !=""){?>
@extends('frontend.mainframe')
@section('content')

<?php 

$cancel_return = url('/home');
$success_return = url('/donation_recu_return');
$notify_url = url('/').'/test.php';

?>

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<div class="counting">
    <section class="cms-paypalbox">
    <div class="container">
      
       
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table" >
                        <div class="row display-tr" >
                            <h3 class="panel-title display-td" >Payment Details</h3>
                           
                        </div>                    
                    </div>
                    <div class="panel-body">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session()->get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="cms-paypalbox-pay"><img src="/public/photos/paypal.png"/></div>

    <form action="{{ route('payment1') }}" method="post">
        {{ csrf_field() }}
    <label>Amount:</label>
    <input type="text" value="" name="amount">
    <span class="dollor-icon">$</span>
    <button type="submit" class="btn btn-success">Pay from Paypal</button>
    </form>
     </div>
                </div>        
            </div>
        </div>
          
    </div>
    </section>
</div>
@endsection
<?php } else{ ?>
<script type="text/javascript">
    window.location = "{{ url('/pay') }}";//here double curly bracket
</script>
<?php } ?>
<?php $data = Session::get('data'); if(isset($data[0]) && $data[0] !=""){?>

<?php $__env->startSection('content'); ?>

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
    <?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session()->get('success')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>
    <?php if(session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session()->get('error')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="cms-paypalbox-pay"><img src="/public/photos/paypal.png"/></div>

    <form action="<?php echo e(route('payment1')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

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
<?php $__env->stopSection(); ?>
<?php } else{ ?>
<script type="text/javascript">
    window.location = "<?php echo e(url('/pay')); ?>";//here double curly bracket
</script>
<?php } ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/templates/payment.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php echo $dest->id ?>">
<input type="hidden" id="module_type" value="dest"> 

<style>
  .featured-image{background:url("<?php echo $dest->featured_image ?>") no-repeat 50% 50%;background-size:cover} 
</style>

<div class="counting">
  <section class="page-title featured-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                      <h2 class="text-capitalize mb-4 text-lg"><?php echo $dest->page_name ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative bg-gray pt-5 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center position-relative text-color mb-3 content-title"><?php echo $dest->page_name ?></h1>
          </div>
          <?php if(!empty($hc)) { ?>
            <div class="col-md-12">
              <?php  foreach($hc as $cont){ ?>
                <div class="headingcontent">
                  <h2 class="font-weight-light text-black mb-3 mt-5"><?php echo $cont->heading ?></h2>
                   <?php //$new_content = preg_replace ( '@\bhttp://([a-zA-Z0-9.%/]+)\b@', '<a href="http://$1">$1</a>', $cont->content); ?>
                  <?php echo $cont->content; ?>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <?php if(count($images) > 0){ ?>
    <section class="position-relative bg-gray pb-3">
      <div class="container">
        <div class="row justify-content-center">
          <h1 class="text-center mt-3 mb-4">Gallery</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="row">
                <?php foreach ($images as $img) { ?>
                <div class="col-lg-4 col-md-4 col-sm-5 thumb mb-4">
                     <a href="<?php echo asset('/photos/2/destination/'.$img->img_name); ?>" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                         <img class="img-fluid lazyload" data-src="<?php echo asset('/photos/2/destination/'.$img->img_name); ?>" src="<?php echo asset('/photos/2/destination/'.$img->img_name); ?>">
                    </a>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-md-3"></div>
        </div>
      </div>
    </section>
    <?php } ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/pages/single-destination.blade.php ENDPATH**/ ?>
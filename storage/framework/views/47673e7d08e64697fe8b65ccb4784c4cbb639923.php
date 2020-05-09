<?php $__env->startSection('content'); ?>
        <!-- Header Slider Start !-->

<!--Fileds used to update count-->
<input type="hidden" id="module_id" value="<?php if(isset($page->id)) echo $page->id ?>">
<input type="hidden" id="module_type" value="page">    

<style>
    .char-des-int_cont_sec2 a, .char-des-int_cont_sec2 span { color: #fff }
    .char-des-int_cont_sec2 .rows { flex-direction: row-reverse }
</style>

<div class="counting">
 <section class="page-title featured-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                      <h2 class="text-capitalize mb-4 text-lg"><?php echo e($page->page_name); ?></h2>
                    <!--    <ul class="list-inline">
                            <li class="list-inline-item"><a href="<?php echo e(url('/')); ?>" class="text-white">Yachthampton</a></li>
                        </ul> !-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>.featured-image{background:url("<?php echo e($page->featured_image); ?>") no-repeat 50% 50%;background-size:cover} </style>

<?php $odd = true; foreach ($destinations as $dest) { if($dest->sort == 0 || $dest->sort == "" || $dest->sort ==  null || $dest->cat_id !== 2) continue; ?>
        <section class="char-des-int_cont_sec <?php if(!$odd) echo "char-des-int_cont_sec2" ?>" >
                    <div class="containers">
                        <div class="inn_boxes_cont_sec_des">
                            <div class="rows">
                                <div class="col-sm-6">
                                    <div class="inn_boxes_cont_sec_lt" data-aos="fade-up" data-aos-duration="1500">
                                        <h2><a href="<?php echo $dest->slug; ?>"><?php echo $dest->page_name; ?></a></h2><p class="normal"><span style="font-size: 14pt;"><?php echo $dest->short_description; ?></span></p><span><a class="nice-button-blue blue-button" href="<?php echo $dest->slug; ?>" target="_blank" rel="noopener">Learn More</a></span>
                                        </div></div>
                                <div class="col-sm-6 pull-right">
                                    <div class="slide h-100">
                                        <div id="myCarousel-<?php echo $dest->slug; ?>" class="carousel slide carousel-fade carousel-ajax col-12 px-0" data-ride="carousel" data-interval="10000">
                                            <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="img-fluid w-100 lazyload" data-src="<?php echo $dest->featured_image; ?>" alt="<?php echo $dest->page_name; ?>" />
                                                    </div>
                                                    <?php $i = 0; foreach($destImages as $destImage) { 
                                                if($destImage->dest_id == $dest->id && $i < 2) { ?>
                                                    <div class="carousel-item">
                                                    <img class="img-fluid w-100 lazyload" data-src="/public/photos/2/destination/<?php echo $destImage->img_name; ?>" alt="<?php echo $dest->page_name; ?>" />
                                                    </div>
                                            <?php $i++;
                                                }
                                            } ?>
                                                
                                            </div>
                                            <a class="carousel-control-prev" href="#myCarousel-<?php echo $dest->slug; ?>" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">‹</span> </a> <a class="carousel-control-next" href="#myCarousel-<?php echo $dest->slug; ?>" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">›</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    <?php $odd = !$odd; } ?>
</div>
              

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/templates/overnights.blade.php ENDPATH**/ ?>
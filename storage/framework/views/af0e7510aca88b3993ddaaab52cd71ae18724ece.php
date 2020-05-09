<header class="navigation menufixed" id="headernavigation">
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
             <?php $__currentLoopData = $header_logo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php /* <img src="{{ asset('/photos/'.$h['logo']) }}?v=1"> */?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <img class="lazyload" data-src="<?php echo e(asset('/logo-h.svg')); ?>?v=1">
            </a>
            <a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">
                <div class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
            </a>

            <div class="collapse navbar-collapse text-center text-dark" id="navbarsExample09">
            <ul class="navbar-nav ml-auto desktopMenu">
                    <li class="nav-item"><div class="media"> 
                                <div class="media-left" style="margin-right:3px;margin-top:2px;"> 
                                    <a href="mailto:captain@hamptonsboatrental.com"> 
                                        <i class="fa fa-envelope"></i>
                                    </a> 
                                </div> 
                                <div class="media-body"> 
                                        <a href="mailto:captain@hamptonsboatrental.com">captain@hamptonsboatrental.com</a>
                                </div> 
                            </div>
                                </li>

                                <li>
                            <div class="media"> 
                                <div class="media-left" style="margin-right:3px;margin-top:2px;"> 
                                    <a href="tel:+18004172027"> 
                                        <i class="fa fa-phone"></i>
                                    </a> 
                                </div> 
                                <div class="media-body desktopItem"> 
                                    <a href="tel:+18004172027">Click to Call: +1-800-417-2027</a>
                                </div> 
                            </div>
                            
                        </li>                
            </ul>

            </div>
            <!-- <div class="collapse navbar-collapse text-center text-dark" id="navbarsExample09">
                <ul class="navbar-nav ml-auto desktopMenu">
                    <?php if(!empty($top_menu)): ?>
                        <?php $__currentLoopData = $top_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($m->submenus->isEmpty()): ?>
                                <li class="nav-item <?php echo e((Request::path() == $m->details->slug) ? 'active' : ''); ?>"><a class="nav-link text-dark" href="<?php if($m->details->slug == '/'): ?><?php echo e(url('/')); ?><?php else: ?><?php echo e(url('/'.$m->details->slug)); ?><?php endif; ?>"><?php echo e($m->details->page_name); ?></a>
                                 <span class="cmssubmenu"></span>   
                                </li>
                            <?php else: ?>
                                <li class="nav-item dropdown <?php echo e((Request::path() == $m->details->slug) ? 'active' : ''); ?>">
                                    <a class="nav-link dropdown-toggle text-dark" href="<?php echo e(url('/'. $m->details->slug)); ?>" id="dropdown<?php echo e($m->id); ?>"><?php echo e($m->details->page_name); ?></a>

                                    <span class="cmssubmenu"></span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown<?php echo e($m->id); ?>">
                                            <?php $__currentLoopData = $m->submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="<?php echo e((Request::path() == $sm->details->slug) ? 'active' : ''); ?>"><a class="dropdown-item" href="<?php echo e(url('/'.$sm->details->slug)); ?>"><?php echo e($sm->details->title); ?> 

                                                    <?php 
                                                    if(strtolower($sm->details->title) == 'entire fleet')
                                                        echo '(29)';
                                                    else {
                                                        $boats = \App\Boat::where(['cat_id' => $sm->details->id ])->where('status','=','active')->where('is_deleted','=','0')->pluck('id');
                                                        if(!empty($boats))
                                                            echo '('.count($boats).')';
                                                    }

                                                    ?>
                                                
                                                </a>
                                                
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
            </div> -->
        </div>
    </nav>
</header>

<div class="offcanvas-menu-wrapper" id="offcanvasMenu">
  <div class="offcanvas-menu-inner">
    
    <nav class="offcanvas-navigation">
      <ul class="offcanvas-menu">
        <?php if(!empty($top_menu)): ?>
            <?php $__currentLoopData = $top_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($m->submenus->isEmpty()): ?>
                <li>
                  <a href="<?php if($m->details->slug == '/'): ?><?php echo e(url('/')); ?><?php else: ?><?php echo e(url('/'.$m->details->slug)); ?><?php endif; ?>"><?php echo e($m->details->page_name); ?></a>
                </li>
                <?php else: ?>

                <li class="menu-item-has-children">
                  <a><?php echo e($m->details->page_name); ?></a>
                  <ul class="sub-menu">
                    <?php $__currentLoopData = $m->submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="menu-item-has-children">
                      <a href="<?php echo e(url('/'.$sm->details->slug)); ?>"><?php echo e($sm->details->title); ?> 

                            <?php 
                            if(strtolower($sm->details->title) == 'entire fleet')
                                echo '(29)';
                            else {
                                $boats = \App\Boat::where(['cat_id' => $sm->details->id ])->where('status','=','active')->where('is_deleted','=','0')->pluck('id');
                                if(!empty($boats))
                                    echo '('.count($boats).')';
                            }

                            ?>
                        
                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </ul>
    </nav>
  </div>
</div><?php /**PATH D:\php\htdocs\hamptons\resources\views/frontend/includes/header.blade.php ENDPATH**/ ?>
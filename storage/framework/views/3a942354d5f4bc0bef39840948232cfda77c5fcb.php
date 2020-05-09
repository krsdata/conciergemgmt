<!doctype html>
<html lang="en">
<head>
    <?php echo $__env->make('frontend.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <style>.l{position:fixed;width:100%;height:100%;background:#fff;top:0px;z-index:999}.d{display:inline-block;position:fixed;width:80px;height:80px;top:50%;left:50%;margin-left:-40px;margin-top:-40px}.d div{position:absolute;border:4px solid #15b8f3;opacity:1;border-radius:50%;animation:lds-ripple 1s cubic-bezier(0,.2,.8,1) infinite}.d div:nth-child(2){animation-delay:-.5s}@keyframes  lds-ripple{0%{top:36px;left:36px;width:0;height:0;opacity:1}100%{top:0;left:0;width:72px;height:72px;opacity:0}}</style>
    <div class="l"><div class="d"><div></div><div></div></div></div>
    <?php echo $__env->make('frontend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('frontend.templates.waterToysBoats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('frontend.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('frontend.includes.javascripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\php\htdocs\hamptons\resources\views/frontend/mainframe.blade.php ENDPATH**/ ?>
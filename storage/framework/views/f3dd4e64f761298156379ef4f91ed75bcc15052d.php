<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php if(isset($title) && $title != ''): ?><?php echo e($title); ?> <?php else: ?> <?php echo e($page->title); ?> <?php endif; ?></title>
<meta name="description" content="<?php if(isset($dest->meta_description)) echo $dest->meta_description; else echo $page->meta_description ?>" />
<meta name="keywords" content="<?php if(isset($dest->meta_key)) echo $dest->meta_key; else echo $page->meta_key ?>" />
<meta name="author" content="prince">
<meta name="google-site-verification" content="qgYSp81fpwmo_CDtrLQVywUQym6SqID7UC5V5kR5Lfc">
<link rel='icon' href='/public/photos/2/fav.ico' type='image/x-icon' />
<link rel="stylesheet" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/sidemenu/main.css?v=2020041101')); ?>">
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'"href="<?php echo e(asset('/frontend/bootstrap.min.css?v=2020041101')); ?>">
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/css/style.css?v=2020042008')); ?>" >
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/css/aos.css?v=1a040064279b')); ?>" >
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/fa.all.min.css')); ?>" >
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/css/responsive.css?v=2020041101')); ?>" >
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/range-slider/jquery-ui.css?v=2020041101')); ?>"   />
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/range-slider/price_range_style.css?v=2020041101')); ?>" type="text/css">
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/css/custom.css?v=2020042007')); ?>" type="text/css">
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/owl/css.css?v=3')); ?>" >
<?php if(isset($title) && $title != ''): ?>
<?php $title = $title ?>
<?php else: ?>
<?php $title = $page->title ?>
<?php endif; ?>
<?php if($title == "Hamptons Yacht Charters | Sag Harbor Boat Charters"): ?>
<?php endif; ?>
<link rel="stylesheet" type="text/css" media="print" onload="this.media='all'" href="<?php echo e(asset('/frontend/css/formio.full.min.css?v=1a040064279b')); ?>" >
<script type="text/javascript">
function getVals(){var e=this.parentNode,a=e.getElementsByTagName("input"),t=parseFloat(a[0].value),n=parseFloat(a[1].value);if(t>n){var l=n;n=t,t=l}e.getElementsByClassName("rangeValues")[0].innerHTML="$"+getMoney(t)+" - $"+getMoney(n),$("#min").val(t),$("#max").val(n)}function getValsTwo(){var e=this.parentNode,a=e.getElementsByTagName("input"),t=parseFloat(a[0].value),n=parseFloat(a[1].value);if(t>n){var l=n;n=t,t=l}e.getElementsByClassName("rangeValues")[0].innerHTML=t+" - "+n,$("#mincap").val(t),$("#maxcap").val(n)}function getMoney(e){var a=new Number(e),t=a.toFixed(2);return t=(t-(a=parseInt(a))).toPrecision(2),t=parseFloat(t).toFixed(2),(a=a.toLocaleString())<1&&a.lastIndexOf(".00")==a.length-3&&(a=a.substr(0,a.length-3)),a}window.onload=function(){for(var e=document.getElementsByClassName("range-slider"),a=0;a<e.length;a++)for(var t=e[a].getElementsByTagName("input"),n=0;n<t.length;n++)"range"===t[n].type&&(t[n].oninput=getVals,t[n].oninput());var l=document.getElementsByClassName("range-slider2");for(a=0;a<l.length;a++)for(t=l[a].getElementsByTagName("input"),n=0;n<t.length;n++)"range"===t[n].type&&(t[n].oninput=getValsTwo,t[n].oninput())};
</script>
<script defer type="text/javascript" src="https://widgets.talkwithlead.com/Scripts/js/Librarytwl.js"></script>
<script defer type="text/javascript">
    var _Xyz_UserData = 'MjMzMzQ=';
    var _Xyz_AgentNew = 'KzE2MzE0MzEwNDYz';
      var ___Twl = { "id": "XB6GWExSf64fKIpqc2RRy1gOgKtQ6bMGIY2MIKA0rCk", "version": "1.1" }; (function (window, document) {
            var s1 = document.createElement('script');
            s1.type = 'text/javascript';
            s1.async = true;
            s1.src = "https://widgets.talkwithlead.com/Scripts/js/javascript.js".replace(/[+]/g, '/').replace(/[=]/g, '.');
            document.getElementsByTagName('head')[0].appendChild(s1);	             
        })(window, document);
    </script>  
<script async src="<?php echo e(asset('/frontend/js/ga.js')); ?>"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-102213916-1"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-102213916-1');
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-845037240"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-845037240');
</script>
<script>
gtag('config', 'AW-845037240/5pbBCObAta4BELj9-JID', {
'phone_conversion_number': '800-417-2027'
});
</script>


<?php if(isset($style) && $style != null): ?>
<?php echo $__env->make($style, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home1/ncwfegko/template.yachthampton.com/resources/views/frontend/includes/head.blade.php ENDPATH**/ ?>
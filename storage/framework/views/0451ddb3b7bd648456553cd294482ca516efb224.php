<script defer>
    $(document).ready(function(){$(".zoom").hover(function(){$(this).addClass('transition');},function(){$(this).removeClass('transition');});$('.openmodal').on('click',function(e){e.preventDefault();$('.insta-carousel').removeClass('active');var rel=$(this).attr('rel');$('#slide-'+rel).addClass('active');});});
</script><?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/pages/js/instagram-js.blade.php ENDPATH**/ ?>
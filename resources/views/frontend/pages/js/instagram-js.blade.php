<script defer>
    $(document).ready(function(){$(".zoom").hover(function(){$(this).addClass('transition');},function(){$(this).removeClass('transition');});$('.openmodal').on('click',function(e){e.preventDefault();$('.insta-carousel').removeClass('active');var rel=$(this).attr('rel');$('#slide-'+rel).addClass('active');});});
</script>
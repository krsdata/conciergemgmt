jQuery('#loader_img').show();

// main image loaded ?
jQuery('.carousel-item img').on('load', function(){
  // hide/remove the loading image
  jQuery('#loader_img').hide();
});
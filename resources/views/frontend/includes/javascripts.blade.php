<script defer src="{{ asset('/frontend/range-slider/jquery.min.js') }}" type="text/javascript"></script>
<script defer src="{{ asset('/frontend/range-slider/jquery-ui.min.js') }}" type="text/javascript"></script>
<script defer src="{{ asset('/frontend/range-slider/price_range_script.js?v=2020042006') }}" type="text/javascript"></script>
<script defer type="text/javascript" src="{{ asset('/frontend/range-slider/jquery.ui.touch-punch.min.js') }}"></script>
<script defer src="{{ asset('/frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script defer src="{{ asset('/frontend/plugins/bootstrap/js/popper.js') }}"></script>
<script defer src="{{ asset('/frontend/js/lazysizes.min.js') }}"></script>
<script src="{{ asset('/frontend/jquery-3.4.1.min.js') }}"></script> 
<script defer src="{{ asset('/frontend/ekko-lightbox.min.js') }}"></script>
 
<script defer>var cHeight=0;$("#myCarousel").on("slide.bs.carousel",function(t){var i=null;$activeItem=$(".active.item",this),i="left"==t.direction?$activeItem.next(".item").find("img"):0==$activeItem.index()?$("img:last",$activeItem.parent()):$activeItem.prev(".item").find("img"),0==cHeight&&(cHeight=$(this).height(),$activeItem.next(".item").height(cHeight)),i.each(function(){var t=$(this),i=t.data("original");void 0!==i&&""!=i&&(t.attr("src",i),t.data("original",""))})});
$(document).ready(function(){document.documentElement.clientWidth>480&&$("html").on("DOMMouseScroll wheel",function(e){e.originalEvent.detail>0||e.originalEvent.wheelDelta<0?(document.getElementById("headernavigation").style.top="-150px",$("section.boat-topname").removeClass("moveFromTop"),$(".cms-homeslider").removeClass("moveFromTop")):(document.getElementById("headernavigation").style.top="0",$("section.boat-topname").addClass("moveFromTop"),$(".cms-homeslider").addClass("moveFromTop"))})});
    $(".loadDestination").click(function(){var cat_id=$(this).attr('data-id');if(cat_id==1)
$("#exampleModalCenter .modal-body").html("<p>Loading...</p>");else if(cat_id==2)
$("#exampleModalCenterr .modal-body").html("<p>Loading...</p>");$.ajax({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},type:"GET",url:'{{ route('loadDestination') }}',data:{cat_id:cat_id},dataType:"json",success:function(response){var category_data=response;var option_string='';if(category_data.status==1)
{$.each(category_data.data,function(i,e){var destSlug='/'+e.slug;var destUrl='<?php echo url("/") ?>';var finalUrl=destUrl+destSlug;option_string+='<p><a href="'+finalUrl+'" rel="noopener" target="blank">'+e.page_name+'</a></p>'})}
else option_string+='<p>No Destination found!!</p>';if(cat_id==1)
$("#exampleModalCenter .modal-body").html(option_string);else if(cat_id==2)
$("#exampleModalCenterr .modal-body").html(option_string)}})});setTimeout(function(){$(".flash-message").hide()},3000);$(document).on('click','[data-toggle="lightbox"]',function(event){event.preventDefault();$(this).ekkoLightbox()});$(document).ready(function(){$("#navbar li.dropdown .cmssubmenu").click(function(){$(".navbar-nav .dropdown-menu").toggle()});$("#bestChoiceBoat").change(function(){var boat_id=$(this).val();$.ajax({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},type:"GET",url:'{{ route('loadBoatInfo') }}',data:{boat_id:boat_id},dataType:"json",success:function(response){var res=response;var option_string='';if(response.status==1)
{$("input#total_cost").val(response.total_cost);var bestChoiceBoat=$("#bestChoiceBoat").val();var person=$(".totalPerson").val();var total_cost=parseFloat($("#total_cost").val());if(person!=''&&bestChoiceBoat!='')
{var avg=(total_cost/parseInt(person)).toFixed(2);$(".avgCost").val(avg)}
else $(".avgCost").val('')}
else{$("input#total_cost").val(0);$("input.totalPerson").val('')}}})})});function calculatePrice(){var bestChoiceBoat=$("#bestChoiceBoat").val();var person=$(".totalPerson").val();var total_cost=parseFloat($("#total_cost").val());if(person!=''&&bestChoiceBoat!='')
{var avg="$ "+(total_cost/parseInt(person)).toFixed(2);$(".avgCost").val(avg)}
else $(".avgCost").val('')}
$(document).on('click','.MobileMenu .dropdown-toggle',function(event){$(".dropdown-menu").toggle()});$(document).on('click','.navbar-toggler',function(event){$(".dropdown-menu").hide()});
$(document).ready(function(){$("#budgetBtn").click(function(){$(".boatTypesBox").hide();$(".passengerBox").hide();$(".budgetBox").toggle()});$("#btTypeBtn").click(function(){$(".budgetBox").hide();$(".passengerBox").hide();$(".boatTypesBox").toggle()});$("#passengerBtn").click(function(){$(".budgetBox").hide();$(".boatTypesBox").hide();$(".passengerBox").toggle()});$("#advanceBtn").click(function(){$(".optionBox").hide()});$("#budgetModalBtn").click(function(){});$("#boatTypesModalBtn").click(function(){});$("#passengerModalBtn").click(function(){})});window.addEventListener('click',function(e){if(!(document.getElementById('budgetBtn').contains(e.target))&&!(document.getElementById('budgetBox').contains(e.target))){$(".budgetBox").hide()}
if(!(document.getElementById('btTypeBtn').contains(e.target))&&!(document.getElementById('boatTypesBox').contains(e.target))){$(".boatTypesBox").hide()}
if(!(document.getElementById('passengerBtn').contains(e.target))&&!(document.getElementById('passengerBox').contains(e.target))){$(".passengerBox").hide()}});$("button.save").click(function(){var clickOn='';var parentId=$(this).parent().parent().attr('id');if(parentId=='budgetBox'){$("#budgetBtn").addClass('activate');clickOn='budget'}
else if(parentId=='boatTypesBox'){$("#btTypeBtn").addClass('activate');clickOn='boatTypes'}
else if(parentId=='passengerBox'){$("#passengerBtn").addClass('activate');clickOn='passengers'}
else if($(this).attr('id')=='advanceSearchBtn'){$("#advanceBtn").addClass('activate');clickOn='advance'}
else if($(this).attr('id')=='budgetMobileSave'){$("#budgetModalBtn").addClass('activate');clickOn='budgetMobile'}
else if($(this).attr('id')=='boatTypeMobileSave'){$("#boatTypesModalBtn").addClass('activate');clickOn='boatTypeMobile'}
else if($(this).attr('id')=='passMobileSave'){$("#passengerModalBtn").addClass('activate');clickOn='passMobile'}
filterBoats(clickOn)});function filterBoats(clickOn){console.log('filter works');var filter='boats';var form_min='';var form_max='';if(clickOn=='budget'||clickOn=='budgetMobile'){form_min=$("input.min_price").val();form_max=$("input.max_price").val()}
var form_boatType=[];$('input[class="form_boatType"]:checked').each(function(){form_boatType.push($(this).val())});var form_departure=[];$('input[class="form_departure"]:checked').each(function(){form_departure.push($(this).val())});var form_mincap='';var form_maxcap='';if(clickOn=='passengers'||clickOn=='passMobile'){form_maxcap=parseInt($("input.max_cap").val())}
var form_minsleep='';var form_maxsleep='';if(clickOn=='advance'){form_maxsleep=parseInt($("input#max_sleep").val())}
var form_boatLength=[];$('input[name="form_boatLength[]"]:checked').each(function(){form_boatLength.push($(this).val())});var form_destination=[];$('input[name="form_destination[]"]:checked').each(function(){form_destination.push($(this).val())});var form_duration=[];$('input[name="form_duration[]"]:checked').each(function(){form_duration.push($(this).val())});$("#nonFilterBoats").hide();var text='Loading...';$("#filterBoats").html(text);$("#noRecord").hide();$(".optionBox").hide();$('.modal').modal('hide');$.ajax({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},type:"GET",url:'{{ route('filterBoats') }}',data:{filter:filter,form_min:form_min,form_max:form_max,form_boatType:form_boatType,form_departure:form_departure,form_mincap:form_mincap,form_maxcap:form_maxcap,form_minsleep:form_minsleep,form_maxsleep:form_maxsleep,form_boatLength:form_boatLength,form_destination:form_destination,form_duration:form_duration},dataType:"json",success:function(response){var res=response;if(res.status==1){$("#filterBoats").html(res.data)}
else{console.log("No record found");$("#noRecord").show();$("#filterBoats").html("")}}})}
$(".clear").click(function(){var id=$(this).attr('id');if(id=='clearBudget'){$(".min_price").val(500).trigger('change');$(".max_price").val(15000).trigger('change');$("#budgetBtn").removeClass('activate');$("#budgetModalBtn").removeClass('activate')}
else if(id=='clearBoatTypes'){$('input[class="form_boatType"]').prop("checked",!1);$("#btTypeBtn").removeClass('activate');$("#boatTypesModalBtn").removeClass('activate')}
else if(id=='clearPassenger'){$("#passengerBtn").removeClass('activate');$("#passengerModalBtn").removeClass('activate');$("#max_cap").val(1);$("#passengerRange").val(1);$("#rangeValuesCap").text('1');$("#maxCapMobile").val(1);$("#passengerRangeMobile").val(1);$("#rangeValuesCapMobile").text('1')}
else if(id=='clearAdvance'){$("#advanceBtn").removeClass('activate');$("#max_sleep").val(1);$("#sleepRange").val(1);$("#rangeValuesSleep").text('1');$('input[name="form_departure[]"]').prop("checked",!1);$('input[name="form_boatLength[]"]').prop("checked",!1);$('input[name="form_destination[]"]').prop("checked",!1);$('input[name="form_duration[]"]').prop("checked",!1)}
filterBoats('');return!1});$("#defaultBoatsBtn").click(function(){$("#nonFilterBoats").show();$("#filterBoats").html("");$("#noRecord").hide();$(".optionBox").hide();return!1})
var loader;function loadNow(t){t<=0?displayContent():(loader.style.opacity=t,window.setTimeout(function(){loadNow(t-.07)},80))}function displayContent(){loader.style.display="none",document.getElementById("single-product").style.display="block"}jQuery('.back-top a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),jQuery("html, body").animate({scrollTop:e.offset().top},1e3,function(){var t=jQuery(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}}),$("#navbarsExample09 ul li.dropdown").each(function(t){var e=$(this);e.find("li").hasClass("active")&&e.addClass("active")});$(document).ready(function(){var msg='{{Session::get('alert')}}';var exist='{{Session::has('alert')}}';if(exist)dialog.show();});
</script>

<input type="hidden" id="pageYOffset" value="0">

@if(isset($title) && $title != '')
<?php $title = $title ?>
@else
<?php $title = $page->title ?>
@endif
@if($title != "Yacht Hampton | Best Charter in The Hamptons")
@endif

<script defer src="{{ asset('/frontend/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script defer src="{{ asset('/frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script defer type="text/javascript" src="https://cdn.wishpond.net/connect.js?merchantId=1505018&socialCampaignId=2519024&writeKey=65fbff7ce763" async></script>
<script defer src="{{ asset('/frontend/js/script.js?v=2020042001') }}"></script>
<script defer src="{{ asset('/frontend/js/aos.js') }}"></script>
<script defer src="{{ asset('/frontend/js/main.js') }}"></script>
<script defer src="{{ asset('/frontend/sidemenu/main.js?v=2020042014') }}"></script>
<?php /*
<script src="https://unpkg.com/formiojs@4.9.13/dist/formio.full.min.js"></script>
@if(isset($contact_form) && $contact_form != null)
<script defer>
    var formData=JSON.parse(decodeURIComponent("{{ $contact_form->components }}"));Formio.icons="fontawesome",Formio.createForm(document.getElementById("builder"),formData).then(function(o){o.nosubmit=!0,o.on("submit",function(o){document.general_form.submit(),console.log(o.data)})});
</script>
@endif
 */ ?>
<?php print_r($page->boat_script);?>
<?php print_r($page->page_script);?>
@if(isset($js) && $js != null)
@include($js)
@endif
<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(asset('/admin/vendor/jquery/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="<?php echo e(asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('/admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('/admin/js/sb-admin-2.min.js')); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo e(asset('/admin/vendor/chart.js/Chart.min.js')); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo e(asset('/admin/js/demo/chart-area-demo.js')); ?>"></script>
<script src="<?php echo e(asset('/admin/js/demo/chart-pie-demo.js')); ?>"></script>

<!--Rich Text Edit Files Start-->
<link href="<?php echo e(asset('/admin/rich-text/jquerysctipttop.css')); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo e(asset('/admin/rich-text/site.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('/admin/rich-text/richtext.min.css')); ?>">
<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<script src="<?php echo e(asset('/admin/rich-text/jquery.richtext.js')); ?>"></script>
<!--Rich Text Edit Files End-->

<!--Multiselect JS Start-->
<script src="<?php echo e(asset('/admin/js/multiselect.js')); ?>"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--Multiselect JS End-->


<script type="text/javascript">

  $(function() {
      $('.multiselect-ui').multiselect({
          includeSelectAllOption: true
      });
  });

  // Rich text editor 
  $(document).ready(function() {

      /*var totalContent = $("#totalContent").val();
      if(totalContent > 0) {
        for(var = 1; i < totalContent; i++){
          $('#richText'+i).richText();  
        }
      }*/

      $('.content').richText();
      $('.content1').richText();
      $('.content2').richText();
      $('.content3').richText();
      $('.content4').richText();
      $('.content5').richText();
      $('.content6').richText();
      $('.content7').richText();
      $('.content8').richText();
      $('.content9').richText();
      $('.content10').richText();
      $('.content11').richText();
      $('.content12').richText();
      $('.content13').richText();
      $('.content14').richText();
      $('.content15').richText();
      $('.content16').richText();
      $('.content17').richText();
      $('.content18').richText();
      $('.content19').richText();
      $('.content20').richText();
      $('.content21').richText();
      $('.content22').richText();
      $('.content23').richText();
      $('.content24').richText();
      $('.content25').richText();

      $('.content26').richText();
      $('.content27').richText();
      $('.content28').richText();
      $('.content29').richText();
      $('.content30').richText();
      
      // Second 
      $('.contentTwo').richText();
      $('.contentTwo1').richText();
      $('.contentTwo2').richText();
      $('.contentTwo3').richText();
      $('.contentTwo4').richText();
      $('.contentTwo5').richText();
      $('.contentTwo6').richText();
      $('.contentTwo7').richText();
      $('.contentTwo8').richText();
      $('.contentTwo9').richText();
      $('.contentTwo10').richText();
      $('.contentTwo11').richText();
      $('.contentTwo12').richText();
      $('.contentTwo13').richText();
      $('.contentTwo14').richText();
      $('.contentTwo15').richText();

      $('.contentTwo16').richText();
      $('.contentTwo17').richText();
      $('.contentTwo18').richText();
      $('.contentTwo19').richText();
      $('.contentTwo20').richText();
      $('.contentTwo21').richText();
      $('.contentTwo22').richText();
      $('.contentTwo23').richText();
      $('.contentTwo24').richText();
      $('.contentTwo25').richText();
      $('.contentTwo26').richText();
      $('.contentTwo27').richText();
      $('.contentTwo28').richText();
      $('.contentTwo29').richText();
      $('.contentTwo30').richText();

      //var rteObj = richText();
      //rteObj.appendTo(".content");
  });


function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

$.validator.addMethod('minImageWidth', function(value, element, minWidth) {
  return ($(element).data('imageWidth') || 0) > minWidth;
}, function(minWidth, element) {
  var imageWidth = $(element).data('imageWidth');
  return (imageWidth)
      ? ("Your image's width must be greater than " + minWidth + "px")
      : "Selected file is not an image.";
});

jQuery(function ($) {
    $('#update_logo').validate({
        rules: {
            logo: {
                required: true,
                accept:"image/jpeg,image/jpg",
                minImageWidth: 500
            }
        }
    });
});


</script>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "<?php echo e(url('dashboard/changeinstastatus')); ?>",
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })

$( function() {
    $(".imgdrag").sortable({ opacity: 0.8, cursor: 'move', update: function() 
    {
      var i = 1;
      $("#container .indexcls").each(function(i, elm) {
        
        $elm = $(elm); // cache the jquery object
        $elm.find('#indexing').val(i+1);
       // alert($elm.find('#indexing').val(i+1));
       //$elm.attr("id", $elm.index("#container div"));
        //alert($elm.attr("id"));
        // below is just for demo purpose
        //$elm.text($elm.text().split("id")[0] + "id: " + $elm.attr("id"));
        revert: true
      });
    }
    });
    $( ".imgdrag,.boat-card" ).disableSelection();
  });
  
  //=== Package Add More row function - NOT IN USE
  /*$("#addPackageBtn").click(function() {
      var row = '<div class="col-md-6"><div class="form-group"><input class="form-control" name="keyname[]" type="text" value=""></div></div><div class="col-md-6"><div class="form-group"><input class="form-control" name="pvalue[]" type="text" value=""></div></div>';

      $("#packageRow").append(row);
  });*/

  // === Add More Package Column function
  $("#addPackageColBtn").click(function() {
      
      var cols = parseInt($("#packageCols").val());
      cols++; //Increase the counter

      var heading = '<th id="th_'+ cols +'"><input value="" class="form-control" name="keyname[]" type="text"></th>';
      var values = '<td id="td_'+ cols +'"><input class="form-control" name="pvalue[]" type="text" value=""></td>';

      $("#packageTable thead tr").append(heading);
      $("#packageTable tbody tr").append(values);

      $("#packageCols").val(cols);
      if(cols > 6)
        $("#delPackageColBtn").show();
  });

  // ===  Delete Package Column function
  $("#delPackageColBtn").click(function() {
      var cols = parseInt($("#packageCols").val());
      
      if(cols > 6) {
        //alert(cols);
        $("#packageTable #th_"+cols).remove();
        $("#packageTable #td_"+cols).remove();

        cols--;
        $("#packageCols").val(cols);

        if(cols == 6)
          $("#delPackageColBtn").hide();
      }
  });

  // === Add More Package Row function
  $("#addPackageRowBtn").click(function() {
      //Increase the counter
      var rows = parseInt($("#packageRows").val());
      rows++; 
      $("#packageRows").val(rows);

      var row = $("#packageValues").html();
      row = '<tr id="row_'+rows+'">'+row+'</tr>';

      var page = $("#page").val();
      if(page == 'editboat')
        $(row).insertBefore( "#packageTable tbody #packageValues" );
      else
        $("#packageTable tbody").append(row);

      if(rows > 2)
        $("#delPackageRowBtn").show();
  });

  // === Delete Package Row function
  $("#delPackageRowBtn").click(function() {
      var rows = parseInt($("#packageRows").val());
      if(rows > 2) {
        $("#packageTable #row_"+rows).remove();

        rows--;
        $("#packageRows").val(rows);

        if(rows == 2)
          $("#delPackageRowBtn").hide();
      }
  });

  // === Adding name to the form fields of the package table
  $('body').on('keyup', '#packageTable thead tr th input', function() {
      var value = $(this).val();
      var thisId = $(this).parent().attr('id');
      // alert(thisId);
      var arr = thisId.split('_');
      var id = arr[1];

      value = value.replace(/\s/g,''); //value.replace(' ', '_');
      value = value+'[]'; 
      $("#packageTable tbody tr #td_"+id+" input").attr("name", value.toLowerCase());

  });

  // Delete Package row - on EDIT
  $('body').on('click', '.deletePRow', function() {
      if(confirm("Do you want to delete this?")) {
        var id = $(this).attr('data-id');
        $(".prow"+id).remove();
      }
  });

  // Water toys Add More row function
  $("#addToysRowBtn").click(function() {
    //Increase the counter
    var rows = parseInt($("#waterRows").val());
    rows++; 
    $("#waterRows").val(rows);

    /*
    var row = $(".waterRows").html(); //get the html
    row = '<tr id="row_'+rows+'">'+row+'</tr>';
    $("#waterToysRow table tbody").append(row);
    */

    var row0 = $("#waterToysRow #table_0 .waterRows").html(); //get the html
    row0 = '<tr id="row_'+rows+'">'+row0+'</tr>';
    $("#waterToysRow #table_0 tbody").append(row0);

    var row1 = $("#waterToysRow #table_1 .waterRows").html(); //get the html
    row1 = '<tr id="row_'+rows+'">'+row1+'</tr>';
    $("#waterToysRow #table_1 tbody").append(row1);

    var row2 = $("#waterToysRow #table_2 .waterRows").html(); //get the html
    row2 = '<tr id="row_'+rows+'">'+row2+'</tr>';
    $("#waterToysRow #table_2 tbody").append(row2);

    if(rows > 2)
      $("#delToysRowBtn").show();
  });

  // === Delete Water Toys Row function
  $("#delToysRowBtn").click(function() {
      var rows = parseInt($("#waterRows").val());
      if(rows > 2) {
        $("#waterToysRow #row_"+rows).remove();

        rows--;
        $("#waterRows").val(rows);

        if(rows == 2)
          $("#delToysRowBtn").hide();
      }
  });

  // === Add More Toys Column function
  $("#addToysColBtn").click(function() {
      
      var cols = parseInt($("#waterCols").val());
      cols++; //Increase the counter

      var heading0 = '<th id="th_'+ cols +'"><input class="form-control" data-id="0" name="tkeynameCat_0[]" type="text"></th>';
      var values0 = '<td id="td_'+ cols +'"><input class="form-control" data-id="0" value="-" name="tvalueCat_0[]" type="text"></td>';

      var heading1 = '<th id="th_'+ cols +'"><input class="form-control" data-id="1" name="tkeynameCat_1[]" type="text"></th>';
      var values1 = '<td id="td_'+ cols +'"><input class="form-control" data-id="1" value="-" name="tvalueCat_1[]" type="text"></td>';

      var heading2 = '<th id="th_'+ cols +'"><input class="form-control" data-id="2" name="tkeynameCat_2[]" type="text"></th>';
      var values2 = '<td id="td_'+ cols +'"><input class="form-control" data-id="2" value="-" name="tvalueCat_2[]" type="text"></td>';

      //$("#waterToysRow thead tr").append(heading0);
      //$("#waterToysRow tbody tr").append(values0);
      
      $("#waterToysRow #table_0 thead tr").append(heading0);
      $("#waterToysRow #table_0 tbody tr").append(values0);

      $("#waterToysRow #table_1 thead tr").append(heading1);
      $("#waterToysRow #table_1 tbody tr").append(values1);

      $("#waterToysRow #table_2 thead tr").append(heading2);
      $("#waterToysRow #table_2 tbody tr").append(values2);

      $("#waterCols").val(cols);
      if(cols > 2)
        $("#delToysColBtn").show();
  });

  // ===  Delete Toys Column function
  $("#delToysColBtn").click(function() {
      var cols = parseInt($("#waterCols").val());
      
      if(cols > 1) {
        $("#waterToysRow #th_"+cols).remove();
        $("#waterToysRow #td_"+cols).remove();

        cols--;
        $("#waterCols").val(cols);

        if(cols == 4)
          $("#delToysColBtn").hide();
      }
  });

  // === Adding name to the form fields of the Water Toys table
  $('body').on('keyup', '#waterToysRow thead tr th input', function() {
      var value = $(this).val();
      var thisId = $(this).parent().attr('id');
      var arr = thisId.split('_');
      var id = arr[1];

      var dataId = $(this).attr('data-id');

      //Adding the same value in next columns
      value = value.replace(/\s/g,''); //value.replace(' ', '_');
      $("#waterToysRow thead tr #th_"+id+" input").val(value);
      
      var value0 = value+'cat_0[]'; 
      var value1 = value+'cat_1[]'; 
      var value2 = value+'cat_2[]'; 

      $("#waterToysRow #table_0 tbody tr #td_"+id+" .form-control").attr("name", value0.toLowerCase());
      $("#waterToysRow #table_1 tbody tr #td_"+id+" .form-control").attr("name", value1.toLowerCase());
      $("#waterToysRow #table_2 tbody tr #td_"+id+" .form-control").attr("name", value2.toLowerCase());
  });

  // Delete Water Toys row - on EDIT
  $('body').on('click', '.deleteRow', function() {
      if(confirm("Do you want to delete this?")) {
        var id = $(this).attr('data-id');
        $("#row_"+id).remove();
      }
  });

  
  // ==== Not is Use
  /*$("#addToysRowBtn").click(function() {
    var row = $("#waterToysFields").html();

    row = '<div class="row">'+row+'</div>';

    $("#waterToysRow").append(row);
  }); */

  // Specification Add More row function 
   $("#addspecification").click(function() {
    var row = $("#specificationFields").html();

    row = '<div class="row">'+row+'</div>';

    $("#specificationRow").append(row);
  });

   // Heading and Content Add More row function 
   $("#addheadingcontent").click(function() {

    var count = $("#totalHC1").val();
    count++;
    if(count <= 30) { 
      $("#headingcontentFields"+count).show();
      $("#totalHC1").val(count);
    }
    else
      alert("No more fields allowed");

    /*var row = $("#headingcontentFields").html();
    row = '<div class="row">'+row+'</div>';
    $("#headingcontentRow").append(row);*/
  });

  // Heading and Content Two Add More row function 
  $("#addheadingcontent2").click(function() {

    var count = $("#totalHC2").val();
    count++;
    if(count <= 30) { 
      $("#headingcontentFieldsTwo"+count).show();
      $("#totalHC2").val(count);
      $("#delHCBtn2").show();
    }
    else
      alert("No more fields allowed");
  });

  // Heading and Content Two Remove row function 
  $(".deleteHC2").click(function() {

    var id = $(this).attr("data-id");
    
    $("#headingcontentFieldsTwo"+id).hide();
    $("#headingcontentFieldsTwo"+id +" input").val("");
    $("#headingcontentFieldsTwo"+id +" .richText-editor").html("");

    var count = $("#totalHC2").val();
    count--;
    $("#totalHC2").val(count);

    //countWordsChar();

    /*if(count > 1) {
      $("#headingcontentFieldsTwo"+count).hide();
      $("#headingcontentFieldsTwo"+count + " input").val('');
      
      count--;
      $("#totalHC2").val(count);

      if(count == 1)
        $("#delHCBtn2").hide();
    }*/
  });

  // Video Add More row function 
   $("#addvideocontent").click(function() {
    var row = $("#videocontentFields").html();

    row = '<div class="row">'+row+'</div>';

    $("#videocontentRow").append(row);
  });

  // === Show/Hide the profile box 
  $("#showEditForm").click(function() {
    $("#profileEditForm").show();
    $("#profilePreviewBox").hide();
  });

  $("#showProfile").click(function() {
    $("#profileEditForm").hide();
    $("#profilePreviewBox").show();
  });

  // === Show/Hide User Roles boxes on listing
  $(".showHideAccess").click(function() {
    //$(".roles-box").hide();
    var id = $(this).attr('data-id');
    $("#roles_"+id).toggle();
    var text = $(this).html();
    if(text == 'View Access')
      $(this).html("Hide Access");
    else
      $(this).html("View Access");

    /*var showhide = $("#showhide").val();
    if(showhide == 0){
      $("#roles_"+id).show();
      $("#showhide").val('1');
      $(this).html("Hide Access");
    }
    else{
      $("#showhide").val('0');
      $(this).html("View Access");
    }*/

    

    //$("#profileEditForm").show();
    //$("#profilePreviewBox").hide();
  });

  //Calculate word/character count on boat/pages/destination
  //$(".counting").keyup(function(){
  $('body').on('change', '.counting', function() {
      //var words = parseInt($("#total_words").val());
      //var characters = parseInt($("#total_chars").val());

      countWordsChar();
      
  });

  $('body').on('keyup', '.richText-editor', function() {
      countWordsChar();
  });

  function countWordsChar(){
    words = 0; characters = 0;
    $('.counting').each(function(){
      var value = $(this).val();
      if(value != '') {
        var length = value.length;
        characters = characters+length;

        words = words + value.split(/[\s\.\?]+/).length;
      }
    });

    $('.richText-editor').each(function(){

      var value = $(this).text();
      if(value != '') {
        var length = value.length;
        characters = characters+length;

        words = words + value.split(/[\s\.\?]+/).length;
      }
    });

    $("#total_words").val(words);
    $("#total_chars").val(characters);
    console.log("Chars: "+characters);
    console.log("words: "+words);
  }


</script>
<?php if(isset($js)): ?>
    <?php echo $__env->make($js, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/includes/javascripts.blade.php ENDPATH**/ ?>
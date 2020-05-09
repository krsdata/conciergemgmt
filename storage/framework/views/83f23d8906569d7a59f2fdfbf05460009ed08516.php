<?php $__env->startSection('content'); ?>

<?php
    $extra = array();
        foreach($boat->details as $bd){
            $extra[$bd->key] = $bd->value;
        }
       
        $boat_id = $bd->boat_id;
        $boatPackage = $boat->boatPackage;
        $boatPackageAll = $boat->boatPackageAll;
        //$waterToys = $boat->waterToys;
        
        $specification = $boat->boat_specification;
        $headingcontent = $boat->boat_headingcontent;
        $headingcontentTwo = $boat->boat_headingcontentTwo;
        $videocontent = $boat->boat_videocontent;
        //echo "<pre>"; print_r($headingcontent);

        $existBoatType = array();
        $existDestination = array();
        $existDuration = array();
        $existSpecializedDestination = array();

        if(isset($extra['boatType']))
            $existBoatType = explode(",", $extra['boatType']);

        if(isset($extra['destination']))
            $existDestination = explode(",", $extra['destination']);
        
        if(isset($extra['specializedDestination']))
            $existSpecializedDestination = explode(",", $extra['specializedDestination']);
        
        
        if(isset($extra['duration']))
            $existDuration = explode(",", $extra['duration']);

?>

<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?php echo e(url('/dashboard/boats')); ?>">Boats</a>
        </li>
        <li class="breadcrumb-item active"><?php echo e($boat->title); ?></li>
    </ol>

    <?php echo $__env->make('admin.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form method="POST" action="<?php echo e(url('/dashboard/boats/'.$boat->id)); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Edit boat</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Title *</label>
                            <input class="form-control col-md-8" name="title" type="text"
                                   value="<?php echo e($boat->title); ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Page Name *</label>
                            <input class="form-control col-md-8" name="page_name" type="text"
                                   value="<?php echo e($boat->page_name); ?>">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Slug/Link</label>
                            <input class="form-control col-md-8" name="slug" type="text" value="<?php echo e($boat->slug); ?>">
                        </div>
                        
                        <!--   <div class="form-group">
                            <label class="font-weight-bold">Content</label>
                            <textarea name="content" class="form-control my-editor"
                                      style="min-height: 500px;"><?php echo e($boat->content); ?></textarea>
                        </div> -->

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label class="font-weight-bold">Price*</label>
                                    <input type="text" class="form-control" name="price" value="<?php echo e($extra['price']); ?>">
                                </div>
                                <div class="col">
                                    <label class="font-weight-bold">VAT/Tax</label>
                                    <input type="text" class="form-control" name="added_price"
                                           value="<?php echo e($extra['added_price']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label class="font-weight-bold">Harbor</label>
                                    <input type="text" class="form-control" name="harbor"
                                           value="<?php echo e($extra['harbor']); ?>">
                                </div>
                                <div class="col">
                                    <label class="font-weight-bold">Serial #</label>
                                    <input type="text" class="form-control" name="sn_no" value="<?php echo e($boat->sn_no); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="4_hour" class="custom-control-input"
                                               id="4-hour" <?php if(isset($extra['4_hour']) && $extra['4_hour'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="4-hour">4 Hours
                                            Rate</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="8_hour" class="custom-control-input"
                                               id="8-hour" <?php if(isset($extra['8_hour']) && $extra['8_hour'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="8-hour">8 Hours
                                            Rate</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="best_seller" class="custom-control-input"
                                               id="best-seller" <?php if(isset($extra['best_seller']) && $extra['best_seller'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="best-seller">Best
                                            Seller</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="jet_ski" class="custom-control-input"
                                               id="jet-ski" <?php if(isset($extra['jet_ski']) && $extra['jet_ski'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="jet-ski">Jet Ski</label>
                                    </div>
                                </div>

                            </div>

                            <!--Day trips and overnights options start -->
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="day_trips" class="custom-control-input"
                                               id="day_trips" <?php if(isset($extra['day_trips']) && $extra['day_trips'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="day_trips">Day Trips</label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="overnights" class="custom-control-input"
                                               id="overnights" <?php if(isset($extra['overnights']) && $extra['overnights'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="overnights">Overnights</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="sea_bob" class="custom-control-input"
                                               id="sea_bob" <?php if(isset($extra['sea_bob']) && $extra['sea_bob'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="sea_bob">Sea bob</label>
                                    </div>
                                </div>
                                 <div class="col">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="brand_new" class="custom-control-input"
                                               id="brand_new" <?php if(isset($extra['brand_new']) && $extra['brand_new'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="brand_new">Brand New</label>
                                    </div>
                                </div>
                            </div>
                             <div class="row mt-3">
                                
                                <div class="col">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="paddle-board" class="custom-control-input"
                                               id="paddle-board" <?php if(isset($extra['paddle-board']) && $extra['paddle-board'] == 'on'): ?><?php echo e('checked'); ?><?php endif; ?>>
                                        <label class="custom-control-label font-weight-bold" for="paddle-board">Paddle Board</label>
                                    </div>
                                </div>
                                
                            </div>
                            <!--Day trips and overnights options end -->
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Book Now Script</label>
                                        <textarea name="boat_script" class="form-control" style="min-height: 100px;"><?php echo e($boat->boat_script); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Specification box start-->        
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Specification</span>
                            <button type="button" id="addspecification" class="btn btn-info btn-sm pull-right">+ Add more</button>
                        </div>
                    </div>
                    
                    <div class="card-body" id="specificationRow">
                       <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="font-weight-bold">Left Text</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="font-weight-bold">Right Text</label>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if(!empty($specification)) {
                                foreach ($specification as $srow) {
                        ?>
                        <div class="row" id="">    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" name="stext[]" type="text" value="<?php echo ucwords($srow->stext) ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" name="stext1[]" type="text" value="<?php echo ucwords($srow->stext1) ?>">
                                </div>
                            </div>
                        </div>
                        <?php }} ?>

                        <div class="row" id="specificationFields">    
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" name="stext[]" type="text" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" name="stext1[]" type="text" value="">
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
                <!--Specification box end-->
                    
                <!--Excellent For Start-->
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Excellent For <small>(Pleaes press <b>Enter key</b> after each point)</small></span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <textarea name="excellent_for" class="form-control" style="min-height: 300px;"><?php if(isset($extra['excellent_for'])) echo $extra['excellent_for'] ?></textarea>
                        </div>
                    </div>
                </div>
                <!--Excellent For End-->

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Preview/Publish</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="font-weight-bold">Category</label>
                                    <select class="form-control" name="category">
                                        <option value="">Select from below...</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($c->id); ?>" <?php if($c->id == $boat->cat_id): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($c->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                               <!--  <button type="button" class="btn btn-outline-info btn-block">Preview</button> -->

                                 <a href="<?php if($boat->slug == '/'): ?><?php echo e(url('/')); ?><?php else: ?><?php echo e(url('/'.$boat->slug)); ?><?php endif; ?>" target="_blank" class="btn btn-outline-info btn-block">Preview</a>


                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-outline-success btn-block">Publish</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Slider Images</span>

                        </div>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="slider_id" id="selected-slider">
                         <label id="slider-image-title"></label>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#slider-select">Add Slider&nbsp;&nbsp;<span
                                    class="fas fa-images"></span></button>
                    </div>
                </div>
                <hr/>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Additional Info</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="font-weight-bold">Size</label>
                                <input type="text" class="form-control" name="size" value="<?php echo e($extra['size']); ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Miles/Hour</label>
                                <input type="text" class="form-control" name="speed" value="<?php echo e($extra['speed']); ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Capacity</label>
                                <input type="text" class="form-control" name="capacity" value="<?php echo e($extra['capacity']); ?>">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Beds</label>
                                <input type="text" class="form-control" name="beds" value="<?php echo e($extra['beds']); ?>">
                            </div>

                            <!--New Form fields Start-->
                            <div class="form-group">
                                <label class="font-weight-bold">Boat Type</label>
                                <select class="form-control multiselect-ui" name="boatType[]" multiple="" id="boatType" style="display: none;">
                                    <?php
                                    if(!empty($boatType))
                                    {
                                        foreach ($boatType as $key => $value) {
                                            $selected = '';
                                            if (in_array($key, $existBoatType))
                                                $selected = 'selected="selected"';
                                    ?>
                                    <option <?php echo $selected ?> value="<?php echo $key ?>" ><?php echo $value ?></option>
                                    <?php }} ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Destination</label>
                                <select class="form-control multiselect-ui" name="destination[]" multiple="" id="destination" style="display: none;">
                                    <?php
                                    if(!empty($destination))
                                    {
                                        foreach ($destination as $key => $value) {
                                            $selected = '';
                                            if (in_array($key, $existDestination))
                                                $selected = 'selected="selected"';
                                    ?>
                                    <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
                                    <?php }} ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Awesome Places</label>
                                <select class="form-control multiselect-ui" name="specializedDestination[]" multiple="" id="specializedDestination" style="display: none;">
                                    <?php
                                    if(!empty($awesomePlace))
                                    {
                                        foreach ($awesomePlace as $key => $value) {
                                            $selected = '';
                                            if (in_array($key, $existSpecializedDestination))
                                                $selected = 'selected="selected"';
                                    ?>
                                    <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
                                    <?php }} ?>
                                </select>
                            </div>
                            
                            

                            <div class="form-group">
                                <label class="font-weight-bold">Duration</label>
                                <select class="form-control multiselect-ui" name="duration[]" multiple="" id="duration" style="display: none;">
                                    <?php
                                    if(!empty($duration))
                                    {
                                        foreach ($duration as $key => $value) {
                                            $selected = '';
                                            if (in_array($key, $existDuration))
                                                $selected = 'selected="selected"';
                                    ?>
                                    <option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $value ?></option>
                                    <?php }} ?>
                                </select>
                            </div>
                            <!--New Form fields End-->

                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-dark float-right">Add More Info&nbsp;&nbsp;<span
                                    class="fas fa-plus"></span></button>
                    </div>
                </div>
                <hr/>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Featured Image</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="image" id="selected-image" value="<?php echo e($boat->image); ?>">
                        <img src="<?php echo e($boat->image); ?>" alt="Preview" id="preview-image" style="width: 100%;">
                    </div>
                    <div class="card-footer">
                        <button type="button" id="featured-image" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#file-manager">Set Featured Image&nbsp;&nbsp;<span
                                    class="fas fa-image"></span></button>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <!--Water Toys box start-->        
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Available Water Toys</span>
                            <button style="display:none ;" type="button" id="delToysColBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Column</button>
    
                            <button type="button" id="addToysColBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Column</button></button>
                        </div>
                    </div>
                    
                    <div class="card-body" id="waterToysRow">
                        <div class="row">
                            <?php
                                $i = 1;
                                foreach ($waterToysCat as $index => $cat) {

                                //Call toys data by cat and boat id
                                $toys = \App\BoatWaterToys::where(['cat_id' => $index, 'boat_id' => $boat_id])->get('*');
                                $totalRows = count($toys);

                                //Call toys extra data by cat and boat id
                                $toysExtra = \App\BoatWaterToysCol::where(['cat_id' => $index, 'boat_id' => $boat_id])->get('*');
                                $totalCols = count($toysExtra);
                            ?>

                            <div class="col-md-12 mt-3">
                                <div class="table-responsive-sm">
                                  <table class="table table-bordered" id="table_<?php echo $index ?>">
                                    <thead>
                                        <tr>
                                             <th id="th_0"><input value="Sequence" class="form-control" type="text"/></th> 
                                            
                                            <th id="th_1" colspan="2">
                                                <select class="form-control" name="wcat_id[]">
                                                    <option value="<?php echo $index ?>"><?php echo $cat ?></option>
                                                </select>
                                            </th>
                                            
                                            <th id="th_2"><input value="Link" class="form-control" type="text"/></th>
                                            
                                            <th id="th_3"><input value="Icon" class="form-control" type="text"></th>
                                            
                                             <?php
                                              if(count($toysExtra) > 0){
                                                $col = 5; 
                                                    foreach ($toysExtra as $row) {
                                            ?>          <th id="th_<?php echo $col++ ?>">
                                                            <input value="<?php echo ucwords($row->keyname) ?>" class="form-control" name="tkeynameCat_<?php echo $index ?>[]" data-id="<?php echo $index ?>" type="text"></th>
                                            <?php }} else { ?>
                                                <!--<th id="th_5"><input value="Cost" class="form-control" name="tkeynameCat_<?php //echo $index ?>[]" data-id="<?php //echo $index ?>" type="text"></th>-->
                                            <?php } ?>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          if(count($toys) > 0){
                                          foreach ($toys as $row) {
                                        ?>
                                        <tr id="row_<?php echo $row->id ?>">
                                            <td id="td_0"><input class="form-control" name="sequencecat_<?php echo $index ?>[]" type="text" value="<?php echo $row->sequence ?>">
                                            </td>
                                            <td id="td_1">
                                                <span data-id="<?php echo $row->id ?>" class="deleteRow"><i class="fa fa-times"></i></span>
                                                <input class="form-control" name="keycat_<?php echo $index ?>[]" type="text" value="<?php echo ucwords($row->keyname) ?>" placeholder="Heading"></td>
                                            
                                            <td id="td_2"><input class="form-control" name="valcat_<?php echo $index ?>[]" type="text" value="<?php echo ucwords($row->value) ?>" placeholder="Value"></td>

                                            <td id="td_3"><input class="form-control" name="linkcat_<?php echo $index ?>[]" type="text" value="<?php echo $row->link ?>">
                                            </td>

                                            <td id="td_4">
                                                <?php /* <input class="form-control" name="iconkeycat_<?php echo $index ?>[]" type="text" value="<?php echo $row->icon ?>"> */ ?>

                                                <select class="form-control" type="text" name="iconkeycat_<?php echo $index ?>[]">
                                                    <option value="">Please Select</option>
                                                    <?php
                                                        //$dirPat = asset('public/photos/2/icons/'); 
                                                        foreach ($icons as $icon) 
                                                        { 
                                                            $path = $dirPat.'/'.$icon;
                                                            $selected = '';
                                                            if($row->icon == $path)
                                                                $selected = 'selected="selected"';
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $path ?>"><?php echo $icon ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            
                                            <?php
                                                //Extra columns start
                                              if(count($toysExtra) > 0){
                                                $col = 5;
                                              foreach ($toysExtra as $row) {
                                            ?>
                                                <td id="td_<?php echo $col++ ?>"><input class="form-control" name="<?php echo strtolower($row->keyname).'cat_'.$index ?>[]" type="text" data-id="<?php echo $index ?>" value="<?php echo $row->value ?>"></td>
                                            <?php }} else { ?>
                                                <!--<td id="td_5"><input class="form-control" name="costcat_<?php //echo $index ?>[]" type="text" data-id="<?php //echo $index ?>" value="">
                                            </td>-->
                                            <?php } ?>
                                        </tr>
                                        <?php }} else { ?>
                                        <tr class="waterRows">
                                            <td id="td_0"><input class="form-control" name="sequencecat_<?php echo $index ?>[]" type="text" value="" placeholder="Sequence"></td>

                                            <td id="td_1"><input class="form-control" name="keycat_<?php echo $index ?>[]" type="text" value="" placeholder="Heading"></td>

                                            <td id="td_2"><input class="form-control" name="valcat_<?php echo $index ?>[]" type="text" value="" placeholder="Value"></td>

                                            <td id="td_3"><input class="form-control" name="linkcat_<?php echo $index ?>[]" type="text" value="">
                                            </td>

                                            <td id="td_4">
                                                <?php /* <input class="form-control" name="iconkeycat_<?php echo $index ?>[]" type="text" value=""> */ ?>
                                                <select class="form-control" type="text" name="iconkeycat_<?php echo $index ?>[]">
                                                    <option value="">Please Select</option>
                                                    <?php
                                                        //$dirPat = asset('public/photos/2/icons/'); 
                                                        foreach ($icons as $icon) 
                                                        { 
                                                            $path = $dirPat.'/'.$icon;
                                                    ?>
                                                    <option value="<?php echo $path ?>"><?php echo $icon ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>

                                            <!--<td id="td_5"><input class="form-control" name="costcat_<?php //echo $index ?>[]" type="text" data-id="<?php //echo $index ?>" value="">
                                            </td>-->
                                        </tr>
                                        <?php } ?>

                                        <!--Default Row to Add More Start-->
                                        <?php //if($i == 1){ ?>
                                        <tr class="waterRows" style="display:none ;">
                                            <td id="td_0"><input class="form-control" name="sequencecat_<?php echo $index ?>[]" type="text" value="-" placeholder="Sequence"></td>

                                            <td id="td_1"><input class="form-control" name="keycat_<?php echo $index ?>[]" type="text" value="-" placeholder="Heading"></td>

                                            <td id="td_2"><input class="form-control" name="valcat_<?php echo $index ?>[]" type="text" value="-" placeholder="Value"></td>

                                            <td id="td_3"><input class="form-control" name="linkcat_<?php echo $index ?>[]" type="text" value="-">
                                            </td>

                                            <td id="td_4">
                                                <?php /* <input class="form-control" name="iconkeycat_<?php echo $index ?>[]" type="text" value="-"> */ ?>

                                                <select class="form-control" name="iconkeycat_<?php echo $index ?>[]">
                                                    <option value="">Please Select</option>
                                                    <?php
                                                        //$dirPat = asset('public/photos/2/icons/'); 
                                                        foreach ($icons as $icon) 
                                                        {
                                                            $path = $dirPat.'/'.$icon; 
                                                    ?>
                                                    <option value="<?php echo $path ?>"><?php echo $icon ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>

                                            <?php
                                              if(count($toysExtra) > 0){
                                                $col = 5;
                                              foreach ($toysExtra as $row) {
                                            ?>
                                                <td id="td_<?php echo $col++ ?>"><input class="form-control" name="<?php echo strtolower($row->keyname).'cat_'.$index ?>[]" type="text" data-id="<?php echo $index ?>" value="-"></td>
                                            <?php }} else { ?>
                                                <!--<td id="td_5"><input class="form-control" name="costcat_<?php //echo $index ?>[]" type="text" data-id="<?php //echo $index ?>" value="-">
                                            </td> -->
                                            <?php } ?>
                                        </tr>
                                        <?php //} ?>
                                        <!--Default Row to Add More End-->
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                            <?php $i++; } ?>

                            <div class="col-md-12">
                                <input type="hidden" class="form-control" id="waterRows" value="<?php if($totalRows > 0) echo $totalRows+1; else echo "2" ?>">

                                <input type="hidden" class="form-control" id="waterCols" value="<?php if($totalCols > 0) echo $totalCols+4; else echo "5" ?>">

                                <button style="display: none;" type="button" id="delToysRowBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Row</button>
                                <button type="button" id="addToysRowBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Row</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Water Toys box end-->

                 <!--Package box start-->        
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Package</span>
                            
                            <button <?php if(count($boatPackage) <= 6){ ?> style="display: none;" <?php } ?> type="button" id="delPackageColBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Column</button>

                            <button type="button" id="addPackageColBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Column</button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-primary">
                                    <b>Note: </b> Heading should be "Package Title" in case of box heading.
                                </p>
                                <div class="table-responsive-sm mt-3">
                                  <table class="table table-bordered" id="packageTable">
                                    <thead>
                                        <tr id="packageKeys">
                                            <?php 
                                                $valueCount = 0; $valueArray = array();
                                                if(!empty($boatPackage)) 
                                                {
                                                    $i = 1;
                                                    foreach ($boatPackage as $row) 
                                                    {
                                                        $boatPack = \App\BoatPackages::where(['keyname' => $row->keyname, 'boat_id' => $row->boat_id])->pluck('value');
                                                        $valueCount = count($boatPack);

                                                        if(!empty($boatPack)) { 
                                                            foreach ($boatPack as $key => $val) {
                                                                $valueArray[$row->keyname][] = $val;
                                                            }
                                                        }

                                            ?>
                                            <th id="th_<?php echo $i++ ?>"><input value="<?php echo ucwords($row->keyname) ?>" class="form-control" name="keyname[]" type="text"></th>
                                            <?php }} else { ?>
                                                <!--In case if not added while adding -->
                                                <th id="th_1"><input value="Hours" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_2"><input value="Times" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_3"><input value="Base Cost" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_4"><input value="Fuel" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_5"><input value="Gratuity" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_6"><input value="Total Cost" class="form-control" name="keyname[]" type="text"></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                            if($valueCount){
                                            for($j = 0; $j < $valueCount; $j++){ 
                                        ?>
                                        <tr class="prow<?php echo $j ?>" id="row_<?php echo $j+2 ?>"> 
                                            <?php 
                                                if(!empty($boatPackage)) 
                                                {
                                                    $i = 1;
                                                    foreach ($boatPackage as $row) 
                                                    {
                                                        //$boatPack = \App\BoatPackages::where(['id' => $row->id])->pluck('value');
                                                        $name = str_replace(" ", "", $row->keyname);
                                                    
                                            ?>
                                            <td id="td_<?php echo $i++ ?>">
                                                <span data-id="<?php echo $j ?>" class="deletePRow"><i class="fa fa-times"></i></span>
                                                <input class="form-control" name="<?php echo $name ?>[]" type="text" value="<?php echo $valueArray[$row->keyname][$j] ?>"></td>
                                            <?php }} ?>
                                        </tr>
                                        <?php }} else{ ?>
                                            <tr id="packageValues">
                                                <td id="td_1"><input class="form-control" name="hours[]" type="text" value=""></td>

                                                <td id="td_2"><input class="form-control" name="times[]" type="text" value="">
                                                </td>
                                                
                                                <td id="td_3"><input class="form-control" name="basecost[]" type="text" value=""></td>
                                                
                                                <td id="td_4"><input class="form-control" name="fuel[]" type="text" value=""></td>
                                                
                                                <td id="td_5"><input class="form-control" name="gratuity[]" type="text" value=""></td>
                                                
                                                <td id="td_6"><input class="form-control" name="totalcost[]" type="text" value=""></td>
                                            </tr>
                                        <?php } ?>
                                        
                                        <!--Default Row to Add More Start-->
                                        <tr id="packageValues" style="display: none;"> 
                                            <?php 
                                                if(!empty($boatPackage)) 
                                                {
                                                    $i = 1;
                                                    foreach ($boatPackage as $row) 
                                                    {
                                                        $name = str_replace(" ", "", $row->keyname);
                                            ?>
                                            <td id="td_<?php echo $i++ ?>"><input class="form-control" type="text" name="<?php echo $name ?>[]" value="-"></td>
                                            <?php }} ?>
                                        </tr>
                                        <!--Default Row to Add More end-->
                                    </tbody>
                                  </table>
                                </div>

                                <input type="hidden" id="packageRows" value="<?php if($valueCount > 0) echo $valueCount+1; else echo "2" ?>">
                                <input type="hidden" id="packageCols" value="<?php if(count($boatPackage) > 0) echo count($boatPackage); else echo "6" ?>">

                                <input type="hidden" id="page" value="editboat">

                                <button <?php if(($valueCount+1) <= 2){ ?> style="display:none;" <?php } ?> type="button" id="delPackageRowBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Row</button>
                                
                                <button type="button" id="addPackageRowBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Row</button>
                            </div>
                        </div>

                        <?php /*
                        <div class="row" id="packageRow">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Key</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">Value</label>
                                </div>
                            </div>

                            <?php 
                                if(!empty($boatPackage)) {
                                    foreach ($boatPackage as $row) {
                            ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="keyname[]" type="text" value="<?php echo ucwords($row->keyname) ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="pvalue[]" type="text" value="<?php echo $row->value ?>">
                                    </div>
                                </div>
                            <?php }} else { ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="keyname[]" type="text" value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="pvalue[]" type="text" value="">
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                        */ ?>
                    </div>
                </div>
                <!--Package box end-->
            </div>

            <!--Heading Content box start-->
            <div class="col-md-12">
                 <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Heading and Content</span>
                            <button type="button" id="addheadingcontent" class="btn btn-info btn-sm pull-right">+ Add more</button>
                        </div>
                    </div>
                    
                    <div class="card-body" id="headingcontentRow">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold">Heading</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="font-weight-bold">Content</label>
                                </div>
                            </div>
                        </div>

                        
                        <?php 
                            if(!empty($headingcontent)) {
                                $i = 1;
                                foreach ($headingcontent as $hcontent2) {
                        ?>
                        <div class="row" id="headingcontentFields<?php echo $i ?>">    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" name="heading[]" type="text" value="<?php echo $hcontent2->heading;?>">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea name="contentnew[]" class="content<?php echo $i ?>"><?php echo e($hcontent2->content); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <?php $i++; }} ?>
    

                        <?php for($i = count($headingcontent)+1 ; $i <= 30; $i++){ ?>
                        <div class="row" id="headingcontentFields<?php echo $i ?>" <?php if($i != 1){ ?> style="display: none;" <?php } ?>>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" name="heading[]" type="text" value="">
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <textarea name="contentnew[]" class="content<?php echo $i ?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <input type="hidden" id="totalHC1" name="totalHC1" value="<?php if(!empty($headingcontent)) echo count($headingcontent); else echo '1' ?>">
                    </div>
                </div>
            </div>
            <!--Heading Content box end-->

            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Local cruising Area</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="local_cruising_area" id="selected-image" value="<?php echo e($boat->new_local_cruising_area); ?>">
                            <img src="<?php echo e(asset('/photos/2/'.$boat->new_local_cruising_area)); ?>" alt="Preview" id="preview-image" style="width: 50px;">
                        </div>
                        <div class="card-footer">
                           <input type="file" name="new_local_cruising_area"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <!--Video box start-->        
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Video Section (Add Link)</span>
                            <button type="button" id="addvideocontent" class="btn btn-info btn-sm pull-right">+ Add more</button>
                        </div>
                    </div>
                    
                    <div class="card-body" id="videocontentRow">
                        <?php 
                            if(!empty($videocontent)) {
                                foreach ($videocontent as $vcontent) {
                        ?>
                        <div class="row" id="">    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" name="video[]" type="text" value="<?php echo $vcontent->video;?>">
                                </div>
                            </div>
                           
                        </div>
                        <?php }} ?>
                        
                        <div class="row" id="videocontentFields">    
    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" name="video[]" type="text" value="">
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
                <!--Video box end-->
               
            </div>

            <!--Heading and Content box 2 start-->        
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Heading and Content Two</span>
                            <button type="button" id="addheadingcontent2" class="btn btn-info btn-sm pull-right">+ Add more</button>
                        </div>
                    </div>
                    
                    <div class="card-body" id="headingcontentRow2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold">Heading</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="font-weight-bold">Content</label>
                                </div>
                            </div>
                        </div>
                            
                        <?php 
                            if(!empty($headingcontentTwo)) 
                            {
                                $i = 1;
                                foreach ($headingcontentTwo as $hc) 
                                {
                        ?>
                        <div class="row" id="headingcontentFieldsTwo<?php echo $i ?>">    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" name="heading_two[]" type="text" value="<?php echo $hc->heading_two; ?>">
                                </div>
                                <button type="button" id="HCTwoDel_<?php echo $i ?>" data-id="<?php echo $i ?>" class="btn btn-danger btn-sm deleteHC2"><i class="fa fa-trash"></i> Delete</button>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea name="content_two[]" class="contentTwo<?php echo $i++ ?>"><?php echo e($hc->content_two); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <?php $i++; }} ?>
                        
                        
                        
                        <input type="hidden" id="totalHC2" name="totalHC2" value="<?php if(!empty($headingcontentTwo)) echo count($headingcontentTwo); else echo '1' ?>">
                    </div>
                </div>
            </div>
            <!--Heading and Content box 2 end-->

            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Brochure</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" value="<?php echo e($boat->brochure); ?>" name="oldbrochure">
                            <label><?php echo e($boat->brochure); ?></label>
                        </div>
                        <div class="card-footer">
                           <input type="file" name="brochure"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Specification Pdf</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="hidden" value="<?php echo e($boat->specification_pdf); ?>" name="old_specification_pdf">
                            <label><?php echo e($boat->specification_pdf); ?></label>
                        </div>
                        <div class="card-footer">
                           <input type="file" name="specification_pdf"/>
                        </div>
                    </div>
                </div>
            </div> 

            <!--SEO Tools Start-->
            <div class="col-md-12 seo-tools">
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">SEO Tools</span>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Meta Keyword</label>
                            <textarea name="meta_keyword" class="form-control"
                                      ><?php echo e($boat->meta_keyword); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Meta Description</label>
                            <textarea name="meta_description" class="form-control"><?php echo e($boat->meta_description); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">SEO Brad Data</label>
                            <textarea name="seo_brad_data" maxlength="1000" rows="10" class="form-control"><?php if(isset($extra['seo_brad_data'])) echo $extra['seo_brad_data'] ?></textarea>
                        </div>

                        <!--Joe's Keyword start-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><b>Joe's Keyword</b></h6>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 1</label>
                                        <textarea maxlength="250" name="jkeyword1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['jkeyword1'])) echo $extra['jkeyword1'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 2</label>
                                        <textarea maxlength="250" name="jkeyword2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['jkeyword2'])) echo $extra['jkeyword2'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 3</label>
                                        <textarea maxlength="250" name="jkeyword3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['jkeyword3'])) echo $extra['jkeyword3'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Joe's Keyword end-->

                        <!--URL Ranking Keyword-->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><b>URL Ranking</b></h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 1</label>
                                        <textarea name="urlranking1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['urlranking1'])) echo $extra['urlranking1'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 2</label>
                                        <textarea name="urlranking2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['urlranking2'])) echo $extra['urlranking2'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 3</label>
                                        <textarea name="urlranking3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['urlranking3'])) echo $extra['urlranking3'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Total Exact Keyword-->    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><b>Total Exact Keyword</b></h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 1</label>
                                        <textarea name="exactkey1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['exactkey1'])) echo $extra['exactkey1'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 2</label>
                                        <textarea name="exactkey2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['exactkey2'])) echo $extra['exactkey2'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 3</label>
                                        <textarea name="exactkey3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['exactkey3'])) echo $extra['exactkey3'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Density Keyword-->    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><b>Density Keyword</b></h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 1</label>
                                        <textarea name="densitykey1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['densitykey1'])) echo $extra['densitykey1'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 2</label>
                                        <textarea name="densitykey2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['densitykey2'])) echo $extra['densitykey2'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 3</label>
                                        <textarea name="densitykey3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['densitykey3'])) echo $extra['densitykey3'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Total Variation Keyword-->    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><b>Variation Keyword</b></h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 1</label>
                                        <textarea name="varkey1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['varkey1'])) echo $extra['varkey1'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 2</label>
                                        <textarea name="varkey2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['varkey2'])) echo $extra['varkey2'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 3</label>
                                        <textarea name="varkey3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['varkey3'])) echo $extra['varkey3'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Total LSI Keyword-->    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><b>LSI Keyword</b></h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 1</label>
                                        <textarea name="lsikey1" class="form-control" style="min-height: 100px;"><?php if(isset($extra['lsikey1'])) echo $extra['lsikey1'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 2</label>
                                        <textarea name="lsikey2" class="form-control" style="min-height: 100px;"><?php if(isset($extra['lsikey2'])) echo $extra['lsikey2'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Keyword 3</label>
                                        <textarea name="lsikey3" class="form-control" style="min-height: 100px;"><?php if(isset($extra['lsikey3'])) echo $extra['lsikey3'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Total Words/Character-->    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><b>Total Words & Characters</b></h6>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Total Words</label>
                                        <input readonly="" id="total_words" class="form-control" value="<?php if(isset($extra['total_words'])) echo $extra['total_words'] ?>" /> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Total Characters</label>
                                        <input readonly="" id="total_chars" class="form-control" value="<?php if(isset($extra['total_chars'])) echo $extra['total_chars'] ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--SEO Tools End-->

        
    </form>
</div>
<br/>
<style type="text/css">
    .deleteRow, .deletePRow{
        float: left;
        color: #f00;
        position: absolute;
        left: -6px;
        cursor: pointer;
        font-size: 20px;
    }
    .deleteCol{
        float: left;
        color: #f00;
        position: absolute;
        cursor: pointer;
        font-size: 20px;
        top: -30px;
        margin-left: 70px;
    }
</style>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    var editor_config = {
        path_absolute: "<?php echo e(url('/')); ?>/",
        selector: "textarea.my-editor",
        valid_elements : '*[*]',
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function (field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'dashboard/media?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainframe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/ncwfegko/public_html/resources/views/admin/pages/edit-boat.blade.php ENDPATH**/ ?>
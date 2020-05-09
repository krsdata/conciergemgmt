@extends('admin.mainframe')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Boats</li>
        </ol>

        @include('admin.includes.messages')

        <?php //echo asset('public/photos/2/icons/'); ?>
        <form method="POST" action="{{ url('/dashboard/boats-add') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Add a Boat</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-bold">Title *</label>
                                <input class="form-control col-md-8 counting" name="title" type="text"
                                       value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Page Name *</label>
                                <input class="form-control col-md-8 counting" name="page_name" type="text"
                                       value="{{ old('page_name') }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Slug/Link</label>
                                <input class="form-control col-md-8 counting" name="slug" type="text" value="{{ old('slug') }}">
                            </div>
                            <!--  <div class="form-group">
                                <label class="font-weight-bold">Content</label>
                                <textarea name="content" class="form-control my-editor"
                                          style="min-height: 500px;">{{ old('content') }}</textarea>
                            </div> -->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="font-weight-bold">Price*</label>
                                        <input type="text" class="form-control counting" name="price" value="{{ old('price') }}">
                                    </div>
                                    <div class="col">
                                        <label class="font-weight-bold">VAT/Tax</label>
                                        <input type="text" class="form-control counting" name="added_price"
                                               value="{{ old('added_price') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="font-weight-bold">Harbor</label>
                                        <input type="text" class="form-control counting" name="harbor"
                                               value="{{ old('harbor') }}">
                                    </div>
                                    <div class="col">
                                        <label class="font-weight-bold">Serial #</label>
                                        <input type="text" class="form-control counting" name="sn_no" value="{{ old('sn_no') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="4_hour" class="custom-control-input"
                                                   id="4-hour">
                                            <label class="custom-control-label font-weight-bold" for="4-hour">4 Hours
                                                Rate</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="8_hour" class="custom-control-input"
                                                   id="8-hour">
                                            <label class="custom-control-label font-weight-bold" for="8-hour">8 Hours
                                                Rate</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="best_seller" class="custom-control-input"
                                                   id="best-seller">
                                            <label class="custom-control-label font-weight-bold" for="best-seller">Best
                                                Seller</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="jet_ski" class="custom-control-input"
                                                   id="jet-ski">
                                            <label class="custom-control-label font-weight-bold" for="jet-ski">Jet Ski</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <!--Day trips and overnights options start -->
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="day_trips" class="custom-control-input"
                                                   id="day_trips">
                                            <label class="custom-control-label font-weight-bold" for="day_trips">Day Trips</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="overnights" class="custom-control-input"
                                                   id="overnights">
                                            <label class="custom-control-label font-weight-bold" for="overnights">Overnights</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="sea_bob" class="custom-control-input"
                                                   id="sea_bob">
                                            <label class="custom-control-label font-weight-bold" for="sea_bob">Sea bob</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="brand_new" class="custom-control-input"
                                                   id="brand_new">
                                            <label class="custom-control-label font-weight-bold" for="brand_new">Brand New</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                
                                    <div class="col">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="paddle-board" class="custom-control-input"
                                                   id="paddle-board" @if(isset($extra['paddle-board']) && $extra['paddle-board'] == 'on'){{ 'checked' }}@endif>
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
                                            <textarea name="boat_script" class="form-control" style="min-height: 100px;">{{ old('boat_script') }}</textarea>
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

                            <div class="row" id="specificationFields">    
        
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input class="form-control counting" name="stext[]" type="text" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input class="form-control counting" name="stext1[]" type="text" value="">
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
                                <textarea name="excellent_for specificationFields" class="form-control counting" style="min-height: 300px;">{{ old('excellent_for') }}</textarea>
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
                                            @foreach($categories as $c)
                                                <option value="{{ $c->id }}">{{ $c->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-info btn-block">Preview</button>
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
                                    <input type="text" class="form-control counting" name="size">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Miles/Hour</label>
                                    <input type="text" class="form-control counting" name="speed">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Capacity</label>
                                    <input type="text" class="form-control counting" name="capacity">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Beds</label>
                                    <input type="text" class="form-control counting" name="beds">
                                </div>
                                
                                <!--New Form fields Start-->
                                <div class="form-group">
                                    <label class="font-weight-bold">Boat Type</label>
                                    <select class="form-control multiselect-ui" name="boatType[]" multiple="" id="boatType" style="display: none;">
                                        <?php
                                        if(!empty($boatType))
                                        {
                                            foreach ($boatType as $key => $value) {
                                        ?>
                                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
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
                                        ?>
                                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
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
                                        ?>
                                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
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
                            <input type="hidden" name="image" id="selected-image" value="{{ old('image') }}">
                            <img src="{{ old('image') }}" alt="Preview" id="preview-image" style="width: 100%;">
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
                                <button style="display: none;" type="button" id="delToysColBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Column</button>

                                <button type="button" id="addToysColBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Column</button></button>
                            </div>
                        </div>
                        
                        <div class="card-body" id="waterToysRow">
                            <div class="row">
                                <input type="hidden" class="form-control" id="waterRows" value="2">
                                <input type="hidden" class="form-control" id="waterCols" value="5">
                                <?php
                                    $i = 1;
                                    foreach ($waterToysCat as $index => $cat) {
                                ?>

                                <div class="col-md-12 mt-3">
                                    <div class="table-responsive-sm">
                                      <table class="table table-bordered" id="table_<?php echo $index ?>">
                                        <thead>
                                            <tr>
                                                <th id="th_0"><input value="Sequence" class="form-control counting" type="text"></th>
                                                <th id="th_1" colspan="2">
                                                    <select class="form-control" name="wcat_id[]">
                                                        <option value="<?php echo $index ?>"><?php echo $cat ?></option>
                                                    </select>
                                                </th>
                                                
                                                <th id="th_2"><input value="Link" class="form-control" type="text"/></th>
                                                
                                                <th id="th_3"><input value="Icon" class="form-control" type="text"></th>

                                                <!--<th id="th_5"><input value="Cost" class="form-control" name="tkeynameCat_<?php //echo $index ?>[]" data-id="<?php //echo $index ?>" type="text"></th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="waterRows">
                                                <td id="td_0"><input class="form-control" name="sequencecat_<?php echo $index ?>[]" type="text" value="">
                                                <td id="td_1"><input class="form-control" name="keycat_<?php echo $index ?>[]" type="text" value="" placeholder="Heading"></td>

                                                <td id="td_2"><input class="form-control" name="valcat_<?php echo $index ?>[]" type="text" value="" placeholder="Value"></td>

                                                <td id="td_3"><input class="form-control" name="linkcat_<?php echo $index ?>[]" type="text" value="">
                                                </td>

                                                <td id="td_4">
                                                    <?php /*<input class="form-control" name="iconkeycat_<?php echo $index ?>[]" type="text" value=""> */ ?>

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
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                                <?php $i++; } ?>

                                <div class="col-md-12">
                                    <button style="display: none;" type="button" id="delToysRowBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Row</button>
                                    <button type="button" id="addToysRowBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Row</button>
                                </div>

                                <!--<div class="col-md-4 mt-3">
                                    <div class="table-responsive-sm">
                                      <table class="table table-bordered" id="AdvToysTable">
                                        <thead>
                                            <tr id="advBox">
                                                <th id="th_1">
                                                    <select class="form-control" name="cat_id[]">
                                                        <option>Category 1</option>
                                                        <option>Category 1</option>
                                                    </select>
                                                </th>
                                                
                                                <th id="th_2"><input value="Cost" class="form-control" name="keyname[]" type="text"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="advValues">
                                                <td id="td_1"><input class="form-control" name="hours[]" type="text" value=""></td>

                                                <td id="td_2"><input class="form-control" name="times[]" type="text" value="">
                                                </td>
                                            </tr>
                                        </tbody>
                                      </table>
                                    </div>

                                    <button style="display: none;" type="button" id="delPackageRowBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Row</button>
                                    <button type="button" id="addPackageRowBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Row</button>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="table-responsive-sm">
                                      <table class="table table-bordered" id="AdvToysTable">
                                        <thead>
                                            <tr id="advBox">
                                                <th id="th_1">
                                                    <select class="form-control" name="cat_id[]">
                                                        <option>Category 1</option>
                                                        <option>Category 1</option>
                                                    </select>
                                                </th>
                                                
                                                <th id="th_2"><input value="Cost" class="form-control" name="keyname[]" type="text"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="advValues">
                                                <td id="td_1"><input class="form-control" name="hours[]" type="text" value=""></td>

                                                <td id="td_2"><input class="form-control" name="times[]" type="text" value="">
                                                </td>
                                            </tr>
                                        </tbody>
                                      </table>
                                    </div>

                                    <button style="display: none;" type="button" id="delPackageRowBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Row</button>
                                    <button type="button" id="addPackageRowBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Row</button>
                                </div>-->
                            </div>

                            <!--<div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Category</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Key</label>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Value</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Cost</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="waterToysFields">    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="form-control" name="tcat_id[]">
                                            <option value="">Please Select</option>
                                            <?php foreach ($waterToysCat as $index => $cat) { ?>
                                            <option value="<?php echo $index ?>"><?php echo $cat ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input class="form-control" name="tkeyname[]" type="text" value="">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input class="form-control" name="tvalue[]" type="text" value="">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input class="form-control" name="tcost[]" type="text" value="">
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <!--Water Toys box end-->
                    <!--Package box start-->        
                    <div class="card mt-3">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Package</span>
                                
                                <button style="display: none;" type="button" id="delPackageColBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Column</button>

                                <button type="button" id="addPackageColBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Column</button>
                                <input type="hidden" id="packageRows" value="2">
                                <input type="hidden" id="packageCols" value="6">
                                <input type="hidden" id="page" value="addboat">
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
                                                <th id="th_1"><input value="Hours" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_2"><input value="Times" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_3"><input value="Base Cost" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_4"><input value="Fuel" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_5"><input value="Gratuity" class="form-control" name="keyname[]" type="text"></th>
                                                
                                                <th id="th_6"><input value="Total Cost" class="form-control" name="keyname[]" type="text"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="packageValues">
                                                <td id="td_1"><input class="form-control" name="hours[]" type="text" value=""></td>

                                                <td id="td_2"><input class="form-control" name="times[]" type="text" value="">
                                                </td>
                                                
                                                <td id="td_3"><input class="form-control" name="basecost[]" type="text" value=""></td>
                                                
                                                <td id="td_4"><input class="form-control" name="fuel[]" type="text" value=""></td>
                                                
                                                <td id="td_5"><input class="form-control" name="gratuity[]" type="text" value=""></td>
                                                
                                                <td id="td_6"><input class="form-control" name="totalcost[]" type="text" value=""></td>
                                            </tr>
                                        </tbody>
                                      </table>
                                    </div>

                                    <button style="display: none;" type="button" id="delPackageRowBtn" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Row</button>
                                    <button type="button" id="addPackageRowBtn" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> Add Row</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Package box end-->
                </div>
                       
                <!--Heading and Content box start-->        
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

                            <?php for($i=1; $i <= 30; $i++){ ?>
                            <div class="row" id="headingcontentFields<?php echo $i ?>" <?php if($i != 1){ ?> style="display: none;" <?php } ?>>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="heading[]" type="text" value="">
                                    </div>
                                </div>
                                 <div class="col-md-8">
                                    <div class="form-group">
                                        <!--<textarea name="contentnew[]" class="form-control"
                                          style="min-height: 100px;"></textarea>-->
                                        <textarea name="contentnew[]" class="content<?php echo $i ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <input type="hidden" id="totalHC1" name="totalHC1" value="1">
                        </div>
                    </div>
                </div>
                <!--Heading and Content box end-->
                
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="font-weight-bold">Local cruising Area</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="local_cruising_area" id="selected-image" value="{{ old('new_local_cruising_area') }}">
                                <img src="{{ old('new_local_cruising_area') }}" alt="Preview" id="preview-image" style="width: 100%;">
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

                                <!--<button style="display: none;" type="button" id="delHCBtn2" class="btn btn-danger btn-sm pull-right ml-2"><i class="fa fa-trash"></i> Delete Row</button>-->

                                <button type="button" id="addheadingcontent2" class="btn btn-info btn-sm pull-right">+ Add more</button>
                            </div>
                        </div>
                        
                        <div class="card-body" id="headingcontentRowTwo">
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

                            <?php for($i=1 ; $i <= 30; $i++){ ?>
                            <div class="row" id="headingcontentFieldsTwo<?php echo $i ?>" <?php if($i != 1){ ?> style="display: none;" <?php } ?>>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" name="heading_two[]" type="text" value="">
                                    </div>
                                    <button type="button" id="HCTwoDel_<?php echo $i ?>" data-id="<?php echo $i ?>" class="btn btn-danger btn-sm deleteHC2"><i class="fa fa-trash"></i> Delete</button>
                                </div>
                                 <div class="col-md-8">
                                    <div class="form-group">
                                        <textarea name="content_two[]" class="contentTwo<?php echo $i ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <input type="hidden" id="totalHC2" name="totalHC2" value="1">
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
                            <!-- <div class="card-body">
                                <input type="text" name="old_brochure" id="selected-image" value="{{ old('brochure') }}">
                            </div> -->
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
                            <!-- <div class="card-body">
                                <input type="text" name="old_brochure" id="selected-image" value="{{ old('brochure') }}">
                            </div> -->
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
                                          >{{ old('meta_keyword') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Meta Description</label>
                                <textarea name="meta_description" class="form-control"
                                          >{{ old('meta_description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">SEO Brad Data</label>
                                <textarea name="seo_brad_data" maxlength="1000" rows="10" class="form-control">{{ old('seo_brad_data') }}</textarea>
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
                                            <textarea maxlength="250" name="jkeyword1" class="form-control" style="min-height: 100px;">{{ old('jkeyword1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea maxlength="250" name="jkeyword2" class="form-control" style="min-height: 100px;">{{ old('jkeyword2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea maxlength="250" name="jkeyword3" class="form-control" style="min-height: 100px;">{{ old('jkeyword3') }}</textarea>
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
                                            <textarea name="urlranking1" class="form-control" style="min-height: 100px;">{{ old('urlranking1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="urlranking2" class="form-control" style="min-height: 100px;">{{ old('urlranking2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="urlranking3" class="form-control" style="min-height: 100px;">{{ old('urlranking3') }}</textarea>
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
                                            <textarea name="exactkey1" class="form-control" style="min-height: 100px;">{{ old('exactkey1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="exactkey2" class="form-control" style="min-height: 100px;">{{ old('exactkey2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="exactkey3" class="form-control" style="min-height: 100px;">{{ old('exactkey3') }}</textarea>
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
                                            <textarea name="densitykey1" class="form-control" style="min-height: 100px;">{{ old('densitykey1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="densitykey2" class="form-control" style="min-height: 100px;">{{ old('densitykey2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="densitykey3" class="form-control" style="min-height: 100px;">{{ old('densitykey3') }}</textarea>
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
                                            <textarea name="varkey1" class="form-control" style="min-height: 100px;">{{ old('varkey1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="varkey2" class="form-control" style="min-height: 100px;">{{ old('varkey2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="varkey3" class="form-control" style="min-height: 100px;">{{ old('varkey3') }}</textarea>
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
                                            <textarea name="lsikey1" class="form-control" style="min-height: 100px;">{{ old('lsikey1') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 2</label>
                                            <textarea name="lsikey2" class="form-control" style="min-height: 100px;">{{ old('lsikey2') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Keyword 3</label>
                                            <textarea name="lsikey3" class="form-control" style="min-height: 100px;">{{ old('lsikey3') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Total Words/Character-->    
                            <?php /*
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6><b>Total Words & Characters</b></h6>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Total Words</label>
                                            <input name="total_words" readonly="" id="total_words" class="form-control" value="0" /> 
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Total Characters</label>
                                            <input name="total_chars" readonly="" id="total_chars" class="form-control" value="0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            */ ?>

                        </div>
                    </div>
                </div>
                <!--SEO Tools End-->

            </div>
        </form>
    </div>
    <br/>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute: "{{ url('/') }}/",
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
@endsection
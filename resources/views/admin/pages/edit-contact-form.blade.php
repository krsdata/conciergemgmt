@extends('admin.mainframe')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Contact Form</h1>
        </div>

        @include('admin.includes.messages')

        <div class="row" id="builder">
        </div>

        <br/>
        <form method="post" action="{{ url('/dashboard/contact-forms/edit/'.$forms->id) }}">
            @csrf
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Attach to a page/category/boat</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Choose from below...</option>
                            <!--<option value="general" @if($forms->type == 'general'){{ 'selected' }}@endif>General</option>-->
                            <option value="page" @if($forms->type == 'page'){{ 'selected' }}@endif>Page</option>
                            <option value="category" @if($forms->type == 'category'){{ 'selected' }}@endif>Category</option>
                            <option value="boat" @if($forms->type == 'boat'){{ 'selected' }}@endif>Boat</option>
                            <option value="dest" @if($forms->type == 'dest'){{ 'selected' }}@endif>Destination</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4" id="optionBox">
                    <?php  /*
                    <div class="form-group">
                        <label>Select a particular page/category/boat</label>
                        <select class="form-control" name="pbc_id" id="pbc">
                            @if($forms->type == 'page')
                                {!! $pages !!}
                                @elseif($forms->type == 'category')
                                {!! $categories !!}
                                @elseif($forms->type == 'boat')
                                {!! $boats !!}
                                @elseif($forms->type == 'dest')
                                {!! $dest !!}
                                @else
                            <option value="">Choose from below...</option>
                                @endif
                        </select>
                    </div>
                    */ ?>

                    <label>Select a particular page/category/boat</label>

                    <!--Pages-->
                    <div class="form-group" id="allPages" <?php if($forms->type != 'page') { ?> style="display: none;" <?php } ?>>
                        <select class="form-control multiselect-ui" multiple="" style="display: none;" <?php if($forms->type == 'page') echo 'name="pbc_id[]"'; ?>>
                            <?php
                                if(!empty($allPages)){
                                foreach ($allPages as $p) {
                                    $selected = '';
                                    if($forms->type == 'page'){
                                        foreach ($cfUses as $row) { 
                                            if($row->pbc_id == $p->id)
                                                $selected = 'selected="selected"';
                                        }
                                    }
                            ?>
                            <option <?php echo $selected ?> value="<?php echo $p->id ?>"><?php echo $p->page_name ?></option>
                            <?php }} ?>
                        </select>
                    </div>

                    <!--allCategories-->
                    <div class="form-group" id="allCategories" <?php if($forms->type != 'category') { ?> style="display: none;" <?php } ?>>
                        <select class="form-control multiselect-ui" multiple="" style="display: none;" <?php if($forms->type == 'category') echo 'name="pbc_id[]"'; ?>>
                            <?php
                                if(!empty($allCategories)){
                                foreach ($allCategories as $p) {
                                    $selected = '';
                                    if($forms->type == 'category'){
                                        foreach ($cfUses as $row) { 
                                            if($row->pbc_id == $p->id)
                                                $selected = 'selected="selected"';
                                        }
                                    }
                            ?>
                            <option <?php echo $selected ?> value="<?php echo $p->id ?>"><?php echo $p->title ?></option>
                            <?php }} ?>
                        </select>
                    </div>

                    <!--allBoats-->
                    <div class="form-group" id="allBoats" <?php if($forms->type != 'boat') { ?> style="display: none;" <?php } ?>>
                        <select class="form-control multiselect-ui" multiple="" style="display: none;" <?php if($forms->type == 'boat') echo 'name="pbc_id[]"'; ?>>
                            <?php
                                if(!empty($allBoats)){
                                foreach ($allBoats as $p) {
                                    $selected = '';
                                    if($forms->type == 'boat'){
                                        foreach ($cfUses as $row) { 
                                            if($row->pbc_id == $p->id)
                                                $selected = 'selected="selected"';
                                        }
                                    }

                            ?>
                            <option <?php echo $selected ?> value="<?php echo $p->id ?>"><?php echo $p->page_name ?></option>
                            <?php }} ?>
                        </select>
                    </div>
                    
                    <!--allDest-->
                    <div class="form-group" id="allDest" <?php if($forms->type != 'dest') { ?> style="display: none;" <?php } ?>>
                        <select class="form-control multiselect-ui" multiple="" style="display: none;" <?php if($forms->type == 'dest') echo 'name="pbc_id[]"'; ?>>
                            <?php
                                if(!empty($allDest)){
                                foreach ($allDest as $d) {
                                    $selected = '';
                                    if($forms->type == 'dest'){
                                        foreach ($cfUses as $row) { 
                                            if($row->pbc_id == $d->id)
                                                $selected = 'selected="selected"';
                                        }
                                    }
                            ?>
                            <option <?php echo $selected ?> value="<?php echo $d->id ?>"><?php echo $d->page_name ?></option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Title (Optional)</label>
                        <input type="text" class="form-control" name="title" value="{{ $forms->title }}">
                        <input type="hidden" name="components" id="form-comp">
                        <button type="submit" class="btn btn-outline-success float-right mt-3 mr-3">Save</button>
                        <a href="{{ url('/dashboard/contact-forms') }}" class="btn btn-outline-danger float-right mt-3 mr-3" >Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection
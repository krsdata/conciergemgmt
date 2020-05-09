@extends('admin.mainframe')
@section('content')

<?php
    //Call User Privileges
    $canEdit = true; $canDelete = true;
    $access = \App\Helper\CommonFunction::getUserAccess('settings');
    if(!empty($access)){
        if($access->can_write == NULL)
            $canEdit = false;
        if($access->can_delete == NULL)
            $canDelete = false;
    }
?>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    
<style>
    .error{
        font-size: 1rem;
    }
</style> 
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>

        <!-- Page Heading -->
        <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Settings</h1>
        </div>-->

        @include('admin.includes.messages')

        <?php
            $phone = $email = $top_text = $address = $sl_fb = $sl_twitter = $sl_ta = null;
            foreach($settings as $s){
                if($s->key == 'phone_number'){
                    $phone = $s->value;
                }
                if($s->key == 'company_email'){
                    $email = $s->value;
                }
                if($s->key == 'top_text'){
                    $top_text = $s->value;
                }
                if($s->key == 'company_address'){
                    $address = $s->value;
                }
                if($s->key == 'sl_fb'){
                    $sl_fb = $s->value;
                }
                if($s->key == 'sl_twitter'){
                    $sl_twitter = $s->value;
                }
                if($s->key == 'sl_ta'){
                    $sl_ta = $s->value;
                }
            }
        ?>

        <div class="row">
             <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Top Left Bar
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/dashboard/settings') }}" id="setti_text">
                            @csrf
                            <input type="text" class="form-control" name="top_text" value="{{ $top_text }}">
                        </form>
                    </div>
                    <?php if($canEdit) { ?>
                    <div class="card-footer">
                        <button type="submit" form="setti_text" class="btn btn-outline-success float-right mr-3">Save</button>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Top Center Phone Bar
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/dashboard/settings') }}" id="setti_phone">
                            @csrf
                            <input type="number" class="form-control" name="phone_number" value="{{ $phone }}">
                        </form>
                    </div>
                    <?php if($canEdit) { ?>
                    <div class="card-footer">
                        <button type="submit" form="setti_phone" class="btn btn-outline-success float-right mr-3">Save</button>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Top Right e-mail address
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/dashboard/settings') }}" id="setti_email">
                            @csrf
                            <input type="text" class="form-control" name="company_email" value="{{ $email }}">
                        </form>
                    </div>
                    <?php if($canEdit) { ?>
                    <div class="card-footer">
                        <button type="submit" form="setti_email" class="btn btn-outline-success float-right mr-3">Save</button>
                    </div>
                    <?php } ?>
                </div>
            </div>
           
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Company address
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/dashboard/settings') }}" id="setti_address">
                            @csrf
                            <textarea class="form-control" name="company_address" rows="6">{{ $address }}</textarea>
                        </form>
                    </div>
                    <?php if($canEdit) { ?>
                    <div class="card-footer">
                        <button type="submit" form="setti_address" class="btn btn-outline-success float-right mr-3">Save</button>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Footer social links
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/dashboard/settings') }}" id="setti_sl">
                            @csrf
                            <div class="form-group">
                                <label>Facebook : </label>
                                <input type="text" class="form-control" name="sl_fb" value="{{ $sl_fb }}">
                            </div>
                            <div class="form-group">
                                <label>Instagram : </label>
                                <input type="text" class="form-control" name="sl_twitter" value="{{ $sl_twitter }}">
                            </div>
                            <div class="form-group">
                                <label>TripAdvisor : </label>
                                <input type="text" class="form-control" name="sl_ta" value="{{ $sl_ta }}">
                            </div>
                        </form>
                    </div>
                    <?php if($canEdit) { ?>
                    <div class="card-footer">
                        <button type="submit" form="setti_sl" class="btn btn-outline-success float-right mr-3">Save</button>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
         
        <div class="row">
            <div class="col-lg-6">
                
                <div class="card">
                        @if (count($errors) > 0)
                             <div class = "alert alert-danger">
                                <ul>
                                   @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                   @endforeach
                                </ul>
                             </div>
                        @endif
                    <div class="card-header">
                        <div class="card-title">Add a Logo</div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/dashboard/addlogo') }}" method="post" enctype="multipart/form-data" id="update_logo">
                            @csrf
                            
                            <?php foreach($logos as $logo){ ?>
                                <img src="{{ asset('/photos/'.$logo['logo']) }}" height="30px" width="30px" id="blah">
                            <?php } ?>
                            <div>
                                <label>Logo</label>
                                <input type="file" name="logo" id="imgInp" accept="image/jpg,image/jpeg,image/png">
                            </div>
                            <div>*Note: Best dimension is 170 px *150 px.</div><br/>
                            <?php if($canEdit) { ?>
                            <div>
                                <button type="submit" class="btn btn-outline-success pull-right">Add Logo</button>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php if($canEdit) { ?>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Change Instagram Setting</div>
                    </div>
                    <div class="card-body">
                        <div class="col">
                            <div class="custom-control custom-switch">
                                <input data-id="1" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
           
        </div>
        </div>
    


    </div>
    <!-- /.container-fluid -->

@endsection
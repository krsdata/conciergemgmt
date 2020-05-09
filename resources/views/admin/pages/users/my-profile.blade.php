@extends('admin.mainframe')
@section('content')
	<style type="text/css">
		.profile_pic{
			width: 150px;
			height: 156px;
		}
	</style>

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Profile</li>
        </ol>

        @include('admin.includes.messages')
		
		<!--Preview Start-->
        <div class="row" id="profilePreviewBox">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">
	                    <div class="card-title">
	                        <span class="font-weight-bold">My Profile Info</span>
	                    </div>
	                </div>
	                <div class="card-body">
	                    <div class="row">
	                    	<div class="col-md-4 text-center">
	                        	<div class="form-group">
	                        	<?php if($user->profile_pic != NULL){  ?>
									<img class="img-profile profile_pic rounded-circle" src="{{ asset('/photos/2/users/'. $user->profile_pic) }}">
								<?php } else { ?>
									<img class="img-profile profile_pic rounded-circle" src="{{ asset('/admin/img/profile.png') }}">
								<?php } ?>
									<p class="font-weight-bold"><?php echo $user->name ?></p>
									<button type="buttom" id="showEditForm" class="btn btn-primary btn-block">Edit Info</button>
								</div>
	                        </div>

	                    	<div class="col-md-8">
	                        	<div class="row">
									<div class="col-md-6">
			                            <div class="form-group">
			                            	<label><i class="fa fa-envelope"></i> Email</label>
			                            	<p class="font-weight-bold"><?php echo $user->email ?></p>
			                            </div>
			                            <hr>
			                        </div>
		                            
		                        	<div class="col-md-6">
			                            <div class="form-group">
			                            	<label><i class="fa fa-phone"></i> Phone Number</label>
			                            	<p class="font-weight-bold"><?php echo $user->phone ?></p>
			                            </div>
			                            <hr>
		                            </div>


		                            <div class="col-md-6">
			                            <div class="form-group">
			                            	<label><i class="fas fa-user-tie"></i> Role</label>
			                            	<p class="font-weight-bold"><?php echo ucwords($user->role) ?></p>
			                            </div>
			                            <hr>
		                            </div>

		                            <div class="col-md-6">
			                            <div class="form-group">
			                            	<label><i class="fa fa-calendar"></i> Member Since</label>
			                            	<p class="font-weight-bold"><?php echo date("d-m-Y", strtotime($user->created_at )) ?></p>
			                            </div>
			                            <hr>
			                        </div>

			                        <div class="col-md-6">
			                            <div class="form-group">
			                            	<label><i class="fa fa-info-circle"></i> Status</label>
			                            	<p class="font-weight-bold"><?php echo ucwords($user->status) ?></p>
			                            </div>
			                            <hr>
			                        </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--Preview End-->


        <form method="POST" enctype="multipart/form-data" id="profileEditForm" style="display: none;">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Enter Profile Info</span>
                                <button type="button" id="showProfile" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            	<div class="col-md-6">
									<div class="form-group">
		                                <label class="font-weight-bold">Name *</label>
		                                <input class="form-control" value="<?php echo $user->name ?>" required="" name="name" id="name" type="text">
		                            </div>
		                        
		                            <div class="form-group">
		                                <label class="font-weight-bold">Email *</label>
		                                <input class="form-control" value="<?php echo $user->email ?>" required="" name="email" id="email" type="email">
		                            </div>
		                        
		                            <div class="form-group">
		                                <label class="font-weight-bold">Phone Number</label>
		                                <input class="form-control" value="<?php echo $user->phone ?>" name="phone" id="phone" type="text">
		                            </div>
		                        </div>

		                        <div class="col-md-6">
		                        	<?php if($user->profile_pic != NULL){  ?>
		                            <div class="form-group text-center">
										<img class="img-profile profile_pic rounded-circle" src="{{ asset('/photos/2/users/'. $user->profile_pic) }}">
									</div>
									<?php } ?>
									<div class="form-group">
										<label class="font-weight-bold">Profile Picture</label>
		                                <input class="form-control" name="profile_pic" id="profile_pic" accept="image/*" type="file">
		                                <input class="form-control" name="old_pic" type="hidden" value="<?php echo $user->profile_pic ?>" >
		                            </div>
		                        </div>
								
								<div class="col-md-12">
		                            <div class="form-group"> 
	                                    <button type="submit" name="submit" class="col-md-2 btn btn-outline-success btn-block">Update Profile</button>
		                            </div>
		                        </div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
@endsection
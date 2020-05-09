@extends('admin.mainframe')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add User</li>
        </ol>

        @include('admin.includes.messages')


        <form method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Enter User Info</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            	<div class="col-md-6">
		                            <div class="form-group">
		                                <label class="font-weight-bold">Name *</label>
		                                <input class="form-control" value="<?php echo $userData['name'] ?>" required="" name="name" id="name" type="text">
		                            </div>
		                        </div>

		                        <div class="col-md-6">
		                            <div class="form-group">
		                                <label class="font-weight-bold">Email *</label>
		                                <input class="form-control" value="<?php echo $userData['email'] ?>" required="" name="email" id="email" type="email">
		                            </div>
		                        </div>

		                        <div class="col-md-6">
		                            <div class="form-group">
		                                <label class="font-weight-bold">Phone Number</label>
		                                <input class="form-control" value="<?php echo $userData['phone'] ?>" name="phone" id="phone" type="text">
		                            </div>
		                        </div>

		                        <div class="col-md-6">
		                            <div class="form-group">
		                                <label class="font-weight-bold">Status *</label>
		                                <select class="form-control" name="status" id="status">
		                                	<option <?php if($userData['name'] == 'active') echo 'selected="selected"' ?> value="active">Active</option>
		                                	<option <?php if($userData['name'] == 'inactive') echo 'selected="selected"' ?> value="inactive">Inactive</option>
		                                </select>
		                            </div>
		                        </div>

                            	<div class="col-md-6">
		                            <div class="form-group">
		                                <label class="font-weight-bold">Login Password *</label>
		                                <input class="form-control" <?php if($userData['id'] == '') echo 'required=""' ?> name="new_password" id="new_password" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 5 characters' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" pattern="^\S{5,}$">
										
										<?php if($userData['id'] != '') { ?>
		                                <span><small>(Password can't be decrypted, so enter new password if you want to change, else leave it blank)</small></span>
		                            	<?php } ?>
		                            </div>
		                        </div>

		                        <div class="col-md-6">
		                            <div class="form-group">
		                                <label class="font-weight-bold">Confirm Password *</label>
		                                <input class="form-control" <?php if($userData['id'] == '') echo 'required=""' ?> name="confirm_password" id="confirm_password" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Confirm Password is not matched' : '');" pattern="^\S{5,}$">
		                            </div>
		                        </div>
								
								<div class="col-md-12">
		                            <div class="form-group">
	                                    <button type="submit" name="submit" class="col-md-2 btn btn-outline-success btn-block"><?php if($userData['id'] == '') echo "Add"; else echo "Update"  ?></button>
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
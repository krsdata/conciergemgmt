@extends('admin.mainframe')
@section('content')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit Role</li>
        </ol>

        @include('admin.includes.messages')


        <form method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Enter Role Info</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            	<div class="col-md-6">
		                            <div class="form-group">
		                                <label class="font-weight-bold">Role Name *</label>
		                                <input class="form-control" required="" name="role" id="role" type="text" value="<?php echo $role ?>">
		                            </div>
		                        </div>

		                        <div class="col-md-12">
		                        	<div class="table-responsive-sm">
	                                	<table class="table table-bordered">
	                                		<thead>
	                                        	<tr>
	                                        		<th>Module</th>
	                                        		<th>Read</th>
	                                        		<th>Write</th>
	                                        		<th>Delete</th>
	                                        	</tr>
	                                        </thead>
	                                        <tbody>
	                                        	<?php 
	                                        		foreach ($modules as $key => $m) { 
	                                        			$name = $key; //strtolower($m);

	                                        			$read = false;
	                                        			$write = false;
	                                        			$delete = false;

	                                        			if(count($UserRole)) {
		                                					foreach ($UserRole as $row) {
		                                						if($row->module_type == $name && $row->can_read == 'on')
		                                							$read = true;

		                                						if($row->module_type == $name && $row->can_write == 'on')
		                                							$write = true;

		                                						if($row->module_type == $name && $row->can_delete == 'on')
		                                							$delete = true;
		                                					}
		                                				}
	                                        	?>
	                                        	<tr>
	                                        		<th>
	                                        			<?php echo ucwords($m) ?>
	                                        		</th>
	                                        		<td>
	                                        			<label class="module-options">
														  <input <?php if($read) echo 'checked="checked"' ?> type="checkbox" name="read_<?php echo $name ?>" >
														  <span class="checkmark"></span>
														</label>
	                                        		</td>
	                                        		<td>
	                                        			<label class="module-options">
														  <input <?php if($write) echo 'checked="checked"' ?> type="checkbox" name="write_<?php echo $name ?>">
														  <span class="checkmark"></span>
														</label>
	                                        		</td>
	                                        		<td>
	                                        			<label class="module-options">
														  <input <?php if($delete) echo 'checked="checked"' ?> type="checkbox" name="delete_<?php echo $name ?>">
														  <span class="checkmark"></span>
														</label>
	                                        		</td>
	                                        	</tr>
	                                        	<?php } ?>
	                                        </tbody>
	                                    </table>
	                                </div>   
		                        </div>
		                        
								<div class="col-md-12">
		                            <div class="form-group">
	                                    <button type="submit" name="submit" class="col-md-2 btn btn-outline-success btn-block">Update</button>
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
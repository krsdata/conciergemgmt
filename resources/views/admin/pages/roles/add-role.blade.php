@extends('admin.mainframe')
@section('content')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add New Role</li>
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
		                                <input class="form-control" required="" name="role" id="role" type="text">
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
	                                        		foreach ($modules as $m) { 
	                                        			$name = strtolower($m);
	                                        	?>
	                                        	<tr>
	                                        		<th>
	                                        			<?php echo ucwords($m) ?>
	                                        		</th>
	                                        		<td>
	                                        			<label class="module-options">
														  <input type="checkbox" name="read_<?php echo $name ?>" >
														  <span class="checkmark"></span>
														</label>
	                                        		</td>
	                                        		<td>
	                                        			<label class="module-options">
														  <input type="checkbox" name="write_<?php echo $name ?>">
														  <span class="checkmark"></span>
														</label>
	                                        		</td>
	                                        		<td>
	                                        			<label class="module-options">
														  <input type="checkbox" name="delete_<?php echo $name ?>">
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
	                                    <button type="submit" name="submit" class="col-md-2 btn btn-outline-success btn-block">Create</button>
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
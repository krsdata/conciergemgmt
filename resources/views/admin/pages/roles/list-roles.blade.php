@extends('admin.mainframe')
@section('content')

<style type="text/css">
	i.success{
		color: #07b704;
		font-size: 20px;
	}
	i.danger{
		color: #f00;
		font-size: 20px;
	}
</style>

    <!-- Begin Page Content -->
    <div class="container-fluid rolesList">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Roles</li>
        </ol>

        @include('admin.includes.messages')

        <div class="row">
            
            <?php 
            	foreach($roleList as $r) { 
            ?>
            <div class="col-md-12 mb-4">
                <div class="card">
					<div class="card-header">
                        <div class="card-title">
                            <span class="roleName">Role: <span class="font-weight-bold"><?php echo $r->role ?></span></span>
							
                            <?php if(strtolower($r->role) != 'admin'){ ?>
							<a href="{{ url('/dashboard/list-roles/'.$r->id) }}" class="btn btn-sm btn-outline-danger pull-right" onclick="return confirm('Are you sure you want to delete this?');">Delete</a>

                            <a href="{{ url('/dashboard/edit-role/'.$r->id) }}" class="btn btn-sm btn-outline-info pull-right mr-2">Edit</a>
                            <?php } ?>

                            <button data-id="<?php echo $r->id ?>" class="showHideAccess btn btn-sm btn-outline-primary pull-right mr-2">View Access</button>

                            <input type="hidden" id="showhide" value="0">
                        </div>
                    </div>
                    <div class="card-body roles-box" id="roles_<?php echo $r->id ?>" style="display: none;">
						<div class="row">
							<div class="col-md-6">
								<p>Created On: <span class="font-weight-bold"><?php echo date("d-m-Y, H:i A", strtotime($r->created_at)) ?></span></p>
							</div>

							<div class="col-md-6 text-right">
								<p>Last Modified On: <span class="font-weight-bold"><?php echo date("d-m-Y, H:i A", strtotime($r->updated_at)) ?></span></p>
							</div>
						</div>

                    	<div class="table-responsive-sm">
                        	<table class="table table-bordered">
                        		<thead>
                                	<tr>
                                		<th>Module</th>
                                		<th class="text-center">Read</th>
                                		<th class="text-center">Write</th>
                                		<th class="text-center">Delete</th>
                                	</tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		foreach ($modules as $key => $m) { 
                                			$module = $key; //strtolower($m);

                                			$privileges = \App\UserPrivileges::where(['module_type' => $module, 'role_id' => $r->id])->orderBy('id','asc')->get('*');
                                	?>
                                	<tr>
                                		<th>
                                			<?php echo ucwords($m) ?>
                                		</th>
                                		<td class="text-center">
                                			<?php
                                				if(count($privileges)) {
                                					foreach ($privileges as $row) {
                                						if($row->can_read == 'on')
                                							echo '<i class="fa fa-check success"></i>';
                                						else
                                							echo '<i class="fa fa-times danger"></i>';

                                					}
                                				}
                                			?>
                                		</td>
                                		<td class="text-center">
                                			<?php
                                				if(count($privileges)) {
                                					foreach ($privileges as $row) {
                                						if($row->can_write == 'on')
                                							echo '<i class="fa fa-check success"></i>';
                                						else
                                							echo '<i class="fa fa-times danger"></i>';

                                					}
                                				}
                                			?>
                                		</td>
                                		<td class="text-center">
                                			<?php
                                				if(count($privileges)) {
                                					foreach ($privileges as $row) {
                                						if($row->can_delete == 'on')
                                							echo '<i class="fa fa-check success"></i>';
                                						else
                                							echo '<i class="fa fa-times danger"></i>';

                                					}
                                				}
                                			?>
                                		</td>
                                	</tr>
                                	<?php } ?>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
            <?php } ?>
			
			<div class="col-md-12">
	            <div class="float-right">
	                {{ $roleList->links() }}
	            </div>
	        </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
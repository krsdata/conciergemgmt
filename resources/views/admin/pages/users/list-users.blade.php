@extends('admin.mainframe')
@section('content')
    
    <?php
        //Call User Privileges
        $canEdit = true; $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('users');
        if(!empty($access)){
            if($access->can_write == NULL)
                $canEdit = false;
            if($access->can_delete == NULL)
                $canDelete = false;
        }
    ?>

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Users</li>
        </ol>

        @include('admin.includes.messages')

        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">User's List</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(!empty($users)){
                                        foreach ($users as $row) {
                                            if($row->status == 'active')
                                                $activeCls = 'success';
                                            else
                                                $activeCls = 'danger';


                                    ?>
                                    <tr>
                                        <td><?php echo ucwords($row->name) ." <small>(".ucwords($row->role).")</small>"  ?></td>
                                        <td><?php echo $row->email ?></td>
                                        <td><?php echo $row->phone ?></td>
                                        <td><span class="btn btn-sm btn-<?php echo $activeCls ?>"><?php echo ucwords($row->status) ?></span> </td>

                                        <td><?php echo date("d-m-Y, h:i A", strtotime($row->created_at)) ?></td>
                                        <td>
                                            <?php if($canEdit){ ?>
                                            <a href="{{ url('/dashboard/add-user/'.$row->id) }}" class="btn btn-outline-info">Edit</a>
                                            <?php } if($canDelete && $row->id != $loginUserId){ ?>
                                            <a href="{{ url('/dashboard/list-users/'.$row->id) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this?');">Delete</a>
                                            <?php } if($canEdit == false && $canDelete == false) echo "N/A" ?>
                                        </td>
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    
@endsection
@extends('admin.mainframe')
@section('content')
    <?php
        //Call User Privileges
        $canEdit = true; $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('contact_forms');
        if(!empty($access)){
            if($access->can_write == NULL)
                $canEdit = false;
            if($access->can_delete == NULL)
                $canDelete = false;
        }
    ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Contact Forms</h1>
            <a href="{{ url('/dashboard/contact-forms/add') }}" class="btn btn-outline-info">
                <span class="fa fa-plus"></span>
                &nbsp;Add a Contact Form
            </a>
        </div>

        @include('admin.includes.messages')

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect02">With selected</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect02">
                                <option value="Un-publish">Un-publish</option>
                                <option value="Publish">Publish</option>
                                <option value="Thrash">Thrash</option>
                                <option value="Delete">Delete</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Show</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect03">Filter by status</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect03">
                                <option value="0">In-active</option>
                                <option value="1">Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search here..." aria-label="Search here..." aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Title</th>
                        <th>Short Code</th>
                        <th>Attached to</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forms as $p)
                        <tr class="text-center">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck{{ $p->id }}">
                                    <label class="custom-control-label" for="customCheck{{ $p->id }}"></label>
                                </div>
                            </td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->short_code }}</td>
                            
                            <td>@if(isset($p->pbc)){{ '('.$p->type.') '.$p->pbc }}@endif</td>

                            <?php /* <td>@if(isset($p->pbc)){{ '('.$p->type.') '.$p->pbc->title }}@endif</td> */ ?>
                            <td>@if($p->{'status'} == '1'){{ 'Published' }}@else{{ 'Inactive' }}@endif</td>
                            <td>
                                <?php if($canEdit){ ?>
                                
                                <a onclick="return confirm('Do you want to copy this form?')" href="{{ url('/dashboard/contact-forms/?ref=copy&id='.$p->id) }}" class="btn btn-outline-primary">Copy</a>
                                
                                <a href="{{ url('/dashboard/contact-forms/edit/'.$p->id) }}" class="btn btn-outline-info">Edit</a>
                                <?php } if($canDelete){ ?>
                                <a href="#" rel="{{ $p->id }}" class="btn btn-outline-danger delete-form" data-toggle="modal" data-target="#delete-form">Delete</a>
                                <?php } if($canEdit == false && $canDelete == false) echo "N/A" ?>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    {{ $forms->links() }}
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
@extends('admin.mainframe')
@section('content')
    
    <?php
        //Call User Privileges
        $canEdit = true; $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('menus');
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
            <h1 class="h3 mb-0 text-gray-800">All Menus</h1>
        </div>

        @include('admin.includes.messages')

        <div class="row">
            
            <?php if($canEdit) { ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add a Menu</div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/dashboard/menus') }}">
                            @csrf
                            <div class="form-group">
                                <label>Menu Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label>Menu Position (Optional)</label>
                                <select class="form-control" name="position">
                                    <option value="">Select from below...</option>
                                    <option value="top-navbar">Top Navbar</option>
                                    <option value="footer">Footer Links</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success pull-right">Add Menu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="col table-responsive">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">All Menus</div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Menu Title</th>
                                <th>Menu Position</th>
                                <th>Status</th>
                                <th>Attach to</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($menus))
                                @foreach($menus as $m)
                                    <tr>
                                        <td>{{ $m->title }}</td>
                                        <td>{{ $m->position }}</td>
                                        <td>{{ $m->status }}</td>
                                        <td></td>
                                        <td>
                                            <?php if($canEdit) { ?>
                                            <a href="{{ url('/dashboard/menus/'.$m->id) }}" class="btn btn-outline-info">
                                            Set menu items</a>
                                            <?php } if($canDelete) { ?>
                                            <button rel="{{ $m->id }}" class="btn btn-outline-danger delete-menus" data-toggle="modal" data-target="#delete-menu-modal">Delete</button>
                                            <?php } if($canEdit == false && $canDelete == false) echo "N/A" ?>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $menus->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
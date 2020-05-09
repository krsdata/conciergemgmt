@extends('admin.mainframe')
@section('content')
    <?php
        //Call User Privileges
        $canEdit = true; $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('destinations');
        if(!empty($access)){
            if($access->can_write == NULL)
                $canEdit = false;
            if($access->can_delete == NULL)
                $canDelete = false;
        }
    ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Destinations</li>
        </ol>

        @include('admin.includes.messages')

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">Destination's List</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th style="width: 30%">Title</th>
                                    <th style="width: 30%">Category</th>
                                    <th style="width: 15%">Status</th>
                                    <th style="width: 25%">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($destList as $p)
                                    <tr class="text-center">
                                        <td>{{ $p->title }}</td>
                                        <td><?php echo $destCats[$p->cat_id] ?></td>
                                        <td>@if($p->{'status'} == '1'){{ 'Published' }}@else{{ 'Inactive' }}@endif</td>
                                        <td>
                                            <a href="{{ url('/'.$p->slug) }}" target="_blank" class="btn btn-outline-secondary">Preview</a>
                                            <?php if($canEdit){ ?>
                                            <a href="{{ url('/dashboard/add-destination/'.$p->id) }}" class="btn btn-outline-info">Edit</a>
                                            <?php } if($canDelete){ ?>
                                            <a href="{{ url('/dashboard/list-destinations/'.$p->id) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this?');">Delete</a>
                                            <?php  } ?>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="float-right">
                                {{ $destList->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
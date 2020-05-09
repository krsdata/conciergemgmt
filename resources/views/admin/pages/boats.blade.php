@extends('admin.mainframe')
@section('content')
    <?php
        //Call User Privileges
        $canEdit = true; $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('boats');
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
            <li class="breadcrumb-item active">All Boats</li>
        </ol>

        @include('admin.includes.messages')

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>With Selected</label>
                            <select class="form-control" disabled>
                                <option value="delete">Delete</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Sort by</label>
                            <select class="form-control" name="sort" id="sort-by">
                                <option value="ASC" @if($sort == 'ASC'){{ 'selected' }}@endif>Ascending</option>
                                <option value="DESC" @if($sort == 'DESC'){{ 'selected' }}@endif>Descending</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Search by category</label>
                            <select class="form-control" name="category" id="cat-search">
                                <option value="">All</option>
                                @foreach($categories as $c)
                                <option value="{{ $c->id }}" @if($cat == $c->id){{ 'selected' }}@endif>{{ $c->title }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Search by text</label>
                    <input type="text" disabled name="search" class="form-control" placeholder="Search from boats...">
                </div>
            </div>
        </div>

        <div class="row">
            <form method="post" action="{{ url('/dashboard/boats?category='.$cat.'&sort='.$sort) }}" id="save-boat-orders">
                @csrf
                <div id="boat-orders"></div>
            </form>
            <?php if($canEdit){ ?>
            <div class="form-group ml-5">
                <label class="text-info">Drag & reposition the boats to order them on boats pages then click "Save" to save.</label>
                <button class="btn btn-outline-secondary" id="save-order">Save</button>
            </div>
            <?php } ?>
        </div>

        <div class="row sortable">
            <?php if($canEdit) { ?>
            <div class="card shadow ml-4 mb-4" style="width: 18rem;">
                <div class="card-body text-center">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <a class="text-black-50" href="{{ url('/dashboard/boats-add') }}">
                            <span class="fas fa-folder-plus fa-6x"></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>

            @foreach($boats as $boat)
                <div class="card shadow ml-4 mb-4 boat-card" rel="{{ $boat->id }}" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $boat->image }}" alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $boat->title }}</strong></h5>
                        <p class="card-text"><strong>Serial No</strong> : {{ $boat->sn_no }}</p>
                        @if(isset($boat->category))<p class="card-text"><strong>Category</strong> : {{ $boat->category->title }}</p>@endif
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <?php if($canEdit){ ?>
                                <a href="{{ url('/dashboard/boats/'.$boat->id) }}" class="card-link text-info"><strong>Edit</strong></a>
                                <?php } if($canDelete){ ?>
                                <a href="#" rel="{{ $boat->id }}" class="card-link text-danger delete-boats" data-toggle="modal" data-target="#delete-boat"><strong>Delete</strong></a>
                                <?php } ?>
                            </div>

                            <?php if($canEdit){ ?>
                            <div class="col">
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" name="select_boat{{ $boat->id }}" class="custom-control-input" id="boat-select{{ $boat->id }}" style="cursor: pointer;">
                                    <label class="custom-control-label font-weight-bold" for="boat-select{{ $boat->id }}"></label>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
            {{--<nav aria-label="Page navigation example">--}}
                {{--<ul class="pagination">--}}
                    {{--{{ $boats->links() }}--}}
                {{--</ul>--}}
            {{--</nav>--}}
        </div>
    </div>
    @endsection
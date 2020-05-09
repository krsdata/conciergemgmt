@extends('admin.mainframe')
@section('content')
    <?php
        //Call User Privileges
        $canEdit = true; $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('pages');
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
            <li class="breadcrumb-item active">All Sliders</li>
        </ol>

        @include('admin.includes.messages')

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>With Selected</label>
                            <select class="form-control">
                                <option value="delete">Delete</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Pagination size</label>
                            <select class="form-control" name="page_size">
                                <option value="all">All</option>
                                <option value="4">4</option>
                                <option value="8">8</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="20">20</option>
                                <option value="24">24</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Sort by</label>
                            <select class="form-control" name="sort">
                                <option value="ASC">Ascending</option>
                                <option value="DESC">Descending</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Search by category</label>
                            <select class="form-control" name="category_search">
                                <option value="all">All</option>
                                <option value="1">Category 1</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Search by text</label>
                    <input type="text" name="search" class="form-control" placeholder="Search from boats...">
                </div>
            </div>
        </div>

        <div class="row">
            <?php if($canEdit){ ?>
            <div class="card shadow ml-4 mb-4 boat-card" style="width: 18rem;">
                <div class="card-body text-center">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <a class="text-black-50" href="{{ url('/dashboard/sliders/add') }}">
                            <span class="fas fa-folder-plus fa-6x"></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>

            @foreach($sliders as $slider)
                <div class="card shadow ml-4 mb-4 boat-card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $slider->title }}</h5>
                        <p class="card-text">{!! implode("\n", array_slice(explode("\n", substr(preg_replace('/<img[^>]+./', '', html_entity_decode($slider->details)), 0, 100)), 0, 2)) !!}</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <?php if($canEdit){ ?>
                                <a href="{{ url('/dashboard/slider/'.$slider->id) }}" class="card-link text-info">Edit</a>
                                <?php } if($canDelete){ ?>
                                <a href="#" rel="{{ $slider->id }}" class="card-link text-danger delete-slider-fe" data-toggle="modal" data-target="#delete-slider">Delete</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{ $sliders->links() }}
                </ul>
            </nav>
        </div>
    </div>
@endsection
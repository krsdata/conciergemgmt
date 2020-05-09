@extends('admin.mainframe')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Menus - {{ $menu->title }}</h1>
        </div>

        @include('admin.includes.messages')

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Menu items
                        </div>
                    </div>
                    <div class="card-body">
                        <ol class="list-group sortable" id="menu-list">
                            @if(!empty($menus))
                                @foreach($menus as $m)
                                    @if($m->submenus->isEmpty())
                                        <li class="list-group-item" id="{{ 'route_'.$m->details->id }}">
                                            <div class="mb-2 mt-1"><span class="fa fa-arrows"></span>&nbsp;&nbsp;{{ $m->details->title }}
                                                <button rel="{{ $m->details->id }}" class="btn btn-default btn-sm pull-right remove-item">
                                                    <span class="fa fa-remove text-danger"></span>
                                                </button>
                                            </div>
                                        </li>
                                    @else
                                        <li class="list-group-item mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="{{ 'route_'.$m->details->id }}">
                                            <div class="mb-2 mt-1"><span class="fa fa-arrows"></span>&nbsp;&nbsp;{{ $m->details->title }}
                                                <button rel="{{ $m->details->id }}" class="btn btn-default btn-sm pull-right remove-item">
                                                    <span class="fa fa-remove text-danger"></span>
                                                </button>
                                            </div>
                                            <ol>
                                                @foreach($m->submenus as $sm)
                                                    <li class="list-group-item mjs-nestedSortable-leaf" id="{{ 'route_'.$sm->details->id }}">
                                                        <div class="mb-2 mt-1"><span class="fa fa-arrows"></span>&nbsp;&nbsp;{{ $sm->details->title }}
                                                            <button rel="{{ $sm->details->id }}" class="btn btn-default btn-sm pull-right remove-item">
                                                                <span class="fa fa-remove text-danger"></span>
                                                            </button>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        </ol>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success float-right mr-3" id="save-menu">Save</button>
                        <button class="btn btn-danger float-right mr-3" id="cancel">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            All pages & categories
                        </div>
                    </div>
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pages</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Categories</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Boats</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                @foreach($pages as $p)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" rel="{{ $p->id }}" class="custom-control-input pages-id" id="customCheck{{ $p->id }}" name="selected_pages" value="{{ $p->route->id.'_'.$p->title }}" @if(isset($p->menu)){{ 'disabled' }}@endif>
                                        <label class="custom-control-label" for="customCheck{{ $p->id }}">{{ $p->title }}</label>
                                    </div>
                                @endforeach
                                <button class="btn btn-outline-success mt-3" id="add-pages">Add to Menu</button>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                @foreach($categories as $p)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" rel="{{ $p->id }}" class="custom-control-input categories-id" id="category{{ $p->id }}"  name="selected_categories" value="{{ $p->route->id.'_'.$p->title }}" @if(isset($p->menu)){{ 'disabled' }}@endif>
                                        <label class="custom-control-label" for="category{{ $p->id }}">{{ $p->title }}</label>
                                    </div>
                                @endforeach
                                    <button class="btn btn-outline-success mt-3" id="add-cats">Add to Menu</button>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                @foreach($boats as $p)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" rel="{{ $p->id }}" class="custom-control-input boats-id" id="boat{{ $p->id }}" name="selected_boats" value="{{ $p->route->id.'_'.$p->title }}" @if(isset($p->menu)){{ 'disabled' }}@endif>
                                        <label class="custom-control-label" for="boat{{ $p->id }}">{{ $p->title }}</label>
                                    </div>
                                @endforeach
                                    <button class="btn btn-outline-success mt-3" id="add-boats">Add to Menu</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="small">Select from the lists and add...</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
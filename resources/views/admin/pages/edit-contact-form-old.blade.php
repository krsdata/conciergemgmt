@extends('admin.mainframe')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Contact Form</h1>
        </div>

        @include('admin.includes.messages')

        <div class="row" id="builder">
        </div>

        <br/>
        <form method="post" action="{{ url('/dashboard/contact-forms/edit/'.$forms->id) }}">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <div class="form-group">
                        <label>Attach to a page/category/boat</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Choose from below...</option>
                            <option value="general" @if($forms->type == 'general'){{ 'selected' }}@endif>General</option>
                            <option value="page" @if($forms->type == 'page'){{ 'selected' }}@endif>Page</option>
                            <option value="category" @if($forms->type == 'category'){{ 'selected' }}@endif>Category</option>
                            <option value="boat" @if($forms->type == 'boat'){{ 'selected' }}@endif>Boat</option>
                            <option value="dest" @if($forms->type == 'dest'){{ 'selected' }}@endif>Destination</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Select a particular page/category/boat</label>
                        <select class="form-control" name="pbc_id" id="pbc">
                            @if($forms->type == 'page')
                                {!! $pages !!}
                                @elseif($forms->type == 'category')
                                {!! $categories !!}
                                @elseif($forms->type == 'boat')
                                {!! $boats !!}
                                @elseif($forms->type == 'dest')
                                {!! $dest !!}
                                @else
                            <option value="">Choose from below...</option>
                                @endif
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Title (Optional)</label>
                        <input type="text" class="form-control" name="title" value="{{ $forms->title }}">
                        <input type="hidden" name="components" id="form-comp">
                        <button type="submit" class="btn btn-outline-success float-right mt-3 mr-3">Save</button>
                        <button type="button" class="btn btn-outline-danger float-right mt-3 mr-3" id="cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection
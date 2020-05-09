@extends('admin.mainframe')
@section('content')
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Contact Form</h1>
        </div>

        @include('admin.includes.messages')

        <div class="row" id="builder">
        </div>

        <br/>
        <form method="post" action="{{ url('/dashboard/contact-forms/add') }}">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <div class="form-group">
                        <label>Attach to a page/category/boat</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Choose from below...</option>
                            <option value="general">General</option>
                            <option value="page">Page</option>
                            <option value="category">Category</option>
                            <option value="boat">Boat</option>
                            <option value="dest">Destination</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Select a particular page/category/boat</label>
                        <select class="form-control" name="pbc_id" id="pbc">
                            <option value="">Choose from below...</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Title (Optional)</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
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
@extends('admin.mainframe')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add slider</li>
        </ol>

        @include('admin.includes.messages')

        <form method="POST" action="{{ url('/dashboard/sliders/add') }}">
            @csrf
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="card shadow ml-4 mb-4 boat-card" id="add-images" style="width: 18rem;">
                            <div class="card-body text-center">
                                <div class="h-100 d-flex flex-column justify-content-center">
                                    <a class="text-black-50" id="add-image" href="#" data-toggle="modal" data-target="#file-manager">
                                        <span class="fas fa-images fa-6x"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer">
                                Add Slider Images
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Slider Details</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Slider title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label>Slider Description</label>
                                <textarea class="form-control" name="details" rows="4">{{ old('details') }}</textarea>
                            </div>
                            
                            <!--Joe's Keyword start-->
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Joe's Keyword 1</label>
                                    <textarea pla name="jkeyword1" class="form-control" style="min-height: 100px;">{{ old('jkeyword1') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label>Joe's Keyword 2</label>
                                    <textarea pla name="jkeyword2" class="form-control" style="min-height: 100px;">{{ old('jkeyword2') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label>Joe's Keyword 3</label>
                                    <textarea pla name="jkeyword3" class="form-control" style="min-height: 100px;">{{ old('jkeyword3') }}</textarea>
                                </div>
                            </div>
                            <!--Joe's Keyword end-->

                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-info btn-block">Preview</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-success btn-block">Publish</button>
                                </div>
                                <input type="hidden" name="count" id="count" value="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
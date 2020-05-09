@extends('admin.mainframe')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Media Library</li>
        </ol>

        <div class="row">
            <iframe class="col-lg-12" id="filemanager-frame" style="min-height: 900px;"></iframe>
        </div>

    </div>
    <br/>
@endsection
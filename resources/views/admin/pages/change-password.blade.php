@extends('admin.mainframe')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Change Password</li>
        </ol>

        @include('admin.includes.messages')


        <form method="POST" action="{{ url('/dashboard/change-password') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="font-weight-bold">Change Password</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--<div class="form-group">
                                <label class="font-weight-bold">Current Password *</label>
                                <input class="form-control col-md-6" required="" name="current_password" type="password">
                            </div>-->
                            <div class="form-group">
                                <label class="font-weight-bold">New Password *</label>
                                <input class="form-control" required="" name="new_password" id="new_password" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 5 characters' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" pattern="^\S{5,}$">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Confirm Password *</label>
                                <input class="form-control" required="" name="confirm_password" id="confirm_password" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Confirm Password is not matched' : '');" pattern="^\S{5,}$">
                            </div>

                            <div class="form-group">
                                <center>
                                    <button type="submit" name="submit" class="col-md-2 btn btn-outline-success btn-block">Submit</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
@endsection
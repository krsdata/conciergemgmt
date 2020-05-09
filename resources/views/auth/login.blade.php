<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login - Yachthampton</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9 mt-3">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6" style="min-height: 575px">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Admin Panel</h1>
                                </div>
                                
                                @if(Session::has('error'))
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ Session::get('error') }}
                                    </div>
                                @endif

                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <?php /*action="{{ route('login') }}" */ ?>
                                <form class="user" method="POST" action="{{ route('admin.login.submit') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" required="" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" value="@if(old('email')){{old('email')}} @elseif(Cookie::get('login_email')){{Cookie::get('login_email')}} @endif" placeholder="Enter Email Address..." autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required="" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" value="@if(Cookie::get('login_password')){{Cookie::get('login_password')}}@endif">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    
                                    <!--<hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>-->
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('admin.signup') }}">Create an Account!</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>


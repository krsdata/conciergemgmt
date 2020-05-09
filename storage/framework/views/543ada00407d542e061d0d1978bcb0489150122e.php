<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Account - Yachthampton</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('/admin/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('/admin/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create Account</h1>
                                </div> 
                                
                                <?php if(Session::has('error')): ?>
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <?php echo e(Session::get('error')); ?>

                                    </div>
                                <?php endif; ?>

                                <?php if(Session::has('success')): ?>
                                    <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <?php echo e(Session::get('success')); ?>

                                    </div>
                                <?php endif; ?>

                                <form class="user" method="POST" action="<?php echo e(route('admin.signup.submit')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <input class="form-control form-control-user" value="<?php echo e(old('name')); ?>" required="" name="name" id="name" placeholder="Name" type="text">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control form-control-user" value="<?php echo e(old('email')); ?>" required="" name="email" id="email" placeholder="Email" type="email">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control form-control-user" value="<?php echo e(old('phone')); ?>" required="" name="phone" id="phone" placeholder="Phone Number" type="text">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" required="" name="password" class="form-control form-control-user" id="new_password" placeholder="Password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 5 characters' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" pattern="^\S{5,}$">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" required="" name="confirm_password" class="form-control form-control-user" id="confirm_password" placeholder="Confirm Password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Confirm Password is not matched' : '');" pattern="^\S{5,}$">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Create Account
                                    </button>
                                </form>
                                <hr>
                                
                                <div class="text-center">
                                    <a class="small" href="<?php echo e(route('login')); ?>">Login!</a>
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
<script src="<?php echo e(asset('/admin/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('/admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('/admin/js/sb-admin-2.min.js')); ?>"></script>

</body>

</html>

<?php /**PATH /home1/ncwfegko/public_html/resources/views/auth/signup.blade.php ENDPATH**/ ?>
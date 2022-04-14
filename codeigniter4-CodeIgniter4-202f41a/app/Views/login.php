<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/display=fallback">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <h3> <?php $session = session();
                echo $session->getFlashdata('login'); ?> </h3>
        <div class="login-logo">
            <a href="login"><b>sign in</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <h3> <?php $session = session();
                    echo $session->getFlashdata('login'); ?> </h3>
            <div class="card-body login-card-body">
                <h1 class="login-box-msg">Sign in </h1>


                <form action="<?php echo site_url('Register/submit'); ?>" id="commentForm" method="post">
                    <div class="clearfix email_error"></div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix password_error"></div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->


                <p class="mb-0">
                    <a href="<?php echo base_url(); ?>/Register/register" class="text-center">Register </a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/asset/js/jquery-3.6.0.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/adminlte.js"></script>


</body>

</html>
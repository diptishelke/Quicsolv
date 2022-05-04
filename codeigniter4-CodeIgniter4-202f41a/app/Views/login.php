<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/display.fallback.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/icheck-bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" onload="getcookiedata()">
    <div class="login-box">
        <span style="text-align: center; color:red; font-size:x-large;">
            <h3> <?php $session = session();
                    echo $session->getFlashdata('login'); ?> </h3>
        </span>
        <div class="login-logo">
            <a href="login"><b></a>
        </div>
        <!-- /.login-logo -->
        <?php
        if (isset($validation)) : ?>
            <div class='alert alert-danger'>
                <?= $validation->listErrors() ?>
            </div>

        <?php endif; ?>
        <span style="text-align: center; color:red; font-size:x-large;">
            <h3> <?php $session = session();
                    echo $session->getFlashdata('success'); ?></h3>
        </span>
        <div class="card">

            <div class="card-body login-card-body">
                <h1 class="login-box-msg">Sign in </h1>
                <form action="#" id="frm">
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
                    <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="rememberme" onclick="setcookie()" />
                        <label class="form-check-label" for="form2Example3">
                            Remember me
                        </label>
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

                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="<?php echo site_url('Register/forgot_password'); ?>">I forgot my password</a>
                </p>
                <p class="mb-0">
                    New user?
                    <a href="<?php echo base_url(); ?>/Register/register" class="text-center">Register </a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/asset/js/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/script.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Validation library file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<!-- Sweetalert library file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

<script>
    $(function() {

        // Adding form validation
        $('#frm').validate();

        // Ajax form submission with image
        $('#frm').on('submit', function(e) {

            e.preventDefault();

            var formData = new FormData(this);
          
            $.ajax({
                url: "<?= site_url('/Register/submit') ?>",
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function(response) {
                    if (response == 1) {
                      
                      location.href = "<?= site_url('Register/homeview') ?>";
                        Swal.fire('Login successfully!');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                 
                    alert('Invalid Username or Password');
                }
            });
        });
    });
</script>
    <script type="text/javascript">
        function setcookie() {
            var u = document.getElementById('email').value;
            var p = document.getElementById('password').value;

            document.cookie = "myemail=" + u + ";path= http://localhost:8080/";
            document.cookie = "mypswd=" + p + ";path= http://localhost:8080/";

        }

        function getcookiedata() {
            var email = getcookie('myemail');
            var mypswd = getcookie('mypswd');
            document.getElementById('email').value = email;
            document.getElementById('password').value = mypswd;
            console.log(mypswd);
        }




        function getcookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(i);

                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";


        }
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Registration Page</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/display.fallback.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/icheck-bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html">Register</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new User</p>

        <form action="javascript:void(0)" id="frm" enctype="multipart/form-data">
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="name" id="name" placeholder="First name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="clearfix name_error"></div>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="clearfix lastname_error"></div>
          <div class="input-group mb-2">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="clearfix email_error"></div>
          <div class="input-group mb-2">
            <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          <div class="clearfix password_error"></div>
          <div class="input-group mb-2">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="clearfix password_error"></div>
          <div class="input-group mb-2">
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block register-save">Register</button>
            </div>
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">

        </div>

        already have a account?
        <a href="signup" class="text-center"> login</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
   <script src="<?php echo base_url(); ?>/asset/js/jquery-3.6.0.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/script.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/adminlte.js"></script>
 
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
            // OR var formData = $(this).serialize();

            //We can add more values to form data
            //formData.append("key", "value");

            $.ajax({
                url: "<?= site_url('/Register/register') ?>",
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function(data) {
                    if (data.success == true) {
                        location.href = "<?= site_url('Register/signup') ?>";
                        Swal.fire('Register Successfully!', '', 'success')
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error at add data');
                }
            });
        });
    });
</script>
<script>
    // keyup function to check password and confirm password match
    $(document).ready(function() {
      $("#confirm_password").on('keyup', function() {
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();
        if (password != confirmPassword)
          $("#CheckPasswordMatch").html("Password does not match !").css("color", "red");
        else
          $("#CheckPasswordMatch").html("Password match !").css("color", "green");
      });
    });
  </script>

</body>

</html>
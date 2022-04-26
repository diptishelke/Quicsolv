
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Recover Password</title>

  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
<?php
    if (isset($validation)) : ?>
      <div class='alert alert-danger'>
        <?= $validation->listErrors() ?>
      </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('error')):?>
      <div class ='alert alert-danger'><?=session()->getFlashdata('error');?></div>
      <?php endif;?>
      <?php if(session()->getFlashdata('success')):?>
      <div class ='alert alert-success'><?=session()->getFlashdata('success');?></div>
      <?php endif;?>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

      <form action="<?php echo site_url('Register/recover_password'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control"name='password'id='password' placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"name='confirmpassword'id='confirmpassword' placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="login.html">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<script src="<?php echo base_url(); ?>/asset/js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/adminlte.js"></script>
    <script>
    // keyup function to check password and confirm password match
    $(document).ready(function() {
        $("#confirmpassword").on('keyup', function() {
            var password = $("#password").val();
            var confirmPassword = $("#confirmpassword").val();
            if (password != confirmPassword)
                $("#CheckPasswordMatch").html("Password does not match !").css("color", "red");
            else
                $("#CheckPasswordMatch").html("Password match !").css("color", "green");
        });
    });
</script>
</body>
</html>

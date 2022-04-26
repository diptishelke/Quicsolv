<!DOCTYPE html>
<html lang="en">
  <?php
  use PHPMailer\PHPMailer\PHPMailer;
  ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Forgot Password</title>

  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/fontawesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    
  </div>
    <!-- /.login-logo -->
    <?php
    if (isset($validation)) : ?>
      <div class='alert alert-danger'>
        <?= $validation->listErrors() ?>
      </div>
    <?php endif; ?>
   

    <?php if(session()->getFlashdata('error')):?>
      <div class ='alert alert-danger'><?=session()->getFlashdata('error');?></div>
      <?php endif;?>
      <h3>
         <?php $session = session();
              echo $session->getFlashdata('success'); ?></h3>
             <div class="card">  
    </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form action="<?php echo site_url('Register/forgot_password'); ?>" method="post">
        <label>Email </label>
        <div class="input-group mb-3">

          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?php echo site_url('Register/signup'); ?>">Login</a>
      </p>
      <p class="mb-0">
        New User ?
        <a href="" class="text-center"> Register </a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
  </div>
  <!-- /.login-box -->

  <script src="<?php echo base_url(); ?>/asset/js/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/adminlte.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/bootstrapcdn.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/styl.css">




</head>


<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link"></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
   
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        Sidebar user panel (optional)
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

          <div class="info">
          <?php $session = session();?>
            <a href="#" class="d-block"><?php echo $session->user; ?> </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo site_url('Register/index'); ?>" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>
                  My profile
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>/Register/index">Back</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url() ?>/Register/logout">Logout</a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container rounded bg-white mt-5 mb-5">
      <div class="row">
        <div class="col-md-3 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5"></div>
        </div>
        <div class="col-md-5 border-right">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-right">change password </h4>
            </div>
            <div class="card-body">
              <span style="text-align: center; color:red; font-size:x-large;">
                <h4> <?php $session = session();
                      echo $session->getFlashdata('Error'); ?></h4>
              </span>

              <form action="<?php echo site_url('Register/update_password'); ?>" method="post" id='frm' enctype='multipart/form-data'>

                <div class="row mt-2">
                  <div class="col-md-6"><label class="labels">Old password</label>
                    <input type="password" name="oldpassword" class="form-control" placeholder="old password" value="">
                  </div>
                  <div class="col-md-6"><label class="labels">New password</label>
                    <input type="password" name="newpassword" id="new_password" class="form-control" value="" placeholder="new password">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12"><label class="labels">Confirm password </label>
                    <input type="password" name="confirmpassword" id="confirm_password" class="form-control" placeholder="enter confirm password" value="">
                  </div>
                  <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>

                  <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">change password </button>
                  </div>


              </form>
            </div>
          </div>
        </div>

      </div>
    </div>



    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-header -->

    <div class="container" style="margin:25px; padding: 50px; width: 80%">
      <div class="col-md-6" style=" width: 80%">


        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    
  <!-- ./wrapper -->


  <script src="<?php echo base_url(); ?>/asset/js/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/adminlte.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/fontawesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/adminlte.min.css">
  <script>
    // keyup function to check password and confirm password match
    $(document).ready(function() {
      $("#confirm_password").on('keyup', function() {
        var password = $("#new_password").val();
        var confirmPassword = $("#confirm_password").val();
        if (password != confirmPassword)
          $("#CheckPasswordMatch").html("Password does not match !").css("color", "red");
        else
          $("#CheckPasswordMatch").html("Password match !").css("color", "green");
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/display.fallback.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/fontawesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/adminlte3.min.css">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet" />

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
          <a href="<?php echo base_url('Register/homeview'); ?>" class="nav-link">Home</a>
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
    <!-- /.navbar -->
    <?php $session = session(); ?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= "/public/asset/images/" . $row['image']; ?>" width="200px" height="180px" class="square" alt="User Image">
          </div>

        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo site_url('Register/edit'); ?>" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>
                  Edit profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('Register/change_password'); ?>" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>
                  change password
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Sidebar Menu -->

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <div class="info">
      <a href="#" class="d-block"><?php echo $session->user; ?> </a>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

            </div><!-- /.col -->
            <!-- /.col -->
          </div><!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Register/homeview">Back</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Register/logout">Logout</a></li>

              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <div class="container rounded bg-white mt-5 mb-5">
        <span style="text-align: center; color:red; font-size:x-large;">
          <h3> <?php $session = session();
                echo $session->getFlashdata('success'); ?></h3>
        </span>


        <!-- Main content -->

        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">My Profile </h3>
                  </div>
                </div>
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-square" src="<?= "/public/asset/images/" . $row['image']; ?>" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?php echo $row['name']; ?>   <?php echo $row['lastname']; ?></h3>

                    <ul class="list-group list-group-unbordered mb-3">

                      <li class="list-group-item">
                        <b>Email</b>
                        <p class="float-right"><?php echo $row['email']; ?></p>
                      </li>
                      <li class="list-group-item">
                        <b>Phone</b>
                        <p class="float-right"><?php echo $row['phone']; ?></p>
                      </li>
                      <li class="list-group-item">
                        <b>Address</b>
                        <p class="float-right"><?php echo $row['address']; ?></p>
                      </li>
                      <li class="list-group-item">
                        <b>Country</b>
                        <p class="float-right"><?php echo $row['country']; ?></p>
                      </li>
                      <li class="list-group-item">
                        <b>State</b>
                        <p class="float-right"><?php echo $row['state']; ?></p>
                      </li>
                      <li class="list-group-item">
                        <b>City</b>
                        <p class="float-right"><?php echo $row['city']; ?></p>
                      </li>

                      <li class="list-group-item">
                        <b>Pincode</b>
                        <p class="float-right"><?php echo $row['pincode']; ?></p>
                      </li>
                    </ul>

                    <a href="<?php echo site_url('Register/edit'); ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>

                <!-- /.card -->

                <!-- About Me Box -->

                <!-- /.content -->
              </div>
              <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
              </aside>
              <!-- /.content-wrapper -->
              <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                  <b>Version</b> 3.2.0
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
              </footer>

              <!-- Control Sidebar -->
              <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
              </aside>
              <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="<?php echo base_url(); ?>/asset/js/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>/asset/js/bootstrap.bundle.min.js"></script>
            <script src="<?php echo base_url(); ?>/asset/js/adminlte.js"></script>


</body>

</html>
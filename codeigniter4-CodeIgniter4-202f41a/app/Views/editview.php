<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/bootstrapcdn.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/adminlte.min.css">
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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
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
        <h3> <?php $session = session();
                echo $session->getFlashdata('login'); ?> </h3>
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
                        <img src="<?php echo base_url(); ?>/asset/dress_1.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $session->user; ?> </a>
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
                            <a href="<?php echo site_url('Register/edit'); ?>" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>
                                    Save 
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Register/logout">Logout</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <div class="card">
            <h5 class="card-header">user profile</h5>

            <div class="card-body">

              <form action="<?php echo site_url('#'); ?>" method="post" id='frm' enctype='multipart/form-data'>

                <div class="form-group">
                  <label for="name" style="padding:5px;">name</label>
                  <input type="name" name="name" id="name" value="<?php echo $row['name']; ?>" class="form-control">
                </div>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="form-group">
                  <label for="last-name" style="padding:5px;">lastname</label>
                  <input type="last-name" name="last-name" id="last-name" value="<?php echo $row['lastname']; ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone" style="padding:5px;">phone</label>
                  <input type="phone" name="phone" id="phone" value="<?php echo $row['phone']; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="email" style="padding:5px;">email address</label>
                  <input type="email" readonly id="email" value="<?php echo $row['email']; ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password" style="padding:5px;">password</label>
                  <input type="password" name="password" id="password" value="" class="form-control">
                </div>

                <div class="form-group">

                  <label for="image" style="padding:5px;">image</label>
                  <input type="file" name="image" id="image" value="<?php echo $row['image']; ?>" class="form-control">
                </div>



                <div class="d-flex justify-content-between align-items-center">

                  <div class="d-grid gap-2" style="margin-top:10px;">
                    <button type="submit" class="btn btn-block btn-primary">submit</button>
                  </div>

              </form>
            </div>
          </div>

        </div>

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
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script>
        function isconfirm(url_val) {
            // alert(url_val);
            if (confirm('Are you sure you wanna delete this ?') == false) {
                return false;
            } else {
                location.href = url_val;
            }
        }
    </script>

    <script src="<?php echo base_url(); ?>/asset/js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/adminlte.js"></script>

</body>

</html>
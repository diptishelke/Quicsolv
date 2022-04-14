<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/bootstrapcdn.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/style.css" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/dist/css/adminlte.min.css">
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
                        <img src="public/asset/images/anu_rimg.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="" class="nav-link">
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">User profile</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <?php $session = session(); ?>

            <h1>welcome, <?php echo $session->user; ?> </h1>

            <div class="container" style="margin:25px; padding: 50px; width: 80%">
                <div class="col-md-6" style=" width: 80%">
                    <div class="card">
                        <h5 class="card-header">user profile</h5>

                        <div class="card-body">
                            <form action="<?php echo site_url(''); ?>" method="post" id='frm' enctype='multipart/form-data'>
                                <?php foreach ($table as $list) : ?>

                                    <div class="form-group">
                                        <label for="name" style="padding:5px;">name</label>
                                        <input type="name" name="name" id="name" value="<?php echo $list['name']; ?>" class="form-control">
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $list['id']; ?>">

                                    <div class="form-group">
                                        <label for="last-name" style="padding:5px;">lastname</label>
                                        <input type="last-name" name="lastname" id="lastname" value="<?php echo $list['lastname']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" style="padding:5px;">phone</label>
                                        <input type="phone" name="phone" id="phone" value="<?php echo $list['phone']; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" style="padding:5px;">email address</label>
                                        <input type="email" name="email" id="email" value="<?php echo $list['email']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" style="padding:5px;">Passsword</label>
                                        <input type="password" name="password" id="password" value="<?php echo $list['password']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">image</label>
                                        <img src="<?php echo base_url(); ?>assets/images/<?php echo $list['image']; ?>">
                                        <input type="image" name="image" id="image" value="<?php echo $list['image']; ?>" class="form-control">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-2" style="margin-top:10px;">
                                            <a href="<?php echo site_url('Login/edit/' . $list['id']); ?>" class="btn btn-primary">Edit</a>
                                        </div>
                                    <?php endforeach; ?>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


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

    <script src="<?php echo base_url(); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>
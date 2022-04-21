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
        <!-- /.navbar -->
       <h3> <?php $session = session();
              echo $session->getFlashdata('login','login successfully'); ?> </h3>
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
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="square" width="200px"height="250px"  src="<?= "/public/asset/images/".$row['image']; ?>" alt='image'>
        <span class="font-weight-bold"><?php echo $row['name']; ?></span><span class="text-black-50"><?php echo $row['email']; ?></span></div>
      </div>
      
      <div class="col-md-5 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Profile Settings</h4>
          </div>
          <div class="card-body">
          <h3> <?php $session = session();
              echo $session->getFlashdata('error'); ?> </h3>
            <form action="<?php echo site_url('Register/update'); ?>" method="post" id='frm' enctype='multipart/form-data'>

              <div class="row mt-2">
                <div class="col-md-6"><label class="labels">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="first name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="col-md-6"><label class="labels">Surname</label>
                  <input type="text"name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>" placeholder="surname">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Mobile Number</label>
                  <input type="text" name="phone"  class="form-control" placeholder="enter phone number" value="<?php echo $row['phone']; ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="col-md-12"><label class="labels">Address </label>
                  <input type="text" name="address" class="form-control" placeholder="enter address " value="<?php echo $row['address']; ?>">
                </div>

                <div class="col-md-12"><label class="labels">pincode</label>
                  <input type="text" name="pincode" class="form-control" placeholder="enter pincode" value="<?php echo $row['pincode']; ?>">
                </div>
          
                <div class="col-md-12"><label class="labels">City</label>
                  <input type="text"name="city" class="form-control" placeholder="enter city" value="<?php echo $row['city']; ?>">
                </div>
                <div class="col-md-12"><label class="labels">Email ID</label>
                  <input type="text" readonly class="form-control" placeholder="email " value="<?php echo $row['email']; ?>">
                </div>

              </div>
              <div class="col-md-12"><label class="labels">password</label>
                  <input type="password"name="password" class="form-control" placeholder="enter password" value="">
                </div>
              <div class="row mt-3">
                <div class="col-md-6"><label class="labels">Country</label>
                  <input type="text" name="country" class="form-control" placeholder="country" value="<?php echo $row['country']; ?>">
                </div>
                <div class="col-md-6"><label class="labels">State/Region</label>
                  <input type="text" name="state" class="form-control" value="<?php echo $row['state']; ?>" placeholder="state">
                </div>
                <div class="col-md-6"><label class="labels">Profile Image</label>
                  <input type="file" name="image" class="form-control" value="<?php echo $row['image']; ?>" placeholder="state">
                </div>
              </div>
              <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button>
              </div>


            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
    </div>
  </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                           
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <span style="text-align: center; color:red; font-size:x-large;"> 
          <h3> <?php $session = session();
                   echo $session->getFlashdata('success');?></h3> </span>
            <!-- Main content -->
            <?php $session = session(); ?>

            <h1>welcome, <?php echo $session->user; ?> </h1>
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
      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>

</html>
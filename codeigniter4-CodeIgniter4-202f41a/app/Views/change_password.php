<html>

<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/styl.css">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>/Register/logout">Logout</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url() ?>/Register/index">Home</a></li>
          </ol>
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
                    echo $session->getFlashdata('Error');?></h4> </span>

            <form action="<?php echo site_url('Register/update_password'); ?>" method="post" id='frm' enctype='multipart/form-data'>

              <div class="row mt-2">
                <div class="col-md-6"><label class="labels">Old password</label>
                  <input type="password" name="oldpassword" class="form-control" placeholder="old password" value="">
                </div>
                <div class="col-md-6"><label class="labels">New password</label>
                  <input type="password"name="newpassword" class="form-control" value="" placeholder="new password">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Confirm password </label>
                  <input type="password" name="confirmpassword"  class="form-control" placeholder="enter confirm password" value="">
                </div>
                
              <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">change password </button>
              </div>


            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
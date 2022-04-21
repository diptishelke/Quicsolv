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
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
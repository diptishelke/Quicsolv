<!doctype html>
<html lang="en">

<head>
  <title>:Login</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/bootstrapcdn.css">
  <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/style.css" type="text/css" />
</head>


<div class="container" style="margin:25px; padding: 50px; width: 80%">
  <div class="col-md-6" style=" width: 80%">
    <div class="col-md-9 col-lg-6 col-xl-5">
      <img src="<?php echo base_url(); ?>/asset/usrprofile.jpg" class="img-fluid" alt="Sample image">
    </div>
    <div class="card">
      <h5 class="card-header">user profile</h5>

      <div class="card-body">
        <form action="<?php echo site_url('Login/update'); ?>" method="post" id='frm'>
          <div class="form-group">
            <label for="name" style="padding:5px;">name</label>
            <input type="name" name="name" id="name" value="<?php echo $row['name']; ?>" class="form-control">
          </div>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

          <div class="form-group">
            <label for="last-name" style="padding:5px;">lastname</label>
            <input type="last-name" name="last-name" id="last-name" value="<?php echo $row['last-name']; ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="phone" style="padding:5px;">phone</label>
            <input type="phone" name="phone" id="phone" value="<?php echo $row['phone']; ?>" class="form-control">
          </div>

          <div class="form-group">
            <label for="email" style="padding:5px;">email address</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" class="form-control">
          </div>


          <div class="d-flex justify-content-between align-items-center">

            <div class="d-grid gap-2" style="margin-top:10px;">
              <button type="submit" class="btn btn-block btn-primary">submit</button>
            </div>

        </form>
      </div>
    </div>

  </div>

</div>
</body>

</html>
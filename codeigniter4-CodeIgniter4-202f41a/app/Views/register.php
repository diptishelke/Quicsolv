
<?=$this->extend("layout/base");?>
<?=$this->section("content");?>

<html lang="en">

<head>
    <title>:Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/bootstrapcdn.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/cs/style.css" type="text/css" />
</head>

<body>

    <div class="container" style="margin:25px; padding: 50px; width: 80%">
        <div class="col-md-6" style=" width: 80%">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="<?php echo base_url(); ?>/asset/login.jpg" class="img-fluid" alt="Sample image">
            </div>
            <div class="card">


                <h5 class="card-header">Register</h5>

                <div class="card-body">


                    <form action="<?php echo site_url('Login/register'); ?>" method="post" id='frm'>
                        <div class="form-group">
                            <label>name</label>
                            <input type="name" name="name" id="name" value="" class="form-control" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="last-name" name="lastname" id="last-name" value="" class="form-control" placeholder="last-name">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" id="phone" value="" class="form-control" placeholder="phone">
                        </div>


                        <div class="form-group">
                            <label>email address</label>
                            <input type="email" name="email" id="email" value="" class="form-control" placeholder="email">
                        </div>

                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" value="" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="confirmpassword" id="" value="" class="form-control" placeholder="confirm password">
                        </div>
                        <div class="form-group">

                            <label>image</label>
                            <input type="file" name="image" id="image" value="" class="form-control">
                        </div>
                        <div class="tx-13 mg-t-20 tx-center">Already have an account?
                            <a href="login">login</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
   <script src="<?php echo base_url(); ?>/asset/js/validate.min.js"></script>

   <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url(); ?>/asset/js/script.js"> </script>
</body>

</html>
<?=$this->endsection();?>
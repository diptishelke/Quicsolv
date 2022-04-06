<!doctype html>
  <html lang="en">
    <head>
      <title>:Login</title>
    

      
     
       <link rel="stylesheet" href="<?php echo base_url();?>/asset/cs/bootstrap.min.css">
       <link rel="stylesheet" href="<?php echo base_url();?>/asset/cs/bootstrapcdn.css">
       <script src="<?php echo base_url();?>/asset/js/jquery.min.js"></script>
       <script src="<?php echo base_url();?>/asset/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>/asset/cs/style.css" type="text/css"/>
    </head>
        <body>
        <?php $session = session();?>
        <?php echo $session->getFlashdata('login');?> 
        <h1>welcome, <?php echo $session->user;?> </h1>
        <a href="<?php echo site_url('Login/logout');?>" class="nav-link">Logout </a>
        <div class="container" style="margin:25px; padding: 50px; width: 80%">
              <div class="col-md-6"style=" width: 80%">
              <div class="col-md-9 col-lg-6 col-xl-5">
               <img src="<?php echo base_url();?>/asset/login.jpg"
                class="img-fluid" alt="Sample image">
              </div> 
              <div class="card">
                  <h5 class="card-header">user profile</h5>

                  <div class="card-body">
                    <form action="<?php echo site_url('');?>" method="post" id='frm'>
                    <?php  foreach ($table as $list) : ?>
                      <div class="form-group">
                            <label for="name" style="padding:5px;">name</label>
                            <input type="name" name="name" id="name" value="<?php echo $list['name']; ?>" class="form-control" >  
                        </div>
                        <input type="hidden" name="id" value="<?php echo $list['id']; ?>">

                        <div class="form-group">
                            <label for="last-name" style="padding:5px;">lastname</label>
                            <input type="last-name" name="last-name" id="last-name" value="<?php echo $list['last-name']; ?>" class="form-control" >  
                        </div>
                        <div class="form-group">
                            <label for="phone" style="padding:5px;">phone</label>
                            <input type="phone" name="phone" id="phone" value="<?php echo $list['phone']; ?>" class="form-control" >  
                        </div>
                      
                        <div class="form-group">
                            <label for="email" style="padding:5px;">email address</label>
                            <input type="email" name="email" id="email" value="<?php echo $list['email']; ?>" class="form-control" >  
                        </div>
                      
                       
                          <div class="d-flex justify-content-between align-items-center">
                          
                        <div class="d-grid gap-2" style="margin-top:10px;">
                        <a href ="<?php echo site_url('Login/edit/'.$list['id']); ?>"class="btn btn-primary" >Edit</a>
                            
                        </div>
                        
                        <?php endforeach;?>
                      </form>
                   </div>
              </div>

              </div>

          </div>
    </body>     
</html>               
                      



                  
                 
                   

          
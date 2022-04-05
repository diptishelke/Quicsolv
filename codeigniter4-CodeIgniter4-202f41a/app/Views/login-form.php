
  </html>
  <!doctype html>
  <html lang="en">
    <head>
      <title>:Login</title>
    

      
      <link rel="stylesheet" href="<?php echo base_url();?>/asset/cs/bootstrap.min.css" >
     // <link rel="stylesheet" href="<?php echo base_url();?>/asset//cs/bootstrapcdn.css">
       <script src="<?php echo base_url();?>/asset/js/jquery.min.js"></script>
       <script src="<?php echo base_url();?>/asset/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>/asset/cs/style.css" type="text/css"/>
    </head>
    <body>

          <div class="container" style="margin:25px; padding: 50px; width: 80%">
              <div class="col-md-6"style=" width: 80%">
              <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="<?php echo base_url();?>/asset/login.jpg"
            class="img-fluid" alt="Sample image">
        </div>
              <div class="card">
                  <h5 class="card-header">Login</h5>
                 <h3> <?php $session = session(); echo $session->getFlashdata('login');?> </h3>
                <div class="card-body">
                
                
                      <form action="submit" method="post" id='frm'>
                      
                        <div class="form-group">
                            <label for="email" style="padding:5px;">email address</label>
                            <input type="email" name="email" id="email" value="" class="form-control" placeholder="email">  
                        </div>
                      
                        <div class="form-group">
                            <label for="password" style="padding:5px;">password</label>
                            <input type="password" name="password" id="password" value="" class="form-control" placeholder="password">  
                          
                          </div>
                          <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                          <div class="form-check mb-0">
                          <input class="form-check-input me-2" type="checkbox" value="" id="rememberme" onclick="setcookie()"/>
                           <label class="form-check-label" for="form2Example3">
                           Remember me
                            </label>
                             </div>
                        <div class="d-grid gap-2" style="margin-top:10px;">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                        
                      </form>
                </div>
              </div>
              </div>   
          </div>
        
    
     
     
      <script src="<?php echo base_url();?>/asset/js/validate.min.js"></script>
      
      <script src="<?php echo base_url();?>/asset/js/script.js"> </script>
      <script type="text/javascript">
      function setcookie (){
        var u = document.getElementById('email').value;
        var p = document.getElementById('password').value;

        document.cookie="my="+u+";path= http://localhost:8080";
        document.cookie="mypswd="+p+";path= http://localhost:8080";

      }
      </script>
    </body>
  </html>

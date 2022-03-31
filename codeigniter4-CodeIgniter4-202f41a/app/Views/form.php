
</html>
<!doctype html>
<html lang="en">
  <head>
    <title>:Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

        <div class="container" style="margin:25px">
             <div class="col-md-6">
             <div class="card">
                 <h5 class="card-header">Login</h5>
               <div class="card-body">
               <p class="card-text">please ! fill in the data into following fields</p>
               <?= $validation->listErrors() ?>
                     <form action="<?php echo site_url('Login/login');?>" method="post">
                     
                      <div class="form-group">
                          <label for="email" style="padding:5px;">email address</label>
                          <input type="email" name="email" id="email" value="" class="form-control" placeholder="email">  
                      </div>
                    
                      <div class="form-group">
                          <label for="password" style="padding:5px;">password</label>
                          <input type="password" name="password" id="password" value="" class="form-control" placeholder="password">  
                      </div>
                      <div class="d-grid gap-2" style="margin-top:10px;">
                          <button type="submit" class="btn btn-block btn-primary">Login</button>
                      </div>
                     </form>
               </div>
             </div>
             </div>   
        </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

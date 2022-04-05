<!doctype html>
<html lang="en">
  <head>
    <title>My Account</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
        <?php $session = session();?>
        <?php echo $session->getFlashdata('login');?> 
        <h1>welcome, <?php echo $session->user;?> </h1>



                  <a href="<?php echo site_url('Login/logout');?>" class="nav-link">Logout
                  </a>
                   
                    
                 

                 
        <div class="container" style="margin:25px">
            
             <div class="card">
                 <h5 class="card-header">My Account</h5>
              
               <table class="table table-bordered table-striped">
                 <thead>
                   
                         <th>Id</th>
                         <th>Name</th>
                         <th>LastName</th>
                         <th>Phone</th>
                         <th>Email</th>
                         <th>Password</th>
                         
                         </thead>
                         <tbody>
                           <?php  foreach ($table as $list) { ?>
                           <tr>
                            
                             <td><?php echo $list['id']; ?></td>
                             <td><?php echo $list['name']; ?></td>
                             <td><?php echo $list['last-name']; ?></td>
                             <td><?php echo $list['phone']; ?></td>
                             <td><?php echo $list['email']; ?></td>
                             <td><?php echo $list['password']; ?></td>
                             </tr>
                             <?php } ?>
                             </tbody>
                             </table>





              
                     
              
             </div>   
        </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    

  </body>
</html>

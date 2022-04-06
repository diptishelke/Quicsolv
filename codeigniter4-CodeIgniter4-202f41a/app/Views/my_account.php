<!doctype html>
<html lang="en">
  <head>
    <title>My Account</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
   
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/cs/bootstrap.min.css" >
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
                         <th>Action</th>
                         
                         </thead>
                         <tbody>
                           <?php  foreach ($table as $list) : ?>
                           <tr>
                            
                             <td><?php echo $list['id']; ?></td>
                             <td><?php echo $list['name']; ?></td>
                             <td><?php echo $list['last-name']; ?></td>
                             <td><?php echo $list['phone']; ?></td>
                             <td><?php echo $list['email']; ?></td>
                             <td><?php echo $list['password']; ?></td>
                             <td>
                             <a href ="<?php echo site_url('Login/edit/'.$list['id']); ?>" >Edit</a>
                             <a href ="<?php echo site_url('Login/delete/'.$list['id']); ?>">Delete</a>

                             </td>
                           </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>





              
                     
              
             </div>   
        </div>
      
    
   
  </body>
</html>

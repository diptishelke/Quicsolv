<!DOCTYPE html>
<html lang="en">
<head>
  <title>my website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <a class="navbar-brand" href="#">My Website</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <?php if (session()->has("login")):?>
          <li class="nav-item">
          <a class="nav-link active" href=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">upload Avtar</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" href="<?=base_url () ?>/login">Logout</a>
        </li>
          <?php else:?>
            <li class="nav-item">
          <a class="nav-link active" href="<?=base_url () ?>/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?=base_url () ?>/login">Login</a>
        </li>

          <?php endif;?>
       
      </div>
 
</nav>

<?= $this->renderSection("content");?>


 <footer class="bg-primary px-2 py-2">
     <div>
         <p class="text-center">&copy: 2021 All Copy rights reserved</p>
     </div>
 </footer>
 <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url(); ?>/asset/js/popper.min.js"></script>

</body>
</html>

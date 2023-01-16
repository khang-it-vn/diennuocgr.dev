<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Main</title>
</head>
<body>
	<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="<?php echo ROOT_URL;?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          ELECTRIC
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?php echo ROOT_URL;?>" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="<?php echo ROOT_URL;?>History" class="nav-link px-2 text-white">History</a></li>
          <li><a href="<?php echo ROOT_URL;?>Edit" class="nav-link px-2 text-white">Edit</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] ) :?>

              <button type="button" class="btn btn-outline-light me-2"> <?php echo $_SESSION['information']['username'] ?></button>
              <button type="button" class="btn btn-outline-light me-2"><a href="<?php echo ROOT_URL.'user/logout'?>">Logout</a></button>
          <?php else :?>
             <button type="button" class="btn btn-outline-light me-2"><a href="<?php echo ROOT_URL.'user/login'?>">Login</a></button>
             <button type="button" class="btn btn-outline-light me-2"><a href="<?php echo ROOT_URL.'user/register'?>">Register</a></button>
          <?php endif?>

         
         
        </div>
      </div>
    </div>
  </header>
	<div class="rows">
      <?php require($view); ?> 
  </div>
</body>
</html>
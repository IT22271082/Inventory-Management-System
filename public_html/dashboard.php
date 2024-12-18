<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventory Management System</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
  <?php
 include_once("./templetes/header.php");
 ?>
 <br>
<div class = "container">
 <div class="row">
    <div class="col-md-4">

    <div class="card mx-auto" style="width: 25rem;">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="card-img-top" alt="Profile Image">

  <div class="card-body">
    <h5 class="card-title">Dashborad</h5>
    <p class="card-text">Name</p>
    <p class="card-text">Last Login : xxxx--xx-xx</p>
    <a href="#" class="btn btn-primary"><i class ="fa-fa-user">&nbsp;</i>Edit Profile</a>
  </div>
</div>
</div>
<div class="col-md-8">
  <div class="jumbotron" style="width:100%; height:100%;">
    <h1> Welcome Admin,</h1>
    <div class="row">
      <div class="col-sm-6">
     
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">New Orders</h5>
        <p class="card-text">Here you can make invoices and create new orders</p>
        <a href="#" class="btn btn-primary">New Orders</a>
      </div>
    </div>
  </div>
  
  <div class ="container">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categories</h5>
        <p class="card-text">Here you can manage your categories and add new categories.</p>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#category">Add Categories</a>
        <a href="#" class="btn btn-primary">Manage Categories</a>
      </div>
    </div>
  </div>


  <div class ="container">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Products</h5>
        <p class="card-text">Here you can manage your Products and add new products.</p>
        <a href="#" class="btn btn-primary">Add Products</a>
        <a href="#" class="btn btn-primary">Manage Products</a>
      </div>
    </div>
  </div>

</div>
</div>





</div>
</div>
</div> 


<?php
    include_once("templetes/category.php");
?>
<?php
    include_once("templetes/brand.php");
?>
<?php
    include_once("templetes/product.php");
?>


</body>
</html>


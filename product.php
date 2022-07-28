<?php
require_once "config.php";

if (isset($_REQUEST["submit"])) {
    
    $name = $_REQUEST["name"];
    $category = $_REQUEST["category"];
    $price = $_REQUEST["price"];
    $qty = $_REQUEST["qty"];

    

    $ins = "INSERT INTO product (name, category,price,qty) VALUES ('$name','$category','$price','$qty')";
    $query1 = mysqli_query($connection, $ins);


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!-- nav bar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/TT.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Cafe Management System<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="product.php">Product<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="seller.php">Seller</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php">Category</a>
      </li>
     
    </ul>
  </div>
</nav>
<!-- nav bar end -->

<!-- product form start -->
<form action="product.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Product Name</label>
    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Product Category</label>
    <input type="text" class="form-control" name="category" id="formGroupExampleInput2" placeholder="Category">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput3">Price</label>
    <input type="text" class="form-control" name="price" id="formGroupExampleInput3" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput4">Qty</label>
    <input type="text" class="form-control" name="qty" id="formGroupExampleInput4" placeholder="Qty">
  </div>
  <div class="form-group">
    <input type="submit" class="form-control"  name="submit" id="formGroupExampleInput4" value="save">
  </div>
</form>
<!-- product form end -->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
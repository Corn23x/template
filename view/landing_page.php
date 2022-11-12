<?php
include(dirname(__DIR__, 1) . '/settings/core.php');

include(dirname(__DIR__,1). '/functions/common_function.php');

// if(isset($_SESSION["id"]) && isset($_SESSION['role'])){
//     if($_SESSION['role']== 1){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

<?php getLinks(); ?>

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="landing_page.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product Display
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="all_product.php">All Products</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Login/logout.php">Logout</a>
        </li>
      </ul>
      
      <form class="d-flex" role="search" action="product_search_result.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
      <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

    

</head>
<body>
    <div class="header">
        <h2>Home Page</h2>

    </div>
    <a href="../Login/logout.php">Logout</a>

    
</body>
</html>

<?php

// }
// elseif($_SESSION['role']== 2){
//     header('Location: ../admin/admin.php');
//   }
//   else{
//     header('Location: ../Login/login.php');
//   }
// }

?>
<?php
include_once(dirname(__DIR__,1). '/functions/common_function.php');
include_once(dirname(__DIR__,1). '/controllers/product_controller.php');
include_once(dirname(__DIR__,1). '/controllers/cart_controller.php');
include_once(dirname(__DIR__,1). '/settings/core.php');

getLinks();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="landing_page.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="products.php">Products</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product Display
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="all_product.php">All Products</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

       <?php
       $count= CountCartCtr($_SESSION['id']);
       echo ' <li class="nav-item">
       <a class="nav-link" href="cart.php">Cart('.$count.') </a>
     </li>';
       ?>

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

<?php  

if(!isset($_GET['brand'])){
    if(!isset($_GET['category'])){
    
        $all_products = prod_select();
        foreach($all_products as $all)
            {
         echo '<div class="col-md-4 mb-3">
         <div class="card form-control mb-3 absolute" style="width: 18rem;">
                <img src="../images/'.$all['product_image'].'" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$all['product_title'].'</h5>
                    <p class="card-text">'.$all['product_desc'].'</p>
                    <p class="card-text">Price: '.$all['product_price'].'</p>
                    <a href="single_product.php?product_id='.$all['product_id'].'" class="btn btn-primary" name="viewmore">View</a>
                    <a href="../actions/add_to_cart.php?add_to_cart='.$all['product_id'].'" class="btn btn-primary">Add to cart</a>
                    
                </div>
    
         </div>';
    
     }
    }
    }

?>

    
</body>
</html>
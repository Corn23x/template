<?php 
include(dirname(__DIR__,1). '/controllers/product_controller.php');
include(dirname(__DIR__,1). '/functions/common_function.php');

getLinks();

if(isset($_GET['search_data_product'])){
    $user_search=$_GET['search_data'];
    $result = search_productctr($user_search);

    echo '<nav class="navbar navbar-expand-lg bg-light">
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
        <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
        </form>
      </div>
    </div>
  </nav>';



    foreach($result as $results){
        echo ' <div class="col-md-4 mb-3">
        <div class="card  mb-3 absolute" style="width: 18rem;">
               <img src="../images/'.$results['product_image'].'" class="card-img-top" alt="...">
               <div class="card-body">
                   <h5 class="card-title">'.$results['product_title'].'</h5>
                   <p class="card-text">'.$results['product_desc'].'</p>
                   <p class="card-text">Price: '.$results['product_price'].'</p>
                   <a href="single_product.php?product_id='.$results['product_id'].'" class="btn btn-primary">View</a>
                   <a href="single_product.php?add_to_cart='.$results['product_id'].'" class="btn btn-primary">Add to cart</a>
                   
               </div>
   
        </div>';

}
}
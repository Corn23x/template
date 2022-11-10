<?php
include(dirname(__DIR__,1). '/controllers/product_controller.php');
include(dirname(__DIR__,1). '/functions/common_function.php');


getLinks();


if(isset($_GET['product_id'])){

$product_id= $_GET['product_id'];

$results = Oneprod($product_id);
// print_r($results);
// foreach($result as $reuslts){
    
   echo ' <div class="container text-center">

         <div class="row">
         <div class="col">
                <img src="../images/'.$results['product_image'].'" class="card-img-top" alt="...">
                </div>
                <div class="col">
                    <h5 class="">'.$results['product_title'].'</h5>
                    <p class="">Price: '.$results['product_price'].'</p>
                    <h4> Description </h4>
                    <p class="">'.$results['product_desc'].'</p>

                    <a href="../actions/add_to_cart.php?add_to_cart='.$results['product_id'].'" class="btn btn-primary">Add to cart</a>

                
            </div> 
         </div>
         </div>

       

  <br>     
<br>
         <a href="all_product.php" class="btn btn-danger m-2">Return</a>';

         
// }



}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 class="text-center">Cart Page</h2>
</body>
</html>



<?php
include_once(dirname(__DIR__, 1). '/controllers/product_controller.php');
include_once(dirname(__DIR__, 1). '/controllers/cart_controller.php');
include_once(dirname(__DIR__, 1). '/settings/core.php');
include_once(dirname(__DIR__, 1). '/functions/common_function.php');

getLinks();


$ip = getIPAddress();


$customerid = $_SESSION['id'];
$ip= getIPAddress();
$cart = select_all_cartctr($customerid);

$cart_total = 0;
$cart_total_qty = 0;

foreach($cart as $cart_item){
    $productid= $cart_item['p_id']; 
    $quantity= $cart_item['qty'];
    $cart_total_qty += $cart_item['qty'];

    $product = Oneprod($productid);
    $product_img= $product['product_image'];
    $product_title= $product['product_title'];
    $product_price = $product['product_price'];

    $cart_total += $quantity * $product_price;


    echo ' 
    
    <div class="row">
    <div class="col">
    <hr> <img src="../images/'.$product['product_image'].'" style="max-width: 300px; max-height:300px;" class="mb-5" alt="'.$product['product_title'].'">
           </div>
           <div class="col-5">'.$product['product_title'].'<br>
               <p class="">Description: '.$product['product_desc'].'</p>
              <span>Price: <span class="font-weight-bold">GHC '.$product['product_price'].'</span> <br>
              <span>Quantity: <span class="font-weight-bold">'.$cart_item['qty'].'</span> <br>
              <a class="btn btn-primary" href="edit_quantity.php?id='.$productid.'" role="button">Edit Quantity</a>
              <a class="btn btn-danger" href="../actions/remove_from_cart.php?id='.$productid.'" role="button">Delete item</a>
    <br><br>
             
           </div>  
    </div>
    ';
    
}

echo '
<div class="row">
    <div class="col">
    <h3 class="text-center">Cart Total: </h3>
</div>

<h3 class="text-center">GHC '.$cart_total.'</h3>
</div>

<a class="btn btn-success form-control" href="#" role="button">Proceed to Payment</a> 
<br><br>
<a class="btn btn-info form-control" href="all_product.php" role="button">Continue Shopping</a>

';


?>






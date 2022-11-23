<?php
include_once(dirname(__DIR__, 1) . '/controllers/cart_controller.php');
include_once(dirname(__DIR__, 1) . '/controllers/product_controller.php');

function callcartproduct($customerid){
    $cart = select_all_cartctr($customerid);
    $pricetotal=0;
    $totalquantity=0;
    $result="";

    foreach($cart as $carts){
        $productid=$carts['p_id'];
        $product = Oneprod($productid);
        $quantity = $carts['qty'];
        $product_price = $product['product_price'];
        $totalquantity += $quantity;
        $pricetotal += $quantity * $product_price;

        $product_total = $quantity * $product_price;
        $product_title = $product['product_title'];
        
        $result .="<br>
        <div class='row' style='text-align: center;'>
        <div class='col'>
        $product_title
        </div>
        <div class='col'>
        $product_price
        </div>
        <div class='col'>
        $quantity
        </div>
        <div class='col'>
        $product_total
        </div>
        </div>
        ";

    }

    $result .="<br>
    <div class='row' style='text-align: center;'>
    <div class='col'>
    -
    </div>
    <div class='col'>
    -
    </div>
    <div class='col'>
    $totalquantity
    </div>
    <div class='col'>
    $pricetotal
    </div>
    </div>
    <input type='hidden' name='total' id='amount' value='$pricetotal'>
    <br>
    <button type='submit' name='proceed' class='btn btn-primary form-control' onclick='payWithPaystack()'>Proceed</button>
    ";

    echo $result;
}

?>
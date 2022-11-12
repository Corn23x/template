<?php
include_once(dirname(__DIR__, 1) . '/controllers/cart_controller.php');
include_once(dirname(__DIR__, 1) . '/controllers/product_controller.php');

if (isset($_GET['id'])) {

$productid= $_GET['id'];
// $results = Oneprod($productid);


    print "<form action= '../actions/manage_quantity_cart.php' >";
    print '<input name="updatequant" type="number" min="0">';
    print '<input name="submit" type="submit">'; 
    print '<input type="hidden" name="id" value= '.$productid.' class="form-control">';
    print "</form>";

   //  $_SESSION['id']=$_GET['id'];
}




?>

<?php


if (isset($_POST['summit'])) {
    require('../controllers/product_controller.php');
    $brid = $_POST['id'];
    $updatebrand= $_POST['updatebrand'];
    
    $updbrand = update_brand($updatebrand, $brid);

    if ($updbrand) {
        echo "<script>alert('Update successful')</script>";
        echo "<script>window.open('../admin/brand.php','_self')</script>";
    } 

    else {
    echo 'update failed'; 
    } 
}

?>
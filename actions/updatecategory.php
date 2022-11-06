
<?php


if (isset($_POST['submit'])) {
    require('../controllers/product_controller.php');
    $brid =$_POST['id'];
    $updatecat= $_POST['updatecat'];
    
    $updcat = cat_update($updatecat, $brid);

    if ($updcat) {
        echo "<script>alert('Updated successful')</script>";
        echo "<script>window.open('../admin/category.php','_self')</script>";
    } 

    else {
    echo 'update failed'; 
    } 
}

?>
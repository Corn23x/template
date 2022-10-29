
<?php
session_start();

if (isset($_GET['id'])) {
    print "<form>";
    print '<input name="updatecat" type="text">';
    print '<input name="summit" type="submit">'; 
    print "</form>";
    $_SESSION['id']=$_GET['id'];
}

if (isset($_GET['updatecat'])) {
    require('../controllers/product_controller.php');
    $brid = $_SESSION['id'];
    
    $updcat = cat_update($_GET['updatecat'], $brid);

    if ($updcat) {
        echo "<script>alert('Updated successful')</script>";
        echo "<script>window.open('../admin/category.php','_self')</script>";
    } 

    else {
    echo 'update failed'; 
    } 
}

?>
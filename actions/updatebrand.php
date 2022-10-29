
<?php
session_start();

if (isset($_GET['id'])) {
    print "<form>";
    print '<input name="updatebrand" type="text">';
    print '<input name="summit" type="submit">'; 
    print "</form>";
    $_SESSION['id']=$_GET['id'];
}

if (isset($_GET['updatebrand'])) {
    require('../controllers/brandcontroller.php');
    $brid = $_SESSION['id'];
    
    $updbrand = update_brand($_GET['updatebrand'], $brid);

    if ($updbrand) {
    echo 'updated successful';
    header("location: ../admin/brand.php");
    } 

    else {
    echo 'update failed'; 
    } 
}

?>
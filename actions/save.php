<?php
include_once('../view/form.php');
include_once('../controllers/contact_controller.php');

if(isset($_POST["btnsave"])){

    $name= $_POST['txtname'];
    $contact= $_POST['txtprice'];

    $fname= addContact_ctr($name,$contact);
    if ($fname){
        echo 'insert successful';
    } else {
        echo 'insert failed';
    }


    
}
//  else if(isset($_GET[''])){
//      $select= selectAllContact_ctr();
//  }
?>
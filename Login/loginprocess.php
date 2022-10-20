<?php
session_start();
include("../controllers/customer_controller.php");



if(isset($_POST['enter'])){

    $email = $_POST['e_mail'];
    $password = $_POST['pass'];

    $Email= mail_ctr();
    if($Email){
        $result = login_ctr();
        if($result){
            $_SESSION['id'] = $result['customer_id'];
            $_SESSION['role'] = $result['user_role'];
          
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('../index.php','_self')</script>";
    }else{
        echo "<script>alert('Login Failed')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    }



    
    }




?>
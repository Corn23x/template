<?php
session_start();

include("../controllers/customer_controller.php");

//  do not include a session on a page that has been included and contains a session.



if(isset($_POST['enter'])){

    $email = $_POST['e_mail'];
    $password = $_POST['pass'];
    // $user_role= $_POST['user_role'];

    // $password_hash= $result["pass"];
     
    // $match = password_verify($password, $password_hash);

    

    $Email= mail_ctr();
    if($Email){
        $result = login_ctr();
        if($result){
            $_SESSION['id'] = $result['customer_id'];
            $_SESSION['role'] = $result['user_role'];
            header('Location: ../landing_page.php');

          
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('../index.php','_self')</script>";
    }else{
        echo "<script>alert('Login Failed')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    }



    
    }




?>
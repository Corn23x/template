<?php
session_start();

include("../controllers/customer_controller.php");

//  do not include a session on a page that has been included and contains a session.



// echo $_POST['enter'];
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
            echo "<script>window.open('../landing_page.php','_self')</script>";

            // header('Location: ../landing_page.php');
    }else{
       
        echo "<script>alert('Login Failed')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
    }



    
    }




?>
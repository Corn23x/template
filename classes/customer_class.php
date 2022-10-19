<?php
require('../settings/db_class.php');

class customerClass extends db_connection{

   

    function submitRec(){
    // insert query
       $sql = "INSERT INTO `customer` (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact)
           VALUES
         ('".$_POST['first_name']."', '".$_POST['email']."', '".$_POST['user_password']."', '".$_POST['country']."', '".$_POST['city']."', '".$_POST['contact_no']."')";
        // execute query
        
        return $this->db_query($sql);




        
    }
}

?>
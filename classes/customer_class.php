<?php
require('../settings/db_class.php');

class customerClass extends db_connection{

    // function submitRec(){
    //     // write sql query
    //     $sql="INSERT INTO customer (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]')";
        
    //     // execute query
    //     return $this->db_query($sql);
    // }

    function submitRec(){
        // $insert_query= ("INSERT INTO `customer` (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact) 
        // values ($name, $email, $user_password, $country, $city, $contact_no)");
        
        // return $this->db_query($insert_query);

        // insert query
       $sql = "INSERT INTO `customer` (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact)
           VALUES
         ('".$_POST['first_name']."', '".$_POST['email']."', '".$_POST['user_password']."', '".$_POST['country']."', '".$_POST['city']."', '".$_POST['contact_no']."')";
        // execute query
        return $this->db_query($sql);




        
    }
}

?>
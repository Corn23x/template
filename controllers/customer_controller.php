<?php
include('../classes/customer_class.php');

// edit,select,update,delete function

    // Select
    function insertCustomer_ctr(){
        // Create an instance
    
        $select_item= new customerClass();

        // Execute a query
       return $select_item->submitRec();

        

    }


?>
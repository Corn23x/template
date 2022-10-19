<?php
include_once("../classes/contact_class.php");

// edit,select,update,delete function

    // Select
    function selectAllContact_ctr(){
        // Create an instance
    
        $select_item= new ContactPhoneClass();

        // Execute a query
       return $select_item->selectAllContact();

        

    }

// Insert
function addContact_ctr($itemone,$itemtwo){
$add = new ContactPhoneClass();
    return $add->addContact($itemone,$itemtwo);

}   




?>
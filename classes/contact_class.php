<?php
require('../settings/db_class.php');


// add,edit, delete
class ContactPhoneClass extends db_connection{

function addContact($itemone,$itemtwo){

  // write sql query
    $sql="INSERT INTO phonebook (pname,pphoned) VALUES ('$itemone','$itemtwo')";
    
// execute query
   return $this->db_query($sql);


} 


function selectAllContact(){
   $sql="SELECT * FROM book";
    return $this->db_fetch_all($sql);
   

}

function delContact($pid){

   // write sql query
     $sql="DELETE FROM phonebook VALUES ('$pid')";
     
 // execute query
    return $this->db_query($sql);
 
 
 } 



}


?>
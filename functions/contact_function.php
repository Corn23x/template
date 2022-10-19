<?php 
// include_once('../classes/contact_class.php');
include('../controllers/contact_controller.php');


function getAllContacts() {
    $contact = selectAllContact_ctr();

    if($contact) {
        echo 'some data retrieved';
        echo '<br>';
        // Loop through the result
        foreach($contact as $acontact){
            echo $acontact['pname']." ".$acontact['pphoned'];
           
        }
    }else{
        echo 'data not retrieved';
    }
 
}

?>
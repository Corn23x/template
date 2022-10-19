<?php
require_once('../controllers/contact_controller.php');
// include('../classes/contact_class.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>


<h2>Phonebook</h2>
<form action="../actions/save.php" method="POST">

<p><input type="text" name="txtname"  placeholder="Name"></p>    
        <p><input type="text" name="txtprice" placeholder="Phone"></p>
        <input type="submit" value="Save" name="btnsave" >

</form>
<?php
//    Check list
// Check if user is login
// call the necessary files
// include('../functions/contact_function.php');

selectAllContact_ctr();
     
?>


<table id="producttable" border="1">

<thead>                 <!-- The names of the tables  -->
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    

</thead>
<tbody>
  
</tbody> 
</table>


</body>
</html>
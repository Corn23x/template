<?php
include('../controllers/product_controller.php');
session_start();
if(isset($_SESSION["id"]) && isset($_SESSION['role'])){
    if($_SESSION['role']== 2){


// if (isset($_GET['submit'])) {
//     header("Location: actions/add_brand.php");
//     $default = $_GET['brand'];
//     //make view aware of controller
    
//     //run controller responsible for insert
//     $insert = brand_add($default);

//     if ($insert) {
//     echo 'insert successful';
//     header('location:../admin/brand.php');
//     } 
//     else {
//     echo 'insert failed'; 
//     } 
 //}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands</title>
</head>
<body>
<div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4" style="color:black; text-align:left; font-size:40px">BRANDS</h2>
        <p>Welcome to the brands section</p>
        <p></p>
        <form action="../actions/add_brand.php" method="GET">
            <label for="brand">Add a brand:</label>
            <input name= 'brand' required></input>
            <input type= 'submit' name='submit' value='Add'></input>
           <button><a href='admin.php'>Back</a></button> 
        </form>
        <div class="table-wrapper">
        <table class="fl-table">
            <Thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                       Edit
                    </th>
                    <th>
                        Delete
                    </th> 
                </tr>
            </Thead>
            <Tbody>
            <?php
                $all_brands = brand_select();
                foreach($all_brands as $all)
                    {
            ?>
                     <tr>
                         <td>
                            <?= $all['brand_id'] ?>
                        </td>
                        <td>
                            <?= $all['brand_name'] ?>
                        </td>
                        <td>
                            <a href=<?="brand_update.php?id=".$all['brand_id'] ?>>Edit</a>
                        </td>
                        <td>
                            <a href=<?="../actions/deletebrand.php?id=".$all['brand_id'] ?>>Delete</a>
                        </td>  
                    </tr>
            <?php
                    }
            ?>
            </Tbody>
        </table>
        </div>
        
      </div>

    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</body>
</html>

<?php

}
else{
    header('Location: ../landing_page.php');
  }
}
  


?>
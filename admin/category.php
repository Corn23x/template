<?php
include('../controllers/product_controller.php');
session_start();
if(isset($_SESSION["id"]) && isset($_SESSION['role'])){
    if($_SESSION['role']== 2){
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
<div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4" style="color:black; text-align:left; font-size:40px">Category</h2>
        <p>Welcome to the category section</p>
        <p></p>
        <form action="../actions/add_category.php" method="GET">
            <label for="category">Add a category:</label>
            <input name= 'category' required></input>
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
                $all_cat = cat_select();
                foreach($all_cat as $all)
                    {
            ?>
                     <tr>
                         <td>
                            <?= $all['cat_id'] ?>
                        </td>
                        <td>
                            <?= $all['cat_name'] ?>
                        </td>
                        <td>
                            <a href=<?="category_update.php?id=".$all['cat_id'] ?>>Edit</a>
                        </td>
                        <td>
                            <a href=<?="../actions/deletebrand.php?id=".$all['cat_id'] ?>>Delete</a>
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
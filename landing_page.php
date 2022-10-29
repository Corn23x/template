<?php
session_start();
if(isset($_SESSION["id"]) && isset($_SESSION['role'])){
    if($_SESSION['role']== 1){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <div class="header">
        <h2>Home Page</h2>

    </div>
    <a href="./Login/logout.php">Logout</a>
</body>
</html>

<?php

}
elseif($_SESSION['role']== 2){
    header('Location: ./admin/admin.php');
  }
  else{
    header('Location: ./Login/login.php');
  }
}

?>
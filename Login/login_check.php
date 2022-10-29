<?php
if(!isset($_SESSION['e_mail'])){
    echo "<font color=red>Not logged in : <a href=login.php>Login</a> <a href=register.php>Signup</a></font>";
}else{
    echo "<font color=green>Welcome $_SESSION[e_mail]
    <a href=logout.php>Logout</a></font>";
}

?>
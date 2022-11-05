<?php
session_start();
echo "dkjdjc: ". $_SESSION["id"];

unset($_SESSION["id"]);

?>
<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);
header('Refresh: 2; URL = login.php');
session_destroy();
   header('Location:'.$link.'index.php');
?>

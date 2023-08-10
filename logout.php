<?php
include("session.php");
unset($_SESSION["uname"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);
header('Refresh: 2; URL = login.php');
session_destroy();
echo "<script>window.open('../../../../index.php','_self')</script>";
?>

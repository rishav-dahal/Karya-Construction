<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);
echo 'Logged Out Successfully';
header('Refresh: 2; URL = login.php');
session_destroy();
   header('Location:http://localhost/myproject/karya/src/template/post/index.php');
?>

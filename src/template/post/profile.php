<?php 
include("../base/database.php");
include("../base/header.php");


if(!empty($_SESSION['email']))
{
    $time=time();
    echo $time;
   // if()


    
}
else
{
    header('Location:http://localhost/myproject/karya/src/template/post/login.php');
}

include("../base/footer.php");

?>
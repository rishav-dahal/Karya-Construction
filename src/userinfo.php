<?php

$est = mysqli_connect('localhost','root');

if($est)
{
    echo "connection succesful";
}
else{
    echo "Connection failed";

}

mysqli_select_db($est,'Karya');

$username = $_POST['username'];
$pass = $_POST["pass"];

mysqli_query($est,'karya');
// $pass = "password123";

// $hash = password_hash($pass, PASSWORD_DEFAULT);

// echo $hash;
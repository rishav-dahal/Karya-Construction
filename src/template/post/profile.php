<?php 
include("../base/database.php");
include("../base/header.php");


if(!empty($_SESSION['email']))
{
    date_default_timezone_set("Asia/Kathmandu");
    $hour=date("H");
    if($hour<=12)
    {
        echo '<h1> Good morning</h1>';
    }
    else if($hour<=16)
    {
        echo '<h1> Good Afternoon</h1>';
    }
    else 
    {
        echo '<h1> Good evening</h1>';
    }
    $name=$_SESSION['name'];
    echo $name;
?>

<div class="container-profile">
    <div class="container-profile-nav">
        <ul>
            <li><a href="#profile" >Profile</a></li>
            <li><a href="#accunt">Account setting</a></li>
            <li><a href="#billing">Billing</a></li>
            <li><a href="#Delivary">Delivary</a></li>
        </ul>
    </div>
    <div class="container-profile-main">

    </div>

    <div class="container-profile-cartinfo">

    </div>
</div>
<?php  
}
else
{
    header('Location:http://localhost/myproject/karya/src/template/post/login.php');
}

include("../base/footer.php");

?>
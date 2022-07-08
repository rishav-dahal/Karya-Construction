<?php 
include("../base/database.php");
include("../base/header.php");
if(!empty($_SESSION['email']))
{    
?>
    <div class="container-profile">
        <div class="container-profile-nav">
        <?php
            date_default_timezone_set("Asia/Kathmandu");
            $hour=date("H");
            if($hour<=12)
            {
                echo '<h3> Good morning,</h3>';
            }
            else if($hour<=3)
            {
                echo '<h3> Good Afternoon,</h3>';
            }
            else 
            {
                echo '<h3> Good evening,</h3>';
            }
            $name=$_SESSION['name'];
            echo '<span class="greeting">'.$name.'</span>';
        ?>
            <ul>
                <li><a href="dashboard.php?dash=0" >Profile</a></li>
                <li><a href="dashboard.php?dash=1" >Account setting</a></li>
                <li><a href="dashboard.php?dash=2">Billing</a></li>
                <li><a href="dashboard.php?dash=3">Delivary</a></li>
            </ul>
        </div>
        <div class="container-profile-main">
            <?php 
                $dash=$_GET['dash'];
                if($dash==1)
                {
                    echo?>
                    '
                    .profile-main-header

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    ';
                }
                else if ($dash==2)
                {
                    echo
                    '<h1>This is billing</h1>';
                }
                else if ($dash==3)
                { 
                    echo
                    '<h1>This is delivary</h1>';
                }
                else
                {
                    echo
                    '<h1>This is profile</h1>';
                }
            ?>
        </div>

        <div class="container-profile-cartinfo">
            <h1>cart info</h1>
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
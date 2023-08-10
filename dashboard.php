<?php 
    include("session.php");
    include("../base/header.php");
    include("connection.php");
    $username=$_SESSION['uname'];
    $sql = "SELECT * from user_data where username='$username'";
    
    $result = mysqli_query($conn,$sql);
    
    $customer = mysqli_fetch_array($result);
    
    $id= $customer['id'];
    
    $name = $customer['name'];
    
    $email = $customer['email'];
    
    $contact = $customer['contact'];
    
    $address = $customer['address'];
    
    $gender= $customer['gender'];
    
    $profile_img = $customer['profile_image'];

    $pass= $customer['password']
?>
    <div class="container-profile">
        <div class="container-profile-nav">
            <div class="profile-img">
                <img src="<?php echo $link;?>/karya/src/data/images/<?php echo $profile_img; ?>" alt="<?php echo $profile_img; ?>">
            </div>
            
            <?php
                date_default_timezone_set("Asia/Kathmandu");
                $hour=date("H");
                if($hour<12)
                {
                    echo '<h3> Good morning,</h3>';
                }
                else if($hour<=13)
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
                <li><a href="dashboard.php?profile" >My Profile</a></li>
                <!-- <li><a href="dashboard.php?address_book" >Address book</a></li>
                <li><a href="dashboard.php?orders">Ordersg</a></li> -->
                <li><a href="dashboard.php?change_password">Change password</a></li>
                <li><a href="dashboard.php?logout">Logout</a></li>
            </ul>
        </div>
        <div class="container-profile-main">
            <?php 
                if(isset($_GET["profile"]))
                {
                    include("c_profile.php");
                }
                if(isset($_GET["address_book"]))
                {
                    include("c_address_book.php");
                }
                if(isset($_GET["orders"]))
                {
                    include("c_orders.php");
                }
                if(isset($_GET["change_password"]))
                {
                    include("c_change_password.php");
                }
                if(isset($_GET["logout"]))
                {
                    include("logout.php");
                }
                if(isset($_GET["c_edit_acc"]))
                {
                    include("c_edit_acc.php");
                }
                if(isset($_GET["c_delete_account"]))
                {
                    include("c_delete_account.php");
                }

            ?>
        </div>
    </div>
<?php  
include("../base/footer.php");
?>
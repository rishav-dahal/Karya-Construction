<?php
if(isset($_POST['update']))
{
    $old_pass =md5($_POST['old_pass']);
    $new_pass =$_POST['n_pass'];
    $confirm_new_pass =$_POST['c_n_pass'];
    if($confirm_new_pass!=$new_pass)
    {
        $passErr= 'New Password does not match';
        $err=1;
    }
    else if($pass!=$old_pass)
    {
        $passErr= 'Current password isnt valid';
        $err=1;
    }
    else
    {
        $new_pass =md5($_POST['n_pass']);
        
    }
if($err!=1)
{
    $sql="UPDATE user_data set password='$new_pass' where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {

        echo "<script>alert('Your password has been updated please login again')</script>";

        echo "<script>window.open('logout.php','_self')</script>";
    }
}    
}
?>

















<div class="container-profile-main">
                <div class="profile-main-heading">
                    <h2>Edit your password</h2>
                </div>
                <div class="profile-main-details">
                    <!-- <div class="profile-head">
                        <h3>Personal information</h3>
                    </div> -->
                    <form action="" enctype="multipart/form-data" method="POST">
                        <div class="profile-body form-content">
                            <div class="profile-item">
                                <span class="profile-item-title">Old Password</span>
                                <div class="profile-item-info ">
                                <input type="password" name="old_pass" required >
                                </div>
                            </div>
                            <div class="profile-item">
                               
                            </div>
                            <div class="profile-item">
                                <span class="profile-item-title">New password</span>
                                <div class="profile-item-info">
                                <input type="password" name="n_pass" required >
                                </div>
                            </div>
                            <div class="profile-item">
                                <span class="profile-item-title">Re-enter new password</span>
                                <div class="profile-item-info">
                                <input type="password" name="c_n_pass" required >
                                </div>
                            </div>
                        </div>
                        <button name="update" class="btn signup">UPDATE NOW</button></a>
                        
                    </form>
                    
                </div>
            </div>
<div class="container-profile-main">
                <div class="profile-main-heading">
                    <h2>Delete Account</h2>
                </div>
                <div class="profile-main-details">
                    <div class="profile-head"> 
                    </div>
                    <form action="" enctype="multipart/form-data" method="POST">
                        <div class="profile-body form-content">
                        <h1 style="padding-left: 30px;">Do you really want to delete Your account?</h1>
                            <div class="profile-item">
                            </div>
                            <div class="profile-item">
                            </div>
                        </div>
                        <button name="yes" class="btn signup">YES</button>
                        <button name="no" class="btn reset">NO</button>
                    </form>
                </div>
            </div>

<?php


if(isset($_POST['yes']))
{

    $sql= "DELETE from user_data where id='$id'";

    $result= mysqli_query($conn,$sql);

    if($result)
    {

        session_destroy();

        echo "<script>alert('Your Account Has Been Deleted Successfully!')</script>";

        echo "<script>window.open('$link/index.php','_self')</script>";

    }

}

if(isset($_POST['no']))
{

    echo "<script>window.open('dashboard.php?profile','_self')</script>";

}


?>
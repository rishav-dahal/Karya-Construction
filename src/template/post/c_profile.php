<?php 

$username=$_SESSION['uname'];
$sql = "SELECT * from user_data where username='$username'";

$result = mysqli_query($conn,$sql);

$customer = mysqli_fetch_array($result);


$name = $customer['name'];

$email = $customer['email'];

$contact = $customer['contact'];

$address = $customer['address'];

$gender= $customer['gender'];

$dob= $customer['dob'];


?>
            <div class="container-profile-main">
                <div class="profile-main-heading">
                    <h2>My profile</h2>
                </div>
                <div class="profile-main-details">
                    <div class="profile-head">
                        <h3>Personal information</h3>
                    </div>
                    <div class="profile-body">
                        <div class="profile-item">
                            <span class="profile-item-title">Customer Name</span>
                            <div class="profile-item-info">
                            <?php echo $name; ?>
                            </div>
                        </div>
                        <div class="profile-item">
                            <span class="profile-item-title">Customer Email</span>
                            <div class="profile-item-info">
                                <?php echo $email; ?>
                            </div>
                        </div>
                        <div class="profile-item">
                            <span class="profile-item-title">Customer contact</span>
                            <div class="profile-item-info">
                            <?php echo $contact; ?>
                            </div>
                        </div>
                        <div class="profile-item">
                            <span class="profile-item-title">Customer Gender</span>
                            <div class="profile-item-info">
                            <?php echo $gender; ?>
                            </div>
                        </div>
                        <div class="profile-item">
                            <span class="profile-item-title">Customer DOB</span>
                            <div class="profile-item-info">
                            <?php echo $dob; ?>
                            </div>
                        </div>
                        
                    </div>
                    <a href="dashboard.php?c_edit_acc"><button type="a" class="btn signup">EDIT ACCOUNT</button></a>
                    <a href="dashboard.php?c_delete_acc"><button type="a" class="btn reset">DELETE ACCOUNT</button></a>
                    
                </div>
            </div>
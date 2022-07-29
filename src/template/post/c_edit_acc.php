<?php

//$dob= $customer['dob'];

if(isset($_POST['update']))
{

    $n_id = $id;

    $n_name = $_POST['n_name'];

    $n_email = $_POST['n_email'];

    $n_contact = $_POST['n_contact'];

    $n_address = $_POST['n_address'];

    $n_gender= $_POST['n_gender'];

    //image validation
    if(!empty($_FILES['n_image']))
    {
        $n_image = $_FILES['n_image']['name'];
        $target_dir= "../../data/images/";
        $target_file=$target_dir.$n_image;
        $n_image_tmp = $_FILES['n_image']['tmp_name'];
        $imagefiletype= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $imgsize= $_FILES['n_image']['size'];
        $flag=0;
       $imgerror="No error";

        if($imgsize!==false)
        {
            $flag=0;
        }
        else{
            $flag=1;
        }

        if($imgsize>80000000)
        {
            $flag=2;
        }
        else{
            $flag=0;
        }

        if($imagefiletype!="jpg" && $imagefiletype!="png" &&$imagefiletype!="jpeg" && $imagefiletype!="gif")
        {
            $flag= 3;
        }

        if ($flag>0)
        {
            if($flag==2)
            {
                $imgerror="File is too large please upload less than 10mb";
            }
            else if($flag==3)
            {
                $imgerror="Only JPG,PNG &GIF files are allowed";
            }
            else
            {
                $imgerror="file is not and image";
            }
        }
        else
        {
            move_uploaded_file($n_image_tmp,$target_dir.$n_image);
            $sql = "UPDATE user_data set  profile_image='$n_image'  where id='$n_id'";
            $result = mysqli_query($conn,$sql);
        }
    }
     

    $sql = "UPDATE user_data set name='$n_name',email='$n_email',contact='$n_contact',gender='$n_gender',address='$n_address' where id='$n_id'";

    $result = mysqli_query($conn,$sql);

    if($result)
    {

        echo "<script>alert('Your account has been updated please login again')</script>";

        echo "<script>window.open('dashboard.php?profile','_self')</script>";
    }
    
}


//$dateOfBirth = $_POST['day']."-". $_POST['month']."-".$_POST['year'];

?>


<div class="container-profile-main">
                <div class="profile-main-heading">
                    <h2>Edit your account</h2>
                </div>
                <div class="profile-main-details">
                    <div class="profile-head">
                        <h3>Personal information</h3>
                    </div>
                    <form action="" enctype="multipart/form-data" method="POST">
                        <div class="profile-body form-content">
                            <div class="profile-item">
                                <span class="profile-item-title">Customer Name</span>
                                <div class="profile-item-info ">
                                <input type="text" name="n_name" required value="<?php echo $name; ?>">
                                </div>
                            </div>
                            <div class="profile-item">
                                <span class="profile-item-title">Customer Email</span>
                                <div class="profile-item-info">
                                <input type="email" name="n_email" required value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <div class="profile-item">
                                <span class="profile-item-title">Customer contact</span>
                                <div class="profile-item-info">
                                <input type="text" name="n_contact" required value="<?php echo $contact; ?>">
                                </div>
                            </div>
                            <div class="profile-item">
                                <span class="profile-item-title">Customer Gender</span>
                                <div class="profile-item-info">
                                <input type="text" name="n_gender" required value="<?php echo $gender; ?>">
                                </div>
                            </div>
                            <div class="profile-item">
                                <span class="profile-item-title">Customer address</span>
                                <div class="profile-item-info">
                                <input type="text" name="n_address" required value="<?php echo $address; ?>">
                                </div>
                            </div>
                            <!-- <div class="profile-item">
                                <span class="profile-item-title">Customer DOB</span>
                                <div class="profile-item-info">
                                <select name="year" >
                                    <option value="--" selected>Year</option>                       
                                    <?php
                                        // for($i=date('Y'); $i>1899; $i--) {
                                        //     $birthdayYear = '';
                                        //     $selected = '';
                                        //     if ($birthdayYear == $i) $selected = ' selected="selected"';
                                        //     print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
                                        // }
                                    ?>                          
                                </select>  
                                <select name="month" >
                                    <option value="--" selected>Month</option>
                                    <?php
                                    // for($i=12; $i>00; $i--) {
                                    //         $birthdaymonths = '';
                                    //         $selected = '';
                                    //         if ($birthdaymonths == $i) $selected = ' selected="selected"';
                                    //         print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
                                    //     }
                                        ?>
                                </select>  
                                <select name="day"  >
                                    <option value="--" selected>Day</option>
                                    <?php
                                        // for($i=32; $i>00; $i--) {
                                        //     $birthdayday = '';
                                        //     $selected = '';
                                        //     if ($birthdayday == $i) $selected = ' selected="selected"';
                                        //     print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
                                        // }
                                    ?>  
                                </select>
                                </div>
                            </div> -->
                            <div class="profile-item">
                                <span class="profile-item-title">Customer image</span>
                                <div class="profile-item-info">
                                <input type="file" name="n_image" >
                                </div>
                                <?php
                                if(isset($imgerror))
                                 echo '<span style="color:red">&nbsp;'.$imgerror.'</span>' 
                                 ?>
                            </div>
                        </div>
                        <button name="update" class="btn signup">UPDATE NOW</button></a>
                        
                    </form>
                    
                </div>
            </div>
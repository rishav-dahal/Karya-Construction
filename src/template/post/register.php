<?php 
//include("../base/database.php");
include("../base/header.php");

//declaring variables
$err= $nameErr= $emailErr= $usernameErr= $addressErr= $genderErr= $contactErr= $passErr=  "";
$name= $email= $username= $address= $gender= $contact= $pass = "";

//  if (isset($_SESSION['username'])) 
//  {
//      header("Location: index.php");
//  }
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        //name input
        if(empty($_POST["name"])) 
        {
            $nameErr = "Name is required";
            $err=1;
        }
        else 
        {
            $name =$_POST["name"]; 
            if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                $err=1;
            }
        }
        //email input
        if(empty($_POST["email"])) 
        {
            $emailErr = "Email is required";
            $err=1;

        }
        else 
        { 
            $email =$_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $emailErr = "Invalid email format";
                $err=1;
            }
        }

        //username input
        if(empty($_POST["username"])) 
        {
            $usernameErr = "username is required";
            $err=1;
        }
        else 
        {
            $username =$_POST["username"];
        }
        
        //address input
        if(empty($_POST["address"])) 
        {
            $addressErr = "Address is required";
            $err=1;
        }
        else 
        {
            $address = $_POST["address"];
            if (!preg_match("/^[a-zA-Z ]*$/",$address)) 
            {
                $addressErr = "Only letters and white space allowed";
                $err=1;
            }
        }

        //gender input
        if(empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $err=1;
        }
        else 
        {
            $gender = $_POST["gender"];
        }

        //contact input
        if(empty($_POST["contact"])) 
        {
            $contactErr = "Contact is required";
            $err=1;
        }
        else 
        {
            $contact = $_POST["contact"];
        }

        //password input
        if(empty($_POST["pass"]) or empty($_POST["cpass"])) 
        {
            $passErr = "please enter password";
            $err=1;
        }
        elseif($_POST['pass'] != $_POST['cpass'])
        {
            $passErr= 'Password do not match';
            $err=1;
        }
        else
        {
            $pass= md5($_POST['pass']);
        }

        if($err!='1') 
        {

            include("connection.php");
            $sql = "SELECT * FROM user_data WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if(!$result->num_rows > 0)
            {
                $sql = "INSERT INTO `user_data` ( `name`, `email`, `username`, `address`, `gender`, `contact`, `password`)
                VALUES ('$name','$email','$username','$address','$gender','$contact','$pass');";
                if(!mysqli_query($conn, $sql))
                {
                    echo "Error creating table: " . mysqli_error($conn);
                }
                else
                {
                    echo "<script>window.open('$link/index.php','_self')</script>";
                }
            }
            else
            {
            	echo "<script>alert('Woops! Email Already Exists.')</script>";
            }



            
        //insert data to database after connection
            //include('registerProcess.php');
        }
    

        // 	$karya = "SELECT * FROM users WHERE email='$email'";
        // 	$result = mysqli_query($connect, $karya);
        // 	if (!$result->num_rows > 0) 
    }
        // 		$karya = "INSERT INTO users (username, email, password)
        // 				VALUES ('$username', '$email', '$password')";
        // 		$result = mysqli_query($connect, $karya);
        // 		if ($result) {
        // 			header('Location:'.$link.'karya/src/template/post/login.php');
        // 		} else {
        // 			echo "<script>alert('Woops! Something Wrong Went.')</script>";
        // 		}
        // 	} else {
        // 		echo "<script>alert('Woops! Email Already Exists.')</script>";
        // 	}
            
        // } else {
        // 	echo "<script>alert('Password Not Matched.')</script>";
        // }

    ?>
            <div class="cover">
                <h1>REGISTER</h1>
            </div>
            <div class="form-card">
                <div class="container-login-register">
                    <div class="form">
                        <form name="register" method="POST" enctype="multipart/form-data" autocomplete="off" action="" onsubmit="validateform();">
                            <h3>SIGN UP</h3>

                            <div class="form-content">
                                <label for="user">NAME:</label><span style="color: red">*</span> 
                                <input type="text" name="name" id="name"  value="<?php echo $name; ?>">
                                <?php echo '<span style="color:red">&nbsp;'.$nameErr.'</span>'?>
                            </div>
                            <div class="form-content">
                                <label for="user">EMAIL:</label><span style="color: red">*</span> 
                                <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                                <?php echo '<span style="color:red">&nbsp;'.$emailErr.'</span>'?>
                            </div>
                            <div class="form-content">
                            <label for="user">USERNAME:</label><span style="color: red">*</span> 
                                <input type="text" name="username" id="username" value="<?php echo $username; ?>">
                                <?php echo '<span style="color:red">&nbsp;'.$usernameErr.'</span>'?>
                            </div>
                            <div class="form-content">
                                <label for="user">ADDRESS:</label><span style="color: red">*</span> 
                                <input type="text" name="address" id="address" value="<?php echo $address; ?>">
                                <?php echo '<span style="color:red">&nbsp;'.$addressErr.'</span>'?>
                            </div>
                            <div class="form-content">
                                <label for="gender">GENDER:</label><span style="color: red">*</span> 
                                <input type="radio" name="gender" value="Female"><label>Female</label>
                                <input type="radio" name="gender" value="Male"><label>Male</label> 
                                <?php echo '<span style="color:red">&nbsp;'.$genderErr.'</span>'?>
                            </div>
                            <div class="form-content">
                                <label for="user">CONTACT:</label><span style="color: red">*</span> 
                                <input type="text" name="contact" id="contact"  value="<?php echo $contact; ?>">
                                <?php echo '<span style="color:red">&nbsp;'.$contactErr.'</span>'?>
                            </div>
                            <div class="form-content">
                                <label for="pass">PASSWORD:</label><span style="color: red">*</span> 
                                <input type="password" name="pass" id="pass"  >
                                <?php echo '<span style="color:red">&nbsp;'.$passErr.'</span>'?>
                            </div>
                            <div class="form-content">
                            <label for="cpass">CONFIRM PASSWORD:</label><span style="color: red">*</span> 
                                <input type="password" name="cpass" id="cpass" >
                                <?php echo '<span style="color:red">&nbsp;'.$passErr.'</span>'?>
                            </div>
                            <div class="form-content">
                                <input type="submit" value="SIGN UP" name="signup" class="btn signup" onclick="validateform();">
                                <input type="reset" value="RESET" name="reset" class="btn reset">
                            </div>
                            <div class="form-content">
                                <a href="login.php" class="form-message">Already a member? Log in</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div> 
        <?php
include("../base/footer.php");

?>
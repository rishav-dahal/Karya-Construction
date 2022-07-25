
<?php
 include('../base/header.php');
    if(empty($_SESSION['email']))
    {
       
        $err=$usernameErr=$passErr="";
        $username=$pass="";
        if(($_SERVER["REQUEST_METHOD"] == "POST") ) 
        {
            $username=$_POST['username'];
            $pass= $_POST['pass'];
            if (empty($username)) 
            {
                $usernameErr = "Name is required";
                $err = 1;
            } 
            else 
            {
                if (!preg_match("/^[a-zA-Z ]*$/", $username)) 
                {
                    $usernameErr = "Only letters and white space allowed";
                    $err = 1;
                }
            }

            if (empty($pass)) 
            {
                $passErr = "Password is required";
                $err = 1;
            }
            if(isset($_POST['remember']) && $_POST['remember']=='1')
            {
            // setcookie("RememberMe","1",time()+86400,"/");
            }

            if($err!='1')
            {
                include('connection.php');
                $pass= md5($pass);
                $sql="SELECT * from user_data where username='$username' && password='$pass';";
                $result= mysqli_query($conn,$sql);
                if($result->num_rows>0)
                {
                    
                    $data= $result->fetch_assoc();
                    $_SESSION['id']=$data['id'];
                    $_SESSION['uname']=$data['username'];
                    $_SESSION['email']=$data['email'];
                    $_SESSION['name']=$data['name'];
                    header('Location:'.$link.'karya/src/template/post/dashboard.php?profile');
                }
                else
                {
                    $_SESSION['error']='Invalid Username or password';
                    header('Location:'.$link.'karya/src/template/post/login.php');
                }
            }
        }
?>
                <div class="cover">
                    <h1>CHECKOUT</h1>
                </div>
                <div class="form-card">
                    <div class="container-login-register">
                        <div class="form">
                            <form name="loginin" method="POST" enctype="multipart/form-data" autocomplete="off" action="">
                                <h3>SIGN IN</h3>
                                <div class="form-content">
                                    <label for="user">USERNAME:</label><span style="color: red">*</span> 
                                    <input type="text" name="username" id="username" required value="">
                                    <?php echo '<span style="color:red">&nbsp;'.$usernameErr.'</span>'?>
                                </div>
                                <div class="form-content">
                                    <label for="pass">PASSWORD:</label><span style="color: red">*</span> 
                                    <input type="password" name="pass" id="pass" required value="">
                                    <?php echo '<span style="color:red">&nbsp;'.$passErr.'</span>'?>
                                </div>
                                <div class="form-content">
                                    <input type="checkbox" name="remember" value="1" id="remember" >
                                    <label for="remember">REMEMBER ME</label>
                                </div>
                                <div class="form-content">
                                    <input type="submit" value="Sign in" name="signin" class="btn signup">
                                    <input type="reset" value="Reset" name="reset" class="btn reset">
                                </div>
                                <div class="form-content">
                                    <a href="#" class="form-message">Forgotten password?</a>
                                </div>
                                <div class="form-content">
                                    <a href="register.php" class="form-message">Not a member? Register now!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
<?php
include('../base/footer.php');
    }
    else
    {
        header('Location:'.$link.'karya/src/template/post/dashboard.php?profile');
    } 

?>

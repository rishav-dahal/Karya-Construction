<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
$version=time();
$link="http://localhost/myproject/hosting/";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=$link;?>karya/src/css/style.css?v=<?=$version?>" type="text/css">
        <link rel="stylesheet" href="<?=$link;?>karya/src/css/customer.css?v=<?=$version?>" type="text/css">
        <link rel="stylesheet" href="<?=$link;?>karya/src/css/product.css?v=<?=$version?>" type="text/css">
        <script src="https://kit.fontawesome.com/583742f5e3.js" crossorigin="anonymous"></script>
        
        <title>KARYA</title>
    </head>
    <body>
        <div class="page">
            <header>
                <div class="container-logo">
                    <div class="header-logo">
                        K<span class="header-logo-span">A</span>RYA

                    </div>
                    <div class="container-login">
                        <ul>
                            <div>
                                <li >
                                    <?php
                                    session_start();
                                        if(empty($_SESSION['email']))
                                        {
                                            echo '<a href="'.$link.'karya/src/template/post/register.php" class="container-login-btn">Register</a>';
                                        } 
                                        else
                                        { 
                                            echo '<a href="'.$link.'karya/src/template/post/dashboard.php?profile" class="container-login-btn">My Profile</a>';
                                        }   
                                    ?> 
                                </li>
                            </div>
                            <div>
                                <li>
                                    <?php
                                        if(empty($_SESSION['email']))
                                        {
                                            echo '<a href="'.$link.'karya/src/template/post/login.php" class="container-login-btn">Sign In</a>';
                                        } 
                                        else
                                        { 
                                            echo '<a href="'.$link.'karya/src/template/post/logout.php" class="container-login-btn">Logout</a>';
                                        }   
                                    ?> 
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <nav>
                    <ul>
                    <li class="active"><a href="<?php echo $link; ?>index.php">Home</a>
                        <li><a href="">Construction Material</a>
                            <div class="dropdown"> 
                                <ul>
                                    <li><a href="<?php $link; ?>karya/src/template/post/categories.php?brick">Brick</a></li>
                                    <li><a href="<?php $link; ?>karya/src/template/post/categories.php?rock">Crushed rock</a></li>
                                    <li><a href="<?php $link; ?>karya/src/template/post/categories.php?sand">Sand</a></li>
                                    <li><a href="<?php $link; ?>karya/src/template/post/categories.php?cement">Cement</a></li>
                                    <li><a href="<?php $link; ?>karya/src/template/post/categories.php?rebar">steel rebar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="repair.php">Repairs</a>
                            <div class="dropdown"> 
                                <ul>
                                    <li><a href="<?php $link; ?>categories.php?brick">Pipes & fit</a></li>
                                    <li><a href="<?php $link; ?>karya/src/template/post/categories.php?rock">Electric</a></li>
                                    <li><a href="<?php $link; ?>karya/src/template/post/categories.php?sand">Carpenter</a></li>
                                    <li><a href="<?php $link; ?>karya/src/template/post/categories.php?cement">Mason</a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- <li><a href="interior.php">Interior Design</a></li>
                        <li><a href="more.php">More</a></li>
                        <li><a href="contact.php">Contact Experts</a></li> -->
                    </ul>
                </nav>
            </header>


            <!-- END OF HEADER -->
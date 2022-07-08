<?php
session_start();

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
$version=time();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css?v=<?=$version?>" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Document</title>
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
                                        if(empty($_SESSION['email']))
                                        {
                                            echo '<a href="../post/register.php" class="container-login-btn">Register</a>';
                                        } 
                                        else
                                        { 
                                            echo '<a href="../post/dashboard.php?dash=0" class="container-login-btn">My Profile</a>';
                                        }   
                                    ?> 
                                </li>
                            </div>
                            <div>
                                <li>
                                    <?php
                                        if(empty($_SESSION['email']))
                                        {
                                            echo '<a href="../post/login.php" class="container-login-btn">Sign In</a>';
                                        } 
                                        else
                                        { 
                                            echo '<a href="../post/logout.php" class="container-login-btn">Logout</a>';
                                        }   
                                    ?> 
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <nav>
                    <ul>
                    <li class="active"><a href="index.php">Home</a>
                        <li><a href="material.php">Construction Material</a>
                            <div class="dropdown"> 
                                <ul>
                                    <li><a href="#">Brick</a></li>
                                    <li><a href="#">Agrrrigate</a></li>
                                    <li><a href="#">Sand</a></li>
                                    <li><a href="#">Cement</a></li>
                                    <li><a href="#">steel rebar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="repair.php">Repairs</a></li>
                        <li><a href="interior.php">Interior Design</a></li>
                        <li><a href="more.php">More</a></li>
                        <!-- <li><a href="contact.php">Contact Experts</a></li> -->
                    </ul>
                </nav>
            </header>


            <!-- END OF HEADER -->
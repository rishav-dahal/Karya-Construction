<?php
//defining the server
$servername = "localhost";
$server_user="root";
$server_password="";

//creating connection
$conn = mysqli_connect($servername,$server_user,$server_password);

//checking connection

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

//database creation

$sql = "CREATE DATABASE if not exists karya";
if(!mysqli_query($conn,$sql))
{
    echo "Error creating database:" . mysqli_error($conn);
}

$d_name='karya';
mysqli_select_db($conn,$d_name);
$sql="CREATE TABLE if not exists `user_data`
    (
        `id` int(10) AUTO_INCREMENT PRIMARY KEY,
        `name` varchar(255) NOT NULL,
        `email` varchar(50) DEFAULT NULL,
        `username` varchar(255) DEFAULT NULL, 
        `address` varchar(255) NOT NULL, 
        `gender` varchar(1) NOT NULL,
        `contact` int(11) DEFAULT NULL,
        `password` varchar(255) DEFAULT NULL,
        `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
        `dob` varchar(30), `profile_image` varchar(30)
    )";
    
if(!mysqli_query($conn,$sql))
{
    echo "Error creating table: " . mysqli_error($conn);
}
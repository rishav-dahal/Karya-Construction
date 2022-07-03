<?php
//defining the server
$servername = "localhost";
$server_user="root";
$server_password="";

//creating connection
$connect = mysqli_connect($servername,$server_user,$server_password);

//checking connection

if(!$connect)
{
    die("Connection failed:".mysqli_connect_error());
}

//database creation

$karya = "CREATE DATABASE if not exists karya";
if(!mysqli_query($connect,$karya))
{
    echo "Error creating database:" . mysqli_error($connect);
}

$d_name='karya';
mysqli_select_db($connect,$d_name);
$karya="CREATE TABLE if not exists `user_data`
    (
        `id` int(10) AUTO_INCREMENT PRIMARY KEY,
        `name` varchar(255) NOT NULL,
        `email` varchar(50) DEFAULT NULL,
        `username` varchar(255) DEFAULT NULL, 
        `address` varchar(255) NOT NULL, 
        `gender` tinyint(1) NOT NULL,
        `contact` int(11) DEFAULT NULL,
        `password` varchar(255) DEFAULT NULL,
        `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
    )";
    
if(!mysqli_query($connect,$karya))
{
    echo "Error creating table: " . mysqli_error($connect);
}
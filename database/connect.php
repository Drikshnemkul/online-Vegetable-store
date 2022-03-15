<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "";
$conn = mysqli_connect($host, $username, $password, $dbName);
// create database
$sql = "CREATE DATABASE project";
mysqli_query($conn,$sql);
mysqli_select_db($conn, "project");
// check connection
if(!$conn){
    die('connection failed');
}

$sqll = 'CREATE TABLE users(
    userName VARCHAR(50) NOT NULL,
    phoneNo INT NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)';
mysqli_query($conn, $sqll);

mysqli_close($conn);

?>
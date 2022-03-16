<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "project";
$conn = mysqli_connect($host, $username, $password, $dbName);
// check connection
if(!$conn){
    die('connection failed');
}
?>
<?php
include('connect.php');
$email = $_POST['email'];
$password = $_POST['pass'];
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

?>
<?php
include('connect.php');
$email = $_POST['email'];
$password = $_POST['pass'];
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){
    header('Location:../index.php');
}else{
    $msg = "Username and password does not match";
    header('Location:../login.php?errmsg='.$msg);
}
?>
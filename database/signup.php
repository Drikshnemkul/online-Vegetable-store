<?php
$name = $_POST['fname'];
$email = $_POST['email'];
$number = $_POST['number'];
$pass1 = $POST['pass1'];
$pass2 = $_POST['pass2'];
if($pass1===$pass2){
    $password = md5($pass1);
    include('connect.php');
    $query = "INSERT INTO users(userName,email,phoneNo,password)
    VALUES ('$name','$email','$number','$password')";
    if(mysqli_query($conn,$query)){
        $msg = "signup successfull";
        header('Location:../login.php?msg=',$msg);
    }else{
        $msg = "Error:".mysqli_error($conn);
        header('Location:../signup.php?errmsg='.$msg);
    }
}else{
    $msg = "password and confirm password does not match";
       header('Location:../signup.php?errmsg='.$msg);
}
?>
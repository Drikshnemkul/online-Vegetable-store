<?php
  $name = $_POST['fname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];
   if($pass1===$pass2){
       $encryptedPassword = md5($pass1);
     include('connect.php');
     $query = "INSERT INTO users(fullName,address,email,password) 
     VALUES ('$name','$address','$email','$encryptedPassword')";
     if(mysqli_query($conn,$query)){
         $msg ="signup successfull";
         header('location:../login.php?msg='.$msg);
     }else{
         $msg = "Error:".mysqli_error($conn);
         header('location:../signup.php?errmsg='.$msg);
     }
    
   }else{
       $msg = "password and confirm password does not match";
       header('Location:../signup.php?errmsg='.$msg);
   }
?>
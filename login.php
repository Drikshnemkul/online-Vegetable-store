<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="login.css">

</head>
<body>
<div id="bg"></div>

<form action="database/check.php" method="POST">
  <div class="form-field">
    <input type="email" name="email" placeholder="Email / Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="pass1" placeholder="Password" required/>                        
 </div>
 
  <div class="form-field">
    <button class="btn" type="submit">Log In</button>
  </div>
  <div class="acc">
    <p>Create an account? <a href="signup.php">Sign Up</a></p>
  </div>
</form>
<?php

                        if(isset($_GET['errmsg'])){ ?>
                          <div class="alert alert-danger">
                              <?php echo $_GET['errmsg']; ?>
                          </div>
                      <?php  }
                     ?>
                     <?php

                        if(isset($_GET['msg'])){ ?>
                          <div class="alert alert-success">
                              <?php echo $_GET['msg']; ?>
                          </div>
                      <?php  }
                     ?>

</body>
</html>
<?php
$dbusername = "Mahdi123";
$dbpassword = "Mahdi123";
$dbhost = "openshift";
$dbname = "ecs417";
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login-page.css" type="text/css">
<h2>Login Form</h2>

<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="images-phase1/login-avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="Email"><b>Email</b></label>
    <input type="email" placeholder="Email" name="Email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button> 
  </div>
</form>
</html>


<?php 

session_start();

	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "SELECT * FROM USERS WHERE username = '$user_name'";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login-page.css" type="text/css">
<h2>Login Form</h2>

<form method="post">
  <div class="imgcontainer">
    <img src="images-phase1/login-avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="user_name" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button> 
    <a href="signup.php">Click to Signup</a><br><br>

  </div>
</form>
</html>


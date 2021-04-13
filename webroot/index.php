<?php
  session_start();  
?>

<!DOCTYPE html>
<html>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="portfolio-reset.css" type="text/css">
    <link rel="stylesheet" href="startpage.css" type="text/css">
    <head>
        <ul>
            <li><a class="active" href="homepage.html">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
			<li><a href="university.html">University</a></li>
          </ul>
    </head>
    <body>
        <div class="img">
            <img src="images-phase1/background-homepage.jpg" alt="background" style="width: max-content;">
        </div>
        <div class="class1">
        <p>
            <h2><b>Welcome to my Portfolio</b></h2>
            <h3><b><a href="logout.php">Logout</a></b></h3>
        </p>
        </div>
        <div class="img2">
           <a href="login-page.php"><img src="images-phase1/login-button.jpeg" alt="login-button" style="size: 1em;"></a>
        </div>
    </body>
    <br>
    <div class="footer1">
    <footer>
        <a href="https://twitter.com/Mahdi64_"><img src="images-phase1/twitter.jpg" alt="twitter" style="width: 10%;"></a>
        </div>
        <div class="footer2">
        <a href="https://www.whatsapp.com/?lang=en"><img src="images-phase1/whatsapp.jpg" alt="whatsapp" style="width: 10%;"></a>
        </div>
        <div class="footer3">
        <a href="https://www.youtube.com/"><img src="images-phase1/youtube.jpg" style="width: 10%;"></a>
        </div>
    </footer>
</html>

<?php
  session_start(); 
?>
<!DOCTYPE html>
<HTML>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="login-page-reset.css" type="text/css">
    <link rel="stylesheet" href="blog-form.css" type="text/css">
    <script src="blogform.js"></script>
    <form method="POST" action="addpost.php" id="myForm">
        <fieldset>
            <legend><header>Blog</header></legend>
            <p>
                <div>
                <input type="text" placeholder="Title" title="Title" id="Title">
                </div>
                <br>
            </p>
            <p>
                <div>
                <textarea rows="50" cols="100" placeholder="Enter Blog here" input type="text" id="blogtext"></textarea>
                <br>
                </div>
                <footer script src = blogform.js>
            </p>
            <input type="submit" class="button" value="Submit" id="submitButton" onclick="return validateForm()">   <input type="button" onclick="myFunction()" value="Clear Form" class="button"></button>
            </footer>
</HTML>    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="Images/logo-s-png.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="CSS/login-style.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Tilt+Neon&display=swap');</style>
        <style>@import url('https://fonts.googleapis.com/css2?family=Varela&display=swap');</style>
        <style>@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');</style>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
        <script src="JS/login-js.js"></script>
        <title>Login/Register</title>
    </head>
    <body>
		<?php
		session_start();
		if (isset($_SESSION['uid'])) {
    		echo"<h2 style='text-align:center;'>You are already logged in.</h2>";
    		exit();
		}
		?>
        <div class="wrapper">
            <div class="nav">
                <ul>
                    <li><a href="index.php" class="hover">HOME</a></li>
                    <li><img src="Images/logo-png.png" alt="" class="nav-img"></li>
                </ul>
            </div>
            <div class="registration" id="reg">
                <div class="registration-box">
                    <div class="registration-form animate">
                        <div>
                            <a href="#" id="hide" class="hide">X</a>
                        </div>
                        <h2>Join Us Today!</h2>
                        <form action="PHP/register.php" method="post">
                            <input type="text" placeholder="Username" id="usern" name="usern" required>
                            <input type="text" placeholder="Email" id="email" name="email" required>
                            <input type="text" placeholder="Confirm Email" id="confirm-email" name="confirm-email" required>
                            <input type="password" placeholder="Password" id="pass" name="pass" required>
                            <input type="password" placeholder="Confirm Password" id="con-pass" name="con-pass" required>
                            <input type="submit" id="register" value="Register!">
                        </form>
                    </div>
                </div>
            </div>
            <div class="login">
                <div class="login-box">
                    <img src="Images/login.png" alt="">
                    <div class="line"></div>
                    <div class="login-form">
                        <h2>Welcome Back!</h2>
                        <form action="PHP/login.php" method="post">
                            <input type="text" placeholder="Username" id="user" name="user" required>
                            <input type="password" placeholder="Password" id="password" name="password" required>
                            <button type="submit" id="login">Login!</button>
                            <button type="button" id="reg-popup">New here? Register Now!</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p>Made with &#129505; by Prakhar Pandey</p>
            </div>
        </div>
    </body>
</html>
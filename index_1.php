<?php 
    include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steel Plant Visakhapatnam Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Added style attribute for background-image here -->
<div class="container">

        <div class="login-box">
            <h2>Login</h2>
            <form method="post" action="login.php" name="form">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="user" name="user" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="pass" name="pass" required>
                </div>

                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>

                <input type="submit" id="btn" value="login" name="submit">
            </form>
        </div>
    </div>
</body>
</html>

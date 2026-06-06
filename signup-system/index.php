<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Signup system/css/main.css">
    <title>PHP Signup System</title>
</head>
<body>

    <h1>Signup</h1>

    <form action="./includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button class="signup-btn">Signup</button>
    </form>

    <h1>Login</h1>
   
    <form action="/signup-system/includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="pwd" placeholder="Password">
        <button class="login-btn">Login</button>
    </form>
    <?php

    check_signup_errors();

    ?>
</body>
</html>
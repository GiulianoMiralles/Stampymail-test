<?php
include "includes/header.php";
?>
<div class="login-box">
    <img class="avatar" src="img/stampymail-logo.png" alt="logo de stampymail">
    <h1>Login</h1>
    <form action="includes/login.php" method="POST">
        <!--Username-->
        <label for="email">Email</label>
        <input type="email" placeholder="Enter email" name="email">
        <!--Password-->
        <label for="password">Password</label>
        <input type="password" placeholder="Enter password" name="password">

        <input type="submit" value="Log In">
        <a href="#"> Lost your password?</a><br>
        <a href="singup.php"> Don't have an account?</a>
    </form>
</div>

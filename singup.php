<?php
include "includes/header.php";
?>

<body>

    <div class="login-box">
        <img class="avatar" src="img/stampymail-logo.png" alt="logo de stampymail">
        <h1>Sing Up</h1>
        <form action="includes/singup.php" method="POST">
            <!--Name-->
            <label for="username">Name</label>
            <input type="text" placeholder="Enter username" name="username" required>
            <!--Email-->
            <label for="email">Email</label>
            <input type="email" placeholder="Enter email" name="email" required>
            <!--Password-->
            <label for="password">Password</label>
            <input type="password" placeholder="Enter password" name="password" required>
            <label for="confirm password"> Confirm Password</label>
            <input type="password" placeholder="confirm password" name="password2" required>
            <input type="submit" value="Sing Up">
            <a href="login.php"> Do you already have an account?</a>
        </form>
    </div>

</body>
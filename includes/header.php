<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampymail | Test</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
</head>

<?php
include 'includes/db.php';
session_start();
if (isset($_SESSION['email'])) { ?>

    <div id="container">
        <nav>
            <a href="/stampymail-technical-test/index.php">
                <img class="avatar" src="../../stampymail-technical-test/img/stampymail-logo.png" alt="logo de stampymail">
            </a>

            <ul>
                <li><a href="/stampymail-technical-test/index.php">Usuario: <?php echo $_SESSION['name']; ?></a></li>
                <li><a href="/stampymail-technical-test/includes/log_out.php">Log Out</a></li>
            </ul>
        </nav>
    </div>

<?php
} else {
?>

    <div id="container">
        <nav>
            <a href="/stampymail-technical-test/index.php">
                <img class="avatar" src="../../stampymail-technical-test/img/stampymail-logo.png" alt="logo de stampymail">
            </a>
            <ul>
                <li><a href="/stampymail-technical-test/index.php">Home</a></li>
                <li><a href="/stampymail-technical-test/login.php">Log In</a></li>
                <li><a href="/stampymail-technical-test/singup.php">Sing Up</a></li>
            </ul>
        </nav>
    </div>

<?php
}
?>
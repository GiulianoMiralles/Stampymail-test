<?php
include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Recover password </title>
</head>

<body>
	<div class="login-box">
		<img class="avatar" src="img/stampymail-logo.png" alt="logo de stampymail">
		<h1>Recover password</h1>
		<form action="includes/forgot_includes.php" method="POST">
			<p>Enter your email to be able to recover your password</p>
			<!--Email-->
			<label for="email">Email</label>
			<input id="email" type="email" placeholder="Enter email" name="email" required>
			<input type="submit" value="Recover password">
			<a href="login.php"> Go to login </a>
		</form>
	</div>

</body>

</body>

</html>
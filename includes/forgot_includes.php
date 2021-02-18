<?php
include 'db.php';

$email = $_POST['email'];
$query = "SELECT * from users where email = '$email'";
$consulta = mysqli_query($conection, $query);
$result = mysqli_fetch_array($consulta);

if ($result['email'] == $email) {
    require '../email/email.php';
    // if the email exists email.php will send an email with the new password
    // and this will be saved in the database replacing the old one
    $mail->addAddress($email);
    $new_password = md5($new_password);
    $query = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
    $consulta = mysqli_query($conection, $query);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title> Recover password </title>
            <link rel="stylesheet" href="../css/card.css">
        </head>
        <body>
            <div class="wrapper">
                <div class="container">

                    <div class="card">
                        <header class="card-header">
                            <h2 class="card-title">Recover password</h2>
                        </header>
                        <div class="card-body">
                        <form action="includes/forgot_includes.php" method="POST">
                            <p class="card-content">
                            We have sent your new password to your email
                            </p>
                            </form>
                        </div>
                        <footer class="card-footer">
                        <a href="login.php"> Go to login </a>
                        </footer>
                    </div>
                </div>
            </div>
        </body>

<?php
} else {  //if the email does not exist in the database?>
    <body>
        <div class="login-box">
            <img class="avatar" src="img/stampymail-logo.png" alt="logo de stampymail">
            <h1>Recover password</h1>
            <form action="includes/forgot_includes.php" method="POST">
                <h4> The email entered is not in our database </h4>
                <a href="login.php"> Go to login </a>
            </form>
        </div>

    </body>
<?php
};
?>
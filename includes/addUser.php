<?php
include 'db.php';          //I import the connection from the database

// I receive the data from the form and assign it to variables
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// I verify that the passwords match
if ($password !== $password2) {
    $_SESSION['error'] = 'no match in passwords';
    header("location: ../login.php");
} else {
    //I verify that there is no other user with the same email in the database
    $query = "SELECT * from users where email='$email'";
    $consult = mysqli_query($conection, $query);
    $result = mysqli_fetch_array($consult);

    if ($result['email'] == $email) {
        $_SESSION['error'] = 'Sorry, it seems this email already belongs to another user, try another email address.';
        header("location: ../login.php");
    } else {
        //if everything is fine, encrypt the password and insert the data into the database
        $password_for_email = $password;
        $password = md5($password_for_email);
        $query = "INSERT INTO users (name, email, password) values('$name','$email','$password')";
        $consulta = mysqli_query($conection, $query);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title> User added successfully!</title>
            <link rel="stylesheet" href="../css/card.css">
        </head>

        <body>

            <div class="wrapper">
                <div class="container">

                    <div class="card">
                        <header class="card-header">
                            <h2 class="card-title">Successful registration</h2>
                        </header>
                        <div class="card-body">
                            <p class="card-content">
                                The new user was added successfully. <br>
                                Go back to the beginning to see the complete list.
                            </p>
                        </div>
                        <footer class="card-footer">
                            <a href="../index.php" class="card-link">Home</a>
                        </footer>
                    </div>
                </div>
            </div>
        </body>

        </html>
<?php
    };
};
?>
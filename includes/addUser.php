<?php
include 'db.php'; 


$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

 
if ($password !== $password2) {  
    $_SESSION['error'] = 'no hay coincidencia en las contraseñas';
    header("location: ../login.php");
    } else {

        $query = "SELECT * from users where email='$email'";
        $consult = mysqli_query($conection, $query);
        $result = mysqli_fetch_array($consult);

        if ($result['email'] == $email) {  
            $_SESSION['error'] = 'Lo sentimos, al parecer este email ya pertenece a otro usuario, pruebe con otra direccion de correo.';
            header("location: ../login.php");
        } else {

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
            <title> Usuario agregado con exito!</title>
        </head>
        <body>
        <div class="">
            <h3 class=""> Usuario agregado con éxito. </h3>
            <a href="../index.php"><button class=""> Home</button></a>
            </div>
            <div class=""></div>
        </div>
        </body>
        </html>
<?php
    };
};
?>
<?php
include 'db.php'; // importo la conexion a la base de datos

// obtener datos del formulario enviados por el metodo a post del archivo singup.php
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// control de que las dos contraseñas coincidan 
if ($password !== $password2) {  
    $_SESSION['error'] = 'no hay coincidencia en las contraseñas';
    header("location: ../login.php");
    } else {
        // verifico que el email ingresado no haya sido registrado antes por otro usuario
        $query = "SELECT * from users where email='$email'";
        $consult = mysqli_query($conection, $query);
        $result = mysqli_fetch_array($consult);

        if ($result['email'] == $email) {  
            $_SESSION['error'] = 'Lo sentimos, al parecer este email ya pertenece a otro usuario, pruebe con otra direccion de correo.';
            header("location: ../login.php");
        } else {
            // Una vez verificados los datos los inserto en la base de datos
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
            <title> Registro exitoso!</title>
        </head>
        <body>
        <div class="">
            <h3 class=""> Usuario registrado con éxito. </h3>
            <h4 class="">Le hemos enviado un correo a su email, proporcionandole los datos de acceso.</h4>
            <a href="../login.php"><button class=""> Ir a login</button></a>
            </div>
            <div class=""></div>
        </div>
        </body>
        </html>
<?php
    };
};
?>
 
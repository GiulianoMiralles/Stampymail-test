<?php 
    include "db.php";
    
    if (isset($_GET['id'])){
        $id = $_GET['id'];  
        $query = "DELETE FROM users WHERE id = $id";  
        $result= mysqli_query($conection, $query);
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
            <h3 class=""> Usuario eliminado con éxito. </h3>
            <a href="../index.php"><button class=""> Ir al inicio</button></a>
            </div>
            <div class=""></div>
        </div>
        </body>
        </html>

        <?php 
        if (!$result){
            die('Fallo el eliminado');
        }
    }
    ?>
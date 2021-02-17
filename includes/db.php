<! - I make the connection to the database and in case of error I show it on the screen ->

<?php

$conection = new mysqli("localhost", "root", "", "stampymail_test", 3306);
if ($conection->connect_errno) {
    echo "Error al intentar conectar con la base de datos: (" . $conection->connect_errno . ") " . $conection->connect_error;
}
?>
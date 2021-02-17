<?php
include "header.php";
include "db.php";

if (isset($_POST)) { // si recibo las varaibles a traves de method 'POST'
        $id = $_GET['id']; 
        // Estos datos son obtendios del mismo formulario
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // reescribo los campos en la base de datos
        $query = "UPDATE users set name = '$name' , email ='$email', password = '$password' WHERE id = $id"; 
        mysqli_query($conection, $query);  

        header('Location: /stampymail-technical-test/index.php');
    }
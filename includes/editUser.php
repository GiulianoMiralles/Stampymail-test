<?php
include "header.php";
include "db.php";

if (isset($_POST)) {
    $id = $_GET['id'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "UPDATE users set name = '$name' , email ='$email', password = '$password' WHERE id = $id";
    mysqli_query($conection, $query);

    header('Location: /stampymail-technical-test/index.php');
}

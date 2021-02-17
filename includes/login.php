<!-- Aqui verifico que los datos del formulario de logeo correspondan con los de un usuario ya registrado en la base de datos -->

<?php
include 'db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$query = "SELECT * from users where email='$email' and  password='$password'";
$consulta = mysqli_query($conection, $query);
$result = mysqli_fetch_array($consulta);

if($result['email'] == $email && $result['password'] == $password){
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['name'] = $result['name'];
    header("location: /stampymail-technical-test/index.php");
}else{
    header("location: /stampymail-technical-test/login.php");
}
?>
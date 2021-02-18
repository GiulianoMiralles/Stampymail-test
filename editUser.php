<!-- aqui el ususario registrado podra editar su  publicacion-->

<?php
include "includes/header.php";
include "includes/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conection, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $name = $row[1];
        $email = $row[2];
        $password = $row[3];
    }
}
?>

<br>

<div class="login-box">
    <img class="avatar" src="img/stampymail-logo.png" alt="logo de stampymail">
    <h1>Edit user</h1>
    <form action="includes/editUser.php?id=<?php echo $_GET['id']; ?> " method="POST">
        <!--Name-->
        <label for="username">Name</label>
        <input type="text" placeholder="Enter username" name="username" value='<?php echo $name ?>'>
        <!--Email-->
        <label for="password">Email</label>
        <input type="email" placeholder="Enter email" name="email" value='<?php echo $email ?>'>
        <!--Password-->
        <label for="password">Password</label>
        <input type="password" placeholder="Enter password" name="password" value='<?php echo $password ?>'>
        <input type="submit" value="update">
    </form>
</div>
<?php
include "includes/header.php";
include "includes/db.php";
$query = " SELECT * FROM users ";
$result = mysqli_query($conection, $query);


if (isset($_SESSION['email'])) {
?>

    <body>
        <div class="button-add">
            <a class="button-success" href="../stampymail-technical-test/addUser.php">Add user</a>
        </div>
        <div class="container">

            <table>
                <tr>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
                </thead>
                <?php

                while ($row = mysqli_fetch_array($result)) {

                    if (($clave = array_search($_SESSION['email'], $row)) == false) {
                ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row['name'] ?></td>
                                <td class="text-center"><?php echo $row['email'] ?></td>
                                <td class="text-center">
                                    <a class="button-edit" href="../stampymail-technical-test/editUser.php?id=<?php echo $row[0] ?>">Edit</a>
                                    <a class="button-delete" href="../stampymail-technical-test/includes/deleteUser.php?id=<?php echo $row[0] ?>"> Delete </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
    </body>
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Stampymail | Test</title>
        <link rel="stylesheet" href="css/card.css">
    </head>

    <body>

        <div class="wrapper">
            <div class="container">

                <div class="card">
                    <header class="card-header">
                        <h2 class="card-title">Access required!</h2>
                    </header>
                    <div class="card-body">
                        <p class="card-content">
                            You must be logged in to see the list of users.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <a href="login.php" class="card-link">Login</a>
                    </footer>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
}
?>
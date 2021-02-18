<?php
include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conection, $query);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Usuario agregado con exito!</title>
        <link rel="stylesheet" href="../css/card.css">
    </head>

    <body>

        <div class="wrapper">
            <div class="container">

                <div class="card">
                    <header class="card-header">
                        <h2 class="card-title">Successful deletion</h2>
                    </header>
                    <div class="card-body">
                        <p class="card-content">
                            User deleted successfully. <br>
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
    if (!$result) {
        die('Deleted failed');
    }
}
?>
<?php
session_start();
require '../global.php';
if (!isset($_COOKIE["user"]) || empty($_COOKIE["user"])) {
    if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
        header("Location: " . $baseUrl . "LoginPdo.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<a class='nav-link ' href='logout.php'>logout</a>";
    ?>

    <p>Congratulations, you have successfully logged in</p>
</body>
<script src="../vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</html>
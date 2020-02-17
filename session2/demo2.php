<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['username']))
        echo $_SESSION['username'];
    ?>

    <a href="logout.php">Dang xuat</a>
</body>

</html>
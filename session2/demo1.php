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
    $_SESSION['username'] = "Nguyen Thanh Luan";
    ?>

    <a href="demo2.php">>Go to demo 2</a>
</body>

</html>
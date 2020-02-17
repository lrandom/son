<?php
if (isset($_FILES['img'])) {
    print_r($_FILES['img']);
    move_uploaded_file($_FILES['img']['tmp_name'], time() . 'file.png');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data" />
    <input type="file" name="img" />
    <input type="submit" value="Upload file" />
    </form>
</body>

</html>
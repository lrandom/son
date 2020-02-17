<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['pwd'])) {
    $pwd = $_POST['pwd'];
};

echo $username;
echo $pwd;
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST");

$username = $_POST['username'];
$password = $_POST['password'];

$users = file("users.txt", FILE_IGNORE_NEW_LINES);

foreach ($users as $u) {
    list($savedUser, $savedPass) = explode("|", $u);

    if ($savedUser == $username && $savedPass == $password) {
        echo "Success";
        exit();
    }
}

echo "Invalid";
?>

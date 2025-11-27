<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST");

$username = $_POST['username'];
$password = $_POST['password'];

if (!preg_match("/^[a-zA-Z]+$/", $username)) {
    echo "Invalid username";
    exit();
}

if (!preg_match("/^(?=.*[A-Za-z])(?=.*[0-9]).{4,}$/", $password)) {
    echo "Weak password";
    exit();
}

$file = "users.txt";
$users = file($file, FILE_IGNORE_NEW_LINES);

foreach ($users as $u) {
    list($savedUser, $savedPass) = explode("|", $u);
    if ($savedUser == $username) {
        echo "User Exists";
        exit();
    }
}

file_put_contents($file, $username."|".$password."\n", FILE_APPEND);

echo "Success";
?>

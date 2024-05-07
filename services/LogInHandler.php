<?php
require_once '../Models/UserDatabase.php';  

$userDb = new UserDatabase($pdo); 

try {
    $userDb->getAuth()->login($_POST['email'], $_POST['password']);
   
    header('Location: /index.php');
    exit();
}
catch (\Delight\Auth\InvalidEmailException $e) {
    die('Wrong email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Wrong password');
}
catch (\Delight\Auth\EmailNotVerifiedException $e) {
    die('Email not verified');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}

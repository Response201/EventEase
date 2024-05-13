<?php
ob_start();
require 'vendor/autoload.php';
require_once ('Models/Database.php');
$dbContext = new DBContext();
$message = '';

try {
    $dbContext->getUsersDatabase()->getAuth()->confirmEmail($_GET['selector'], $_GET['token']);
    $message = 'Ditt konto är verifierat';
} catch (Delight\Auth\AuthException $e) {
    $message = 'Något gick fel vid verifieringen';
}
header("Location:/login?message=$message");
?>
<?php
ob_start();
include_once ("Models/Database.php"); 

$dbContext = new DBContext();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include(__DIR__ . '/../includes/head.php'); ?>
</head>
<body>
    <?php include(__DIR__ . '/../views/Navbar.php'); ?>
    <div class="landingpage-container">
        <div class="slogan-text">
            <h1>EventEase</h1>
            <p>Studera smartare, inte hårdare – Anmäl dig till handledning idag!</p>
        </div>
        <div class="background-container"></div>
    </div>

<?
?>

    <?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>
</html>

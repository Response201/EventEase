<?php
session_start();
ob_start();
require_once(realpath(dirname(__FILE__) . '/../Models/Database.php'));

?>

<head>

    <title>Lärare</title>
    <?php include(__DIR__ . '/../includes/head.php'); ?>

</head>

<body>
<?php include(__DIR__ . '/../views/Navbar.php'); ?>
<div class="meeting-wrapper">
<div class="admin-container">


</div>
</div>
<?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>
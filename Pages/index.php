<?php
ob_start();

include_once ("Models/Database.php");
$dbContext = new DBContext();
 ?>
<!DOCTYPE html>

<head>
<title>EventEase</title>
<?php include(__DIR__ . '/../includes/head.php'); ?>
   
</head>

<body>
<?php include(__DIR__ . '/../views/Navbar.php'); ?>
<div class="container">
<div class="slogan-text"> <h1> EventEase</h1>
<p>Studera smartare, inte hårdare – Anmäl dig till handledning idag!</p></div>
<div class="background-container"> </div>
</div>

<?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>
</html>
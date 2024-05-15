<?php
ob_start();
include_once ("Models/Database.php");
 ?>
<!DOCTYPE html>
<head>
<title>EventEase</title>
<?php include('./includes/head.php'); ?>
</head>
<body>
<?php include('./views/Navbar.php'); ?>
<div class="landingpage-container">
<div class="slogan-text"> <h1> EventEase</h1>
<p>Studera smartare, inte hårdare – Anmäl dig till handledning idag!</p></div>
<div class="landingpage-background-container"> </div>

</div>
<!--
     <?php foreach ($teacherIds as $row): ?>
       <li><a class="dropdown-item" href="#"><?= htmlspecialchars($row['teacherId']) ?></a></li>
     <?php endforeach; ?>
     -->
 </div>
 <?php include(__DIR__ . '/../views/Footer.php'); ?>
 </body>
 </html>

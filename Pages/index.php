<?php
ob_start();

 ?>
<!DOCTYPE html>

<head>
<title>EventEase</title>
<?php include(__DIR__ . '/../includes/head.php'); ?>
   
</head>

<body>

<?php include(__DIR__ . '/../views/Navbar.php'); ?>
<div class="landingpage-container">
<div class="slogan-text"> <h1> EventEase</h1>
<p>Studera smartare, inte hårdare – Anmäl dig till handledning idag!</p></div>
<div class="background-container"> </div>
</div>




<div class="btn-group">
   <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
     Boka möte
   </button>
   <ul class="dropdown-menu">
     <?php foreach ($teacherIds as $row): ?>
       <li><a class="dropdown-item" href="#"><?= htmlspecialchars($row['teacherId']) ?></a></li>
     <?php endforeach; ?>
   </ul>
 </div>



 

 
 </div>
 
 <?php include(__DIR__ . '/../views/Footer.php'); ?>
 </body>
 </html>
 
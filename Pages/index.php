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

include_once ("Models/Booking.php");


$dbContext = new DBContext();


 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 <title>EventEase</title>
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Freeman&display=swap" rel="stylesheet">
 <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
 <link rel="icon" type="image/ico" href="assets/favicon.ico" />
 <link href="/css/styles.css" rel="stylesheet" />
 <link href="/css/navigation.css" rel="stylesheet" />
 <link href="/css/footer.css" rel="stylesheet" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </head>
 <body>
 <?php include(__DIR__ . '/../views/Navbar.php'); ?>
 
 <div class="container">
 <div class="slogan-text"> <h1> EventEase</h1>
 <p>Studera smartare, inte hårdare – Anmäl dig till handledning idag!</p></div>
 <div class="background-container"> </div>
 
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
 
<?php
ob_start();

include_once ("Models/Database.php");
$dbContext = new DBContext();
 ?>
<!DOCTYPE html>

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
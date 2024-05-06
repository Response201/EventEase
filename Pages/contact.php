<?php
ob_start();

require_once ("Models/Database.php");

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
    <link href="/css/contact.css" rel="stylesheet" />
   
</head>
<html>
<body>
<?php include(__DIR__ . '/../views/Navbar.php'); ?>
<div class="container">

<div class="container">
    <div class="teacher-container">
        <h2>Välj en lärare och visa tillgängliga tider</h2>
        <form action="" method="get">
            <label for="teacher_id">Välj en lärare:</label>
            <div class="dropdown">
            <select class="dropdown-btn" name="teacherId" id="teacher_id">
                <option value="1">Sebastian</option>
                <option value="2">Stefan</option>
                <option value="3">Anders</option>
            </select>
            </div>
            <button type="submit" name="submit_teacher">Visa tillgängliga tider</button>
        </form>
    </div>
        <div class="background-container">
            <!-- Visa lediga tider för lärare -->
            <?php
            if (isset($_GET['submit_teacher'])) {
                echo "<h3>Tillgängliga Tider</h3>";
                echo "<ul>";
                echo "<li>10:00</li>";
                echo "<li>14:00</li>";
                echo "<li>16:00</li>";
                echo "</ul>";
            }
            ?>
        </div>
    </div>

<?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>
</html>
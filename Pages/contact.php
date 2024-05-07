<?php
ob_start();

require_once ("Models/Database.php");

$dbContext = new DBContext();

?>
<!DOCTYPE html>

<head>


<title>Contact</title>
    <?php include(__DIR__ . '/../includes/head.php'); ?>
   
</head>

<html>
<body>
<?php include(__DIR__ . '/../views/Navbar.php'); ?>


<div class="contact-container">
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
            <button class="submit-btn" type="submit" name="submit_teacher">Visa tillgängliga tider</button>
        </form>
    </div>
    <div class="contact">
            <!-- Visa lediga tider för lärare -->
            <?php
            if (isset($_GET['submit_teacher'])) {
                echo "<h3>Tillgängliga Tider:</h3>";
                echo "<div class='contact-teacher'>";
                echo "<div><li>Tid: 10:00</li><li>Rum: 2</li><li>Lärare: ...</li></div>";
                echo "<div><li>Tid: 10:00</li><li>Rum: 2</li><li>Lärare: ...</li></div>";
                echo "<div><li>Tid: 10:00</li><li>Rum: 2</li><li>Lärare: ...</li></div>";
                echo "</div>";
            }
            ?>
        </div>
    
</div>
<?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>
</html>
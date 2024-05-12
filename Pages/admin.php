<?php

session_start();



ob_start();
require_once ("Models/Database.php");

$dbContext = new DBContext();



$message = '';

$teacherId = $dbContext->getUsersDatabase()->getAuth()->getUserId();

if (isset($_POST['save'])) {
    $teacherId = $_POST['teacherId'];
    $timeStamp = $_POST['timeStamp'] ?? '';
    $pupilId = $_POST['pupilId'] != null ? /* $dbContext-> getUsersDatabase()->getAuth()->getUserId() */ null : 2;
    $status = $_POST['status'] ? 0 : 1;
    $message = $dbContext->updateBooking($pupilId, $teacherId, $timeStamp, $status);

}




?>

<head>

    <title>Lärare</title>
    <?php include (__DIR__ . '/../includes/head.php'); ?>

</head>

<body>
    <?php include ('./views/Navbar.php'); ?>
    <div class="meeting-wrapper">

        <div class="sidebar">
            <nav>

                <h2>Handledning</h2>
                <ul>
                    <li><a href="#">Visa inbokade handledningstillfällen</a></li>
                    <li><a href="#">Boka nytt handledningstillfälle</a></li>
                </ul>
                <h2>Klasshantering</h2>
                <ul>
                    <li><a href="#">Hantera klasser</a></li>
                    <li><a href="#">Skapa och redigera handledning</a></li>
                </ul>
                <h2>Uppföljning</h2>
                <ul>
                    <li><a href="#">Sammanfattning av senaste handledningarna</a></li>
                    <li><a href="#">Elevers framsteg och betyg</a></li>
                    <li><a href="#">Feedback från elever</a></li>
                    <li><a href="#">Analys och rapporter</a></li>
                </ul>
                <h2>Övrigt</h2>
                <ul>
                    <li><a href="#">Inställningar</a></li>
                    <li><a href="#">Hjälp</a></li>
                </ul>
                <h1> EventEase</h1>
            </nav>
        </div>

        

           

            <div class="admin-timecards-wrapper">
 <h3>handledningstid</h3>
                <div class="admin-timecards-container">

                    <?php include_once ("components/timecard.php");

                    $bookings = $dbContext->allActiveBookingsTeacher($teacherId);
                    foreach ($bookings as $booking) {
                        echo generateTimeCard($booking);
                    } ?>






                </div>
            </div>
        
    </div>
    <?php include (__DIR__ . '/../views/Footer.php'); ?>
</body>
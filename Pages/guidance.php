<?php
ob_start();
include_once ("Models/Database.php");
include_once ("Models/Booking.php");


$message = '';

$dbContext = new DBContext();


if (isset($_POST['save'])) {
    $teacherId = $_POST['teacherId'];
    $timeStamp = $_POST['timeStamp'] ?? '';
    $pupilId = $_POST['pupilId'] != null ? null : $dbContext->getUsersDatabase()->getAuth()->getUserId();
    $status = $_POST['status'] ? 0 : 1;
    $message = $dbContext->updateBooking($pupilId, $teacherId, $timeStamp, $status);

}

?>
<!DOCTYPE html>

<head>
    <title>EventEase</title>
    <?php include (__DIR__ . '/../includes/head.php'); ?>

</head>

<body>
    <?php include (__DIR__ . '/../views/Navbar.php'); ?>
    <div class="guidance-wrapper">
        <!--Nav-->
        <div class="guidance-nav">
            <div class="logo-name-booking-list">
                <div class="logo-name">

                </div>

            </div>
        </div>
        <ul class="booking-links">


        </ul>
        <div class="content-container">
            <h3>Lediga tider för:
                <form method="POST" style="display: inline;">
                    <div class="select-wrapper">
                        <select name="selectedTeacher" onchange="this.form.submit()">
                            <?php
                            $selectedTeacher = $_POST['selectedTeacher'] ?? 'Alla lärare';
                            echo '<option value="Alla lärare"' . ($selectedTeacher == 'Alla lärare' ? ' selected' : '') . '>Alla lärare</option>';
                            $teacherUsernames = $dbContext->getAllTeachers();
                            foreach ($teacherUsernames as $item) {
                                $isSelected = ($selectedTeacher == $item['id']) ? ' selected' : '';
                                echo '<option class="form-control" value="' . $item['id'] . '"' . $isSelected . '>' . $item['username'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </form>

            </h3>



            <!--Productkort/main-->
            <ul class="timeslot-list">

                <?php

                include_once ("components/timecard.php");
                $pupilId = $dbContext->getUsersDatabase()->getAuth()->getUserId();
                $teacher = $_POST['selectedTeacher'] ?? 'Alla lärare';
                $bookings = $dbContext->allActiveBookings($teacher, $pupilId);
                foreach ($bookings as $booking) {
                    echo generateTimeCard($booking, $_POST['selectedTeacher'] ?? 'Alla lärare');

                }
                ?>
            </ul>
        </div>
    </div>


    <?php include (__DIR__ . '/../views/Footer.php'); ?>
</body>

</html>
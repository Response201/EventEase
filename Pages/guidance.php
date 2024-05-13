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
            <form method="POST">
                <select name="selectedTeacher" onchange="this.form.submit()">
                    <option value="Alla lärare">Alla lärare</option>
                    <?php
                    $teacherUsernames = $dbContext->getAllTeachers();
                    foreach ($teacherUsernames as $item) {
                        echo '<option class="form-control" value="' . $item['id'] . '"';
                        if (isset($_POST['selectedTeacher']) && $_POST['selectedTeacher'] == $item['id']) {
                            echo ' selected';
                        }
                        echo '>' . $item['username'] . '</option>';
                    }


                    ?>

                </select>
                <!--     <button type="submit">Visa tider</button> -->
            </form>

        </ul>
        <div class="content-container">
            <h3>Lediga tider för:
                <strong>
                    <?php
                    $post = $_POST['selectedTeacher'] ?? 'Alla lärare';

                    if ($post === "Alla lärare") {

                        $name = 'Alla lärare';
                    } else if ($_POST['selectedTeacher'] !== "Alla lärare") {
                        $name = $dbContext->getTeacherNameById($_POST['selectedTeacher']);
                    }
                    echo "$name"; ?>
                </strong>
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
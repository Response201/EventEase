<?php
ob_start();
include_once ("Models/Database.php");
include_once ("Models/Booking.php");



$dbContext = new DBContext();
?>
<!DOCTYPE html>

<head>
    <title>EventEase</title>
    <?php include (__DIR__ . '/../includes/head.php'); ?>

</head>

<body>
    <div class="guidance-wrapper">
        <!--Nav-->
        <div class="guidance-nav">
            <div class="logo-name-booking-list">
                <div class="logo-name">
                    <div class="logo"><img src="img\🦆 icon _cloud_.svg"></div>
                    <h2>EventEase</h2>
                </div>

                <ul class="booking-links">
                    <li>
                        <a href="#">Tillgängliga lärare<i class="fa-solid fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <?php
                            $teacherUsernames = $dbContext->getTeacherUsername();
                            foreach ($teacherUsernames as $username) {
                                echo '<li><a href="#">' . $username . '</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <!--Byt mot riktig länk-->
                    <li><a href="#">Hitta lediga tider</a></li>
                    <!--Byt mot riktig länk-->
                    <li><a href="#">Mina bokningar</a></li>
                    <!--Byt mot riktig länk-->
                </ul>
            </div>

            <ul class="profile-links">
                <li><a>Välkommen Elev Elevsson</a></li>
                <!--Byt mot riktig länk-->
                <li><a>Logga ut</a></li>
                <!--Byt mot riktig länk-->
            </ul>
        </div>

        <div class="content-container">
            <h3>Lediga tider</h3>
            <!--Productkort/main-->

            <ul class="timeslot-list">
                <?php
                $unbookedBookings = $dbContext->getAllUnbookedBookings();
                foreach ($unbookedBookings as $booking) {
                    $teacherName = $dbContext->getTeacherNameById($booking['teacherId']);
                    echo "<li class='time-card'>";
                    echo "<p>" . date("l d/m", strtotime($booking['timeStamp'])) . "</p>";
                    echo "<p>Kl " . date("H:i", strtotime($booking['timeStamp'])) . "</p>";
                    echo "<p>Lärare: " . htmlspecialchars($teacherName) . "</p>";
                    echo "<p>Rum 1</p>";
                    echo "<div class='button-img'><button class='booking-button'>Boka</button>";
                    echo "<img class='teacher-avatar' src='img\\teacher.png' alt='teacher'></div>";
                    echo "</li>";
                }
                ?>
            </ul>
        </div>
    </div>


    <?php include (__DIR__ . '/../views/Footer.php'); ?>
</body>

</html>
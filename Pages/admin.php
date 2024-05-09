<?php

ob_start();
require_once ("Models/Database.php");

$dbContext = new DBContext();



$message = '';

$teacherId = $dbContext->getUsersDatabase()->getAuth()->getUserId(); 

if (isset($_POST['save'])){
    $teacherId = $_POST['teacherId'];
    $timeStamp = $_POST['timeStamp'] ?? '';
    $pupilId = $_POST['pupilId'] != null ? /* $dbContext-> getUsersDatabase()->getAuth()->getUserId() */ null : 2;
    $status = $_POST['status'] ? 0:1;
    $message = $dbContext->updateBooking($pupilId,$teacherId,$timeStamp,$status);
    
     }



?>
<head>

    <title>Lärare</title>
    <?php include(__DIR__ . '/../includes/head.php'); ?>

</head>

<body>
<?php include(__DIR__ . '/../views/Navbar.php'); ?>
<div class="admin-wrapper">
<div class="admin-container">
<h2>Möteslista</h2>



<?php include_once ("components/timecard.php");
                
                $bookings = $dbContext-> allActiveBookingsTeacher($teacherId);
                foreach ($bookings as $booking) {
                    echo generateTimeCard($booking);
                } ?>





        <!-- <table>
            <tr>
                <th>Mötesdatum</th>
                <th>Student</th>
                <th>Status</th>
                <th>Åtgärder</th>
            </tr>

            <?php foreach ($meetings as $meeting): ?>
            <tr>
                <td><?php echo htmlspecialchars($meeting['date']); ?></td>
                <td><?php echo htmlspecialchars($meeting['student']); ?></td>
                <td><?php echo htmlspecialchars($meeting['status']); ?></td>
                <td>
                    
                    <?php if ($meeting['status'] !== 'Avklarat'): ?>
                    <form method="post" action="markAsCompleted.php">
                        <input type="hidden" name="meetingId" value="<?php echo htmlspecialchars($meeting['id']); ?>">
                        <input type="submit" value="Markera som avklarat">
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table> -->
</div>
</div>

<?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>
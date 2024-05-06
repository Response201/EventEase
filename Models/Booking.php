<?php
class Booking
{
    public $teacherId;
    public $active;
    public $meetings;
    public $status;
    public $timeStamp;

    public function __construct($teacherId, $active, $meetings, $status, $timeStamp) {
        $this->teacherId = $teacherId;
        $this->active = $active;
        $this->meetings = $meetings;
        $this->status = $status;
        $this->timeStamp = $timeStamp;
    }

    public function createTable($pdo) {
        $sql = "CREATE TABLE IF NOT EXISTS bookings (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            teacherId INT(11) NOT NULL,
            active BOOLEAN NOT NULL DEFAULT TRUE,
            meetings TEXT NOT NULL,  
            status VARCHAR(50) DEFAULT 'pending',
            timeStamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        try {
            $pdo->exec($sql);
            echo "Table created successfully.\n";
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }

    public function getTeacherIds($pdo) {
        $sql = "SELECT DISTINCT teacherId FROM bookings ORDER BY teacherId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function insertBooking($pdo, $teacherId, $active, $meetings, $status) {
        $sqlInsert = "INSERT INTO bookings (teacherId, active, meetings, status) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sqlInsert);

        $stmt->execute([1, FALSE, '09:00,10:00,11:00,12:00,14:00,15:00', 'available']);
        $stmt->execute([1, FALSE, '09:00,10:00,11:00,12:00,14:00,15:00', 'available']);
        $stmt->execute([2, FALSE, '09:00,10:00,11:00,12:00,14:00,15:00', 'available']);
        $stmt->execute([2, FALSE, '09:00,10:00,11:00,12:00,14:00,15:00', 'available']);
        $stmt->execute([3, FALSE, '09:00,10:00,11:00,12:00,14:00,15:00', 'available']);
        $stmt->execute([3, FALSE, '09:00,10:00,11:00,12:00,14:00,15:00', 'available']);
        
        $stmt = $pdo->prepare($sqlInsert);
        try {
            $stmt->execute([$teacherId, $active, $meetings, $status]);
            echo "Booking inserted successfully.\n";
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
}

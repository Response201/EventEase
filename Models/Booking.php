<?php

class Booking
{
    public $teacherId;
    public $pupilId;
    public $active;
    public $meetings;
    public $timeStamp;

    public function __construct($teacherId, $pupilId, $active, $meetings, $timeStamp) {
        $this->teacherId = $teacherId;
        $this->pupilId = $pupilId;
        $this->active = $active;
        $this->meetings = $meetings;
        $this->timeStamp = $timeStamp;
    }

    public function createTable($pdo) {
        $sql = "CREATE TABLE IF NOT EXISTS bookings (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            teacherId INT(11) NOT NULL,
            pupilId INT(11) NOT NULL,
            active BOOLEAN NOT NULL,
            meetings INT(11) NOT NULL,
            timeStamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        try {
            $pdo->exec($sql);
            echo "Table created successfully.";
        } catch (PDOException $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
}

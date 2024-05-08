<?php
 
require_once ('Models/UserDatabase.php');
require_once ('Models/Booking.php');
date_default_timezone_set('Europe/Stockholm');
setlocale(LC_TIME, 'sv_SE');
class DBContext
{
    private $pdo;
    private $usersDatabase;
 
    function getUsersDatabase()
    {
        return $this->usersDatabase;
    }
 
    function __construct()
    {
        $host = $_ENV['host'];
        $db = $_ENV['db'];
        $user = $_ENV['user'];
        $pass = $_ENV['pass'];
        $dsn = "mysql:host=$host;dbname=$db";
        $this->pdo = new PDO($dsn, $user, $pass);
        $this->usersDatabase = new UserDatabase($this->pdo);
        $this->initIfNotInitialized();
        $this->seedfNotSeeded();
    }
 
 
 
/* filtrerar ut bokningar för en elev -> id och om datumet + tiden inte är äldre en dagens + klockslag
 
Hämtningen kan användas så här(frontend):
 
 
<?php
 
$bookings = $dbContext->getPupilbookings(2);
 
 
foreach($bookings as $item){
 
echo "<h1> $item[timeStamp] </h1>";
 
 
} ?>
 
 EN function för att updatera tiden när en user trycker på och ändra status till "False"; Då bokas tiden av user.
 
*/
 //Function för att posta en bokning, vi behöver teacherId, pupilId och timestamp.

 function updateBookingStatus($teacherId)
{
    // Vi kollar satusen först innan vi updaterar
    $checkSql = "SELECT status FROM bookings WHERE teacherId = :teacherId";
    $prepCheck = $this->pdo->prepare($checkSql);
    $prepCheck->execute([':teacherId' => $teacherId]);
    $result = $prepCheck->fetch(PDO::FETCH_ASSOC);

    if ($result && $result['status'] == 1) {
        // updater från 1 till 0, aktiv blir oaktiv eftersom det är bollean så måste det vara 1 och 0
        $updateSql = "UPDATE bookings SET status = 0 WHERE teacherId = :teacherId AND status = 1";
        $prepUpdate = $this->pdo->prepare($updateSql);
        if ($prepUpdate->execute([':teacherId' => $teacherId])) {
            return "Booking status updated successfully.";
        } else {
            return "Error updating booking status.";
        }
    } else {
        return "This booking is already taken.";
    }
}

function getPupilbookings($pupilId)
{
    $date = date("Y-m-d H:i:s");
    $prep = $this->pdo->prepare('SELECT * FROM bookings where pupilId=:pupilId AND timeStamp > :date;
    ');
    $prep->execute([':pupilId' => $pupilId, ':date' => $date]);
    return $prep->fetchAll();
}
 
/* Hämtar bokningar för lärare(skapa den eftersom den behövs för att skapa dummydata ) */
 
    function getBooking($teacherId, $timeStamp)
    {
        $prep = $this->pdo->prepare('SELECT * FROM bookings where teacherId=:teacherId AND timeStamp=:timeStamp');
      /* SENARE -> FIXA SÅ KLASSEN MATCHAR FETCHEN  
       $prep->setFetchMode(PDO::FETCH_CLASS, 'Booking'); */
        $prep->execute(['teacherId' => $teacherId, ':timeStamp' => $timeStamp]);
        return $prep->fetch();
    }
 
/* Skapar bokning om ingen finns */
    function createIfNotExisting($teacherId, $pupilId, $active,  $status, $timeStamp)
    {
        $existing = $this->getBooking($teacherId, $timeStamp);
        if ($existing) {
            return;
        }
        ;
        return $this->addBooking($teacherId, $pupilId, $active, $status, $timeStamp );
    }
 
 
/* Lägger till bokning -> kan även användas när en ny bokning ska göras */
 
    function addBooking($teacherId, $pupilId, $active, $status, $timeStamp)
    {
        $prep = $this->pdo->prepare('INSERT INTO bookings (teacherId, pupilId, active, status, timeStamp) VALUES(:teacherId, :pupilId, :active, :status, :timeStamp)');
           /* SENARE -> FIXA SÅ KLASSEN MATCHAR FETCHEN  
       $prep->setFetchMode(PDO::FETCH_CLASS, 'Booking'); */
        $prep->execute(['teacherId' => $teacherId, 'pupilId' => $pupilId, 'active' => $active, 'status' => $status, 'timeStamp'=> $timeStamp]);
        return $this->pdo->lastInsertId();
    }
 
    /* DUMMYDATA */
 
       function seedfNotSeeded()
        {
            static $seeded = false;
            if ($seeded)
                return;
                $this->createIfNotExisting( 1, 2, 1, 1, '2024-05-22 20:00');
                $this->createIfNotExisting(2, 2, 1, 1, '2024-05-22 17:00');
                $this->createIfNotExisting( 3, 1, 1, 1, '2024-05-22 19:00');
                $this->createIfNotExisting( 1, 1, 1, 1, '2024-05-22 18:00');
 
            $seeded = true;
        }

 
/* Dubletter av lärarid + tid kan ej förekomma */
 
    function initIfNotInitialized()
    {
        static $initialized = false;
        if ($initialized)
            return;
        $sql = 'CREATE TABLE IF NOT EXISTS `bookings` (
            `teacherId` int(10)  NOT NULL, 
            `pupilId` int(10) NOT NULL, 
            `active` boolean NOT NULL,
            `status` boolean NOT NULL,
            `timeStamp` varchar(20) NOT NULL,
            PRIMARY KEY (`teacherId`, `timeStamp`)
        )';
            $this->pdo->exec($sql);
 
        $sql = 'CREATE TABLE IF NOT EXISTS `teachers` (
            `Id` INT AUTO_INCREMENT, 
            `name` VARCHAR(100) NOT NULL, 
            `email` VARCHAR(100) NOT NULL,
            `availableTimes` TEXT,
            PRIMARY KEY (`Id`)       
        )';
 
        $this->pdo->exec($sql);
 
 
 
        
        $this->usersDatabase->setupUsers();
        $this->usersDatabase->seedUsers();
        $initialized = true;
    }
}
?>
<?php

require_once ('Models/UserDatabase.php');

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
    
    }


    function initIfNotInitialized()
    {
        static $initialized = false;
        if ($initialized)
            return;
       
        $sql = 'CREATE TABLE IF NOT EXISTS `bookings` (
            `teacherId` int(10)  NOT NULL, 
            `pupilId` int(10) NOT NULL, 
            `active` boolean NOT NULL,
            `timeStamp` varchar(20) NOT NULL,
            PRIMARY KEY (`timeStamp`)
       
        )';

        $this->pdo->exec($sql);
        
        $this->usersDatabase->setupUsers();
        $this->usersDatabase->seedUsers();
       
        $initialized = true;
    }
}
?>
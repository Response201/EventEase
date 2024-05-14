<?php
session_start();
session_unset();  
session_destroy(); 
require_once ('Models/Database.php'); 
$dbContext = new DbContext();
$dbContext->getUsersDatabase()->getAuth()->logOut();

    header('Location: /');
    exit;
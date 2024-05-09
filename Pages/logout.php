<?php
session_start();
session_unset();  
session_destroy();  



    header('Location: /Pages/index.php');
    exit;
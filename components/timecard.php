<?php
include_once ("Models/Database.php");


function generateTimeCard($booking, $dropdown='Alla lärare')
{
    $dbContext = new DBContext();
    $date = new DateTime($booking['timeStamp']);
    $weekday = $date->format('l');
    $day = $date->format('j/n');
    $time = $date->format('H:i');
    $teacher = $dbContext->getTeacherNameById($booking['teacherId']);
$pupilId = $dbContext->getUsersDatabase()->getAuth()->getUserId() ?? ""; 
$consumer = $dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::CONSUMER) ? true : false;
$author = $dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::AUTHOR) ? true : false;
$button ="";





if($consumer && $booking['pupilId'] == null){

    $button = "<button class='booking-button' name='save'>Boka</button>";
 }
 else if($booking['pupilId'] && $author || $booking['pupilId'] == $pupilId ){
 
     $button = "<button class='booking-button' name='save'>Avboka</button>";
  }
  else if(!$booking['pupilId'] && $author ){
 
    $button = "<button class='booking-button' >Ledig</button>";
 }









    return "
    
    <li class='time-card'>
        <p>{$weekday} {$day}</p>
        <p>Kl {$time}</p>
        <p>Lärare: {$teacher}</p>
        <p>Rum 1</p>
        <form method='POST' class='button-img'>
            {$button}
            <img class='teacher-avatar' src='img/teacher.png' alt='teacher'>
            <input type='hidden' name='teacherId' value='{$booking['teacherId']}' />
            <input type='hidden' name='timeStamp' value='{$booking['timeStamp']}' />
            <input type='hidden' name='pupilId' value='{$booking['pupilId']}' />
            <input type='hidden' name='status' value='{$booking['status']}' />
            <input type='hidden' name='selectedTeacher' value='{$dropdown}' />
        </form>
    </li>
   
    ";
}
?>
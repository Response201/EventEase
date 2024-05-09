<?php

$bookings = $dbContext->getPupilBookings(2);

function generateTimeCard($booking)
{
    $date = new DateTime($booking['timeStamp']);
    $weekday = $date->format('l');
    $day = $date->format('j/n');
    $time = $date->format('H:i');
    $teacher = "Anders Andersson";


    return "
    <li class='time-card'>
        <p>{$weekday} {$day}</p>
        <p>Kl {$time}</p>
        <p>Lärare: {$teacher}</p>
        <p>Rum 1</p>
        <form method='POST' class='button-img'>
            <button class='booking-button' name='save'>Boka</button>
            <img class='teacher-avatar' src='img/teacher.png' alt='teacher'>
            <input type='hidden' name='teacherId' value='{$booking['teacherId']}' />
            <input type='hidden' name='timeStamp' value='{$booking['timeStamp']}' />
        </form>
    </li>
    ";
}
?>
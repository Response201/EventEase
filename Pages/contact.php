<?php
ob_start();
?>

<!DOCTYPE html>

<head>


<title>EventEase</title>
    <?php include(__DIR__ . '/../includes/head.php'); ?>
   
</head>

<html>
<body>
    
    <?php include('./views/Navbar.php'); ?>
    
    
    <div class="contact">
        <div class="contact-container">
            <h2>Läs mer om våra lärare</h2>
            <div class="arrow-contacts">
                    <a href="#Stefan">
                    <i class="fa-solid fa-circle-arrow-down"></i>
                    </a>
            </div>
        </div>
        <div id="Stefan" class="teacher">
            <div class="teacher-container">
                <div class="teacher-container-info">
                    <h2>Namn: Stefan Holmberg<img class='teacher-avatar' src='img/teacher.png' alt='teacher'></h2>
                    <br>
                    <p>Beskrivning: Mitt namn är Stefan och jag älskar att programmera</p>
                    <br>
                    <p>Lärandeområden: PHP</p>
                    <br>
                    <p>Kontakta mig:</p>
                    <p>Tel: 070-555 22 33</p>
                    <p>Mail: Stefan@mail.com</p>
                    <br>
                    <li><a href="/guidance" class="teacher-link">Boka handledning</a></li>
                </div>
                <div class="arrow-contacts">
                    <a href="#Sebastian">
                    <i class="fa-solid fa-circle-arrow-down"></i>
                    </a>
                </div>
            </div>
            
          
            <div id="Sebastian" class="teacher-container">
            <div class="teacher-container-info">
                    <h2>Namn: Sebastian Tegel<img class='teacher-avatar' src='img/teacher.png' alt='teacher'></h2>
                    <br>
                    <p>Beskrivning: Mitt namn är Sebastian och jag älskar att loopa</p>
                    <br>
                    <p>Lärandeområden: Html/css, JavaScript/TypeScript</p>
                    <br>
                    <p>Kontakta mig:</p>
                    <p>Tel: 070-777 88 22</p>
                    <p>Mail: Sebbe@mail.com</p>
                    <br>
                    <li><a href="/guidance" class="teacher-link">Boka handledning</a></li>
                </div>
                <link rel="stylesheet" href="">
                <div class="arrow-contacts">
                    <a href="#Anders">
                    <i class="fa-solid fa-circle-arrow-down"></i>
                    </a>
                </div>
            </div>
            
            
            <div id="Anders" class="teacher-container">
            <div class="teacher-container-info">
                    <h2>Namn: Anders Andersson<img class='teacher-avatar' src='img/teacher.png' alt='teacher'></h2>
                    <br>
                    <p>Beskrivning: Mitt namn är Anders och jag älskar att code:a</p>
                    <br>
                    <p>Lärandeområden: Backend</p>
                    <br>
                    <p>Kontakta mig:</p>
                    <p>Tel: 070-444 11 66</p>
                    <p>Mail: Anders@mail.com</p>
                    <br>
                    <li><a href="/guidance" class="teacher-link">Boka handledning</a></li>
                </div>
                <link rel="stylesheet" href="">
                <div class="arrow-contacts">
                    <a href="#Footer">
                    <i class="fa-solid fa-circle-arrow-down"></i>
                    </a>
                </div>
            </div>
            
    
        </div>
        
    </div>
    <?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>

</html>
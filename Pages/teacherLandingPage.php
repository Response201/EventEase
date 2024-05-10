<?php
ob_start();



?>
<head>

    <title>Lärare</title>
    <?php include(__DIR__ . '/../includes/head.php'); ?>

</head>

<body>
<?php include(__DIR__ . '/../views/Navbar.php'); ?>
<div class="teacher-landingpage-wrapper">
    <h1>Lärarpanelen</h1>
    <div class="sidebar">
    <nav>

        <h2>Uppgifter och prov</h2>
        <ul>
            <li><a href="#">Skapa och redigera uppgifter</a></li>
            <li><a href="#">Skapa och redigera prov</a></li>
        </ul>
        <h2>Klasshantering</h2>
        <ul>
            <li><a href="#">Hantera klasser</a></li>
            <li><a href="#">Skapa och redigera kurser</a></li>
        </ul>
        <h2>Elevprestationer</h2>
        <ul>
            <li><a href="#">Granska elevprestationer</a></li>
            <li><a href="#">Se elevrapporter</a></li>
        </ul>

        <h2>Övrigt</h2>
        <ul>
            <li><a href="#">Inställningar</a></li>
            <li><a href="#">Hjälp</a></li>
        </ul>
        <h1> EventEase</h1>
    </nav>
</div>
    <div class="teacher-notes">
    
    <h2>Noteringar</h2>
    <p>Det finns inga noteringar för idag.</p>
    
    </div>
    <div class="main-teacher">
        <section id="welcome">
            <h2>Din dagliga översikt</h2>
            <div id="todays-sessions">
                <p>Laddar dagens sessioner...</p>
            </div>
        </section>
        <section id="progress">
            <h2>Elevprogression</h2>
            <p> Laddar dagens progression..</p>
            <div>
                <canvas id="progressChart"></canvas>
            </div>
        </section>
        <section id="resources">
            <h2>Resurser för Undervisning</h2>
            <div>
                <a href="/path/to/resource">Introduktion till Algebra</a>
                <a href="/path/to/video">Video om Ekvationer</a>
            </div>
        </section>
        <section id="communication">
            <h2>Kommunikationscenter</h2>
            <!-- Chattinterface och anslagstavla -->
            <div>
                <p>Chatta med dina elever direkt här.</p>
                <!-- Implementera ett chattsystem eller länka till ett externt verktyg -->
            </div>
        </section>
    </div>
</div>

<?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>
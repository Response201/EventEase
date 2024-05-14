<?php
ob_start();
?>
<head>
    <title>Lärare</title>
    <?php include('./includes/head.php'); ?>
</head>
<body>
<?php include('./views/Navbar.php'); ?>
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
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"  cursor="pointer" viewBox="0,0,300,150">
<defs><linearGradient x1="45.007" y1="16.993" x2="45.007" y2="20.993" gradientUnits="userSpaceOnUse" id="color-1_IpjajBS4Wzwt_gr1"><stop offset="0" stop-color="#8ab4ff"></stop><stop offset="1" stop-color="#e492ff"></stop></linearGradient><linearGradient x1="50.007" y1="11.993" x2="50.007" y2="15.993" gradientUnits="userSpaceOnUse" id="color-2_IpjajBS4Wzwt_gr2"><stop offset="0" stop-color="#8ab4ff"></stop><stop offset="1" stop-color="#e492ff"></stop></linearGradient><linearGradient x1="40.007" y1="21.993" x2="40.007" y2="25.993" gradientUnits="userSpaceOnUse" id="color-3_IpjajBS4Wzwt_gr3"><stop offset="0" stop-color="#8ab4ff"></stop><stop offset="1" stop-color="#e492ff"></stop></linearGradient><linearGradient x1="38.007" y1="14.993" x2="38.007" y2="18.993" gradientUnits="userSpaceOnUse" id="color-4_IpjajBS4Wzwt_gr4"><stop offset="0" stop-color="#8ab4ff"></stop><stop offset="1" stop-color="#e492ff"></stop></linearGradient><linearGradient x1="47.007" y1="23.993" x2="47.007" y2="27.993" gradientUnits="userSpaceOnUse" id="color-5_IpjajBS4Wzwt_gr5"><stop offset="0" stop-color="#8ab4ff"></stop><stop offset="1" stop-color="#e492ff"></stop></linearGradient><linearGradient x1="43.007" y1="9.993" x2="43.007" y2="13.993" gradientUnits="userSpaceOnUse" id="color-6_IpjajBS4Wzwt_gr6"><stop offset="0" stop-color="#8ab4ff"></stop><stop offset="1" stop-color="#e492ff"></stop></linearGradient><linearGradient x1="52.007" y1="19.993" x2="52.007" y2="23.993" gradientUnits="userSpaceOnUse" id="color-7_IpjajBS4Wzwt_gr7"><stop offset="0" stop-color="#8ab4ff"></stop><stop offset="1" stop-color="#e492ff"></stop></linearGradient><linearGradient x1="12.007" y1="47.993" x2="12.007" y2="55.993" gradientUnits="userSpaceOnUse" id="color-8_IpjajBS4Wzwt_gr8"><stop offset="0" stop-color="#8ab4ff"></stop><stop offset="1" stop-color="#e492ff"></stop></linearGradient><linearGradient x1="31.998" y1="7.007" x2="31.998" y2="56.993" gradientUnits="userSpaceOnUse" id="color-9_IpjajBS4Wzwt_gr9"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(4,4)"><circle cx="45.007" cy="18.993" r="2" fill="url(#color-1_IpjajBS4Wzwt_gr1)"></circle><circle cx="50.007" cy="13.993" r="2" fill="url(#color-2_IpjajBS4Wzwt_gr2)"></circle><circle cx="40.007" cy="23.993" r="2" fill="url(#color-3_IpjajBS4Wzwt_gr3)"></circle><circle cx="38.007" cy="16.993" r="2" fill="url(#color-4_IpjajBS4Wzwt_gr4)"></circle><circle cx="47.007" cy="25.993" r="2" fill="url(#color-5_IpjajBS4Wzwt_gr5)"></circle><g fill="url(#color-6_IpjajBS4Wzwt_gr6)"><circle cx="43.007" cy="11.993" r="2"></circle></g><g fill="url(#color-7_IpjajBS4Wzwt_gr7)"><circle cx="52.007" cy="21.993" r="2"></circle></g><g fill="url(#color-8_IpjajBS4Wzwt_gr8)"><path d="M10.007,47.993c0,0 5,1 6,6l-7,2l-1,-1z"></path></g><path d="M54.285,28.301l-6.138,6.417l-2.725,-2.725l8.793,-8.793c3.698,-3.699 3.698,-9.716 0,-13.414c-1.792,-1.792 -4.174,-2.778 -6.707,-2.778c-2.534,0 -4.916,0.987 -6.707,2.778l-9.293,9.293l-2.586,-2.586l5.793,-5.793c0.391,-0.391 0.391,-1.023 0,-1.414c-0.391,-0.391 -1.023,-0.391 -1.414,0l-13.723,13.721c-2.931,2.932 -4.107,7.166 -3.183,11.184l-4.095,4.095c-0.023,0.023 -0.039,0.052 -0.06,0.077c-0.017,0.021 -0.033,0.041 -0.049,0.063c-0.061,0.088 -0.113,0.182 -0.143,0.285l-5,17c-0.105,0.357 -0.003,0.743 0.265,1.002c0.189,0.183 0.439,0.28 0.694,0.28c0.105,0 0.213,-0.017 0.316,-0.051l18,-6c0.009,-0.003 0.015,-0.012 0.024,-0.015c0.133,-0.048 0.259,-0.12 0.366,-0.227l2.888,-2.888c1.08,0.302 2.175,0.458 3.26,0.458c3.216,0 6.331,-1.298 8.642,-3.714l14.227,-14.872c0.382,-0.399 0.368,-1.032 -0.031,-1.414c-0.401,-0.381 -1.032,-0.369 -1.414,0.031zM46.765,36.163l-1.062,1.11l-2.781,-2.781l1.086,-1.086zM26.14,48.446c-0.563,-1.164 -0.349,-2.461 -0.235,-2.937l11.603,-11.603l1.586,1.586zM28.508,24.907l1.586,1.586l-11.646,11.646c-0.804,0.348 -2.144,0.344 -3.374,0.202zM32.508,20.907l10.586,10.586l-2.586,2.586l-10.586,-10.586zM19.961,39.453l11.546,-11.547l4.586,4.586l-11.426,11.427c-1.904,-0.346 -3.259,-1.048 -4.018,-2.101c-0.67,-0.931 -0.713,-1.908 -0.688,-2.365zM42.215,11.2c1.414,-1.414 3.293,-2.192 5.293,-2.192c1.999,0 3.879,0.779 5.293,2.192c2.918,2.918 2.918,7.667 0,10.586l-8.293,8.293l-10.586,-10.586zM30.094,20.493l-1.086,1.086l-2.586,-2.586l1.086,-1.086zM20.992,24.421l4.015,-4.015l2.586,2.586l-9.464,9.464c-0.281,-2.944 0.732,-5.903 2.863,-8.035zM13.707,40.16c1.053,0.193 2.773,0.417 4.295,0.169c0.09,0.757 0.349,1.703 0.997,2.618c0.995,1.408 2.615,2.363 4.821,2.847c-0.124,0.948 -0.122,2.359 0.577,3.68l-14.89,4.965zM40.059,43.174c-2.303,2.408 -5.563,3.479 -8.782,2.965l10.232,-10.232l2.793,2.793c0.007,0.007 0.016,0.009 0.023,0.015z" fill="url(#color-9_IpjajBS4Wzwt_gr9)"></path></g></g>
</svg>
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
            <svg fill="#000000" viewBox="0 0 24 24" id="diagram-bar" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="primary" d="M19,15v2m-8-4v4m4-6v6M7,9v8" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary-2" data-name="primary" d="M3,3V20a1,1,0,0,0,1,1H21" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg>
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
                <p>Chatta med dina elever direkt här.  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"  cursor="pointer" viewBox="0 0 64 64">
<linearGradient id="swqI2SlaZWgv8qXkhwPKWa_43664_gr1" x1="32" x2="32" y1="7.5" y2="56.752" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#swqI2SlaZWgv8qXkhwPKWa_43664_gr1)" d="M32,56c-1.077,0-2.046-0.555-2.591-1.484l-3.694-6.314c-0.759-1.299-2.099-2.185-3.675-2.432 c-9.479-1.482-16.37-9.85-16.027-19.462C6.371,16.213,15.083,8,25.432,8h13.137c10.349,0,19.061,8.213,19.419,18.308 c0.343,9.611-6.549,17.979-16.028,19.462c-1.575,0.247-2.915,1.133-3.674,2.432l-3.694,6.313C34.046,55.445,33.077,56,32,56z M25.432,10c-9.285,0-17.1,7.348-17.421,16.378C7.705,34.98,13.869,42.467,22.35,43.793c2.173,0.341,4.028,1.579,5.092,3.398 l3.694,6.313C31.397,53.952,31.827,54,32,54s0.603-0.048,0.864-0.496l3.694-6.313c1.063-1.819,2.919-3.058,5.091-3.398 c8.481-1.327,14.646-8.813,14.34-17.415C55.668,17.348,47.854,10,38.568,10H25.432z"></path><linearGradient id="swqI2SlaZWgv8qXkhwPKWb_43664_gr2" x1="25" x2="25" y1="21.5" y2="28.5" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#swqI2SlaZWgv8qXkhwPKWb_43664_gr2)" d="M25 21.998A3 3 0 1 0 25 27.998A3 3 0 1 0 25 21.998Z"></path><linearGradient id="swqI2SlaZWgv8qXkhwPKWc_43664_gr3" x1="39" x2="39" y1="21.5" y2="28.5" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#swqI2SlaZWgv8qXkhwPKWc_43664_gr3)" d="M39 21.998A3 3 0 1 0 39 27.998A3 3 0 1 0 39 21.998Z"></path><linearGradient id="swqI2SlaZWgv8qXkhwPKWd_43664_gr4" x1="32" x2="32" y1="29.625" y2="37.375" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#swqI2SlaZWgv8qXkhwPKWd_43664_gr4)" d="M36,30h-8c-0.552,0-1,0.446-1,0.998v1c0,2.761,2.239,5,5,5s5-2.239,5-5v-1 C37,30.446,36.552,30,36,30z"></path><linearGradient id="swqI2SlaZWgv8qXkhwPKWe_43664_gr5" x1="32" x2="32" y1="7.5" y2="56.752" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#swqI2SlaZWgv8qXkhwPKWe_43664_gr5)" d="M26 12H38V14H26z"></path>
</svg></p>
            </div>
        </section>
    </div>
</div>
<?php include('./views/Footer.php'); ?>
</body>
<?php
require_once(realpath(dirname(__FILE__) . '/../Models/UserDatabase.php'));
require_once(realpath(dirname(__FILE__) . '/../vendor/autoload.php'));

$pdo = new PDO('mysql:host=localhost;dbname=eventease', 'root', 'root'); 
$userDatabase = new UserDatabase($pdo);
$auth = $userDatabase->getAuth();

$usernameString = "";

if ($auth->isLoggedIn()) {
    $username = $auth->getUsername();
    $usernameString = "<li>Välkommen " . htmlspecialchars($username) .  "! Är du redo att boka din nästa handledning? </li>";
}
?>
<div class="auth-links">
    <?php if ($auth->isLoggedIn()): ?>
        <div class="loggedInAs">
            <?php echo $usernameString; ?>
            </div>
            <a href="/logout" class="logout-button">Logga Ut</a>
        
    <?php else: ?>
        <a href="/login" class="login-button">Logga In</a>
        <a href="/registration" class="register-button">Registrera</a>
    <?php endif; ?>
</div>
</div>
<nav class="navigation">
    <ul class="nav-list">
        <a href="/" class="nav-link">
            <span class="iconify icon-home" data-icon="fluent-emoji:cloud"></span>

        </a>
        <li class="nav-item"><a href="/guidance" class="nav-link">handledning</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link">Kontakta lärare</a></li>

    

    </ul>
</nav>

<body>
    <div class="nav-background">

    </div>
</body>
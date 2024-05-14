<?php include_once ('./Models/Database.php');
$dbContext = new DBContext();
$usernameString = "";
if (
    $dbContext->
        getUsersDatabase()->getAuth()->isLoggedIn()
) {
    $username = $dbContext->getUsersDatabase()->getAuth()->getUsername();
    if ($dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::AUTHOR)) {
        $usernameString = "<li class='navmessage'>Välkommen " . htmlspecialchars($username) . " - handledning idag, framgång imorgon</li>";
    } else {
        $usernameString = "<li class='navmessage'>Välkommen " . htmlspecialchars($username) . "! Är du redo att boka din nästa handledning?
    </li>";
    }
}
?>
<div class="auth-links-navbar">
    <a class="logo-link" href="/">
        <div class="logo-name">
            <div class="logo"><img src="img\🦆 icon _cloud_.svg"></div>
            <h2>EventEase</h2>
        </div>
    </a>
    <?php if ($dbContext->getUsersDatabase()->getAuth()->isLoggedIn()): ?>
        <div class="loggedInAs">
            <?php echo $usernameString; ?>
        </div>
        <a href="/logout" class="logout-button">Logga Ut</a>

    <?php else: ?>
        <div class="login-block"><a href="/login" class="login-button">Logga In</a>
            <a href="/registration" class="register-button">Registrera</a>
        </div>
    <?php endif; ?>
</div>
</>
<nav class="navigation">
    <ul class="nav-list">
        <?php if ($dbContext->getUsersDatabase()->getAuth()->isLoggedIn() && $dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::AUTHOR)): ?>
            <li class="nav-item"><a href="/admin" class="nav-link">Inbokad handledning</a></li>
            <li class="nav-item"><a href=" /meeting" class="nav-link">Lärarpanel</a></li>


        <?php elseif ($dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::CONSUMER)): ?>
            <li class="nav-item"><a href="/guidance" class="nav-link">handledning</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Kontakta lärare</a></li>
        <?php endif; ?>
    </ul>
</nav>
<body>
    <div class="nav-background">
    </div>
</body>
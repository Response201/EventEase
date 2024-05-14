<?php
/* session_start(); */
ob_start();

include_once ("Models/Database.php");

$message = $message = $_GET['message'] ?? "";
$dbContext = new DBContext();



try {
    $dbContext->getUsersDatabase()->getAuth()->login($username, $password);

    if ($dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::AUTHOR)) {
        header("Location: /meeting");
    } else if ($dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::CONSUMER)) {
        header("Location: /"); // Omdirigera användare till startsidan

    }
} catch (\Throwable $th) {
    $message = "något gick fel";

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <?php include (__DIR__ . '/../includes/head.php'); ?>

</head>

<body>

    <?php include ('./views/Navbar.php'); ?>
    <div class="login-wrapper">
        <div class="login-container">
            <h2>Logga In</h2>
            <form method="POST">
                <label for="username">Användarnamn:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Lösenord:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit" name="login">Logga In</button>
                <p><?php echo "$message"; ?></p>
            </form>

            <p> Har du inget konto? <a href="/registration">Registrera dig här!</a></p>
        </div>

    </div>



    <?php include (__DIR__ . '/../views/Footer.php'); ?>
</body>

</html>
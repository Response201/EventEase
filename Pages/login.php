<?php
session_start();
ob_start();
require_once(realpath(dirname(__FILE__) . '/../Models/UserDatabase.php'));
require_once(realpath(dirname(__FILE__) . '/../Models/Database.php'));
require_once(realpath(dirname(__FILE__) . '/../vendor/autoload.php'));
require_once(realpath(dirname(__FILE__) . '/../functions/auth.php'));
require_once(realpath(dirname(__FILE__) . '/../Utils/Validator.php'));



$dbContext = new DBContext();
$pdo = $dbContext->getPdo(); 

$userDatabase = new UserDatabase($pdo);
$auth = new \Delight\Auth\Auth($pdo, null, null, false, 2 * 60 * 60);
$auth = $userDatabase->getAuth();
$username = $auth->getUsername();
$message = "";
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$result = $userDatabase->loginUser($username, $password);

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';   
    $login_status = $userDatabase->loginUser($username, $password);

    if ($login_status === true) {
        $_SESSION['username'] = $userDatabase->getAuth()->getUsername();
        $_SESSION['user_id'] = $userDatabase->getAuth()->getUserId(); 
        $_SESSION['role'] = $userDatabase->getAuth()->getRoles();
        if ($auth->hasRole(\Delight\Auth\Role::AUTHOR)) {
            header("Location: /Pages/admin.php"); // Omdirigera admin till en admin-panel
        } else {
            header("Location: /Pages/index.php"); // Omdirigera användare till startsidan
        }
        exit;
    } else {
        $message = $login_status; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <?php include(__DIR__ . '/../includes/head.php'); ?>

</head>
<body>

<?php include(__DIR__ . '/../views/Navbar.php'); ?>
<div class="login-wrapper">
<div class="login-container">
<h2>Logga In</h2>
<form  method="post">
        <label for="username">Användarnamn:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Lösenord:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit" name="login">Logga In</button>
        <p><?php echo "$message"; ?></p>
    </form>
    
    <p> Har du inget konto? <a href="/register">Registrera dig här!</a></p>
</div>

<div class="login-slogan-eventease">
    <h2>EventEase </h2> 
</div>
</div>



<?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>
</html>
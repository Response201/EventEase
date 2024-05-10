<?php
/* session_start(); */
ob_start();

include_once ("Models/Database.php");
/* require_once(realpath(dirname(__FILE__) . '/../vendor/autoload.php'));
require_once(realpath(dirname(__FILE__) . '/../functions/auth.php'));
require_once(realpath(dirname(__FILE__) . '/../Utils/Validator.php')); */
$message = "";
$dbContext = new DBContext();
/* 

$dbContext = new DBContext();
$pdo = $dbContext->getPdo(); 
$userDatabase = new UserDatabase($pdo);
$auth = $userDatabase->getAuth();
$auth = new \Delight\Auth\Auth($pdo, null, null, false, 2 * 60 * 60);

$username = $auth->getUsername();
$message = "";
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$result = $userDatabase->loginUser($username, $password);

if (isset($_POST['login']) && $username && $password) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';   
    $login_status = $userDatabase->loginUser($username, $password);
    $auth->loginWithUsername($username, $password);

    if ($login_status === true) {
        $_SESSION['username'] = $userDatabase->getAuth()->getUsername();
        $_SESSION['user_id'] = $userDatabase->getAuth()->getUserId(); 

        $_SESSION['role'] = $userDatabase->getAuth()->getRoles(); */
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? ''; 
        if (isset($_POST['login']) && $username && $password) {

try {
    $dbContext->getUsersDatabase()->getAuth()->login($username, $password);
        
    if ($dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::AUTHOR)) {
         header("Location: /meeting");
    } else if($dbContext->getUsersDatabase()->getAuth()->hasRole(\Delight\Auth\Role::CONSUMER)) {
        header("Location: /"); // Omdirigera användare till startsidan

    }
} catch (\Throwable $th) {
    $message = "något gick fel";
    
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

<?php include('./views/Navbar.php'); ?>
<div class="login-wrapper">
<div class="login-container">
<h2>Logga In</h2>
<form  method="POST">
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
<?php
session_start(); 
ob_start();

include_once("Models/Database.php");
require_once(realpath(dirname(__FILE__) . '/../vendor/autoload.php'));
require_once(realpath(dirname(__FILE__) . '/../functions/auth.php'));
require_once(realpath(dirname(__FILE__) . '/../Utils/Validator.php'));

$dbContext = new DBContext();
$pdo = $dbContext->getPdo(); 
$userDatabase = new UserDatabase($pdo);
$auth = new \Delight\Auth\Auth($pdo, null, null, false, 2 * 60 * 60);

$message = $_GET['message'] ?? "";

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username && $password) {
        try {
            $auth->loginWithUsername($username, $password);
            $_SESSION['username'] = $auth->getUsername();
            $_SESSION['user_id'] = $auth->getUserId();
            $_SESSION['role'] = $auth->getRoles();

            if ($auth->hasRole(\Delight\Auth\Role::AUTHOR)) {
                header("Location: /meeting");
                exit;
            } else if($auth->hasRole(\Delight\Auth\Role::CONSUMER)) {
                header("Location: /"); // Redirect to homepage
                exit;
            }
        } catch (\Delight\Auth\InvalidEmailException | \Delight\Auth\InvalidPasswordException $e) {
            $message = "Invalid username or password.";
        } catch (\Throwable $th) {
            $message = "An error occurred: " . $th->getMessage();
        }
    } else {
        $message = "Username and password are required.";
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

            <p> Har du inget konto? <a href="/register">Registrera dig här!</a></p>
        </div>

    </div>



    <?php include(__DIR__ . '/../views/Footer.php'); ?>
</body>

</html>

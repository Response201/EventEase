<?php
ob_start();
require_once ('Models/Database.php');
require_once ('functions/auth.php');
require_once ("Utils/Validator.php");


$v = new Validator($_POST);
$dbContext = new DBContext();
$message = "";
$passwordMessage = "";
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$email = $_POST['email'] ?? '';


if (isset($_POST['create'])) {

    if (!$password || !$username || !$email) {
        $message = "Vänligen fyll i alla fält";
    } else {
        $v->field('email')->required()->email()->min_val(1)->max_len(100);
        $v->field('password')->required()->match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/");
        if ($v->is_valid()) {
            $message = auth();
            if ($message == 'Perfekt, kolla mailet och verifiera ditt konto') {
                $dbContext->getUsersDatabase()->makeConsumer($email);
            }
        } else {
            if (!$v->field('password')->is_valid()) {
                $passwordMessage = "Lösenordet måste vara minst 6 tecken långt, innehålla minst en stor bokstav och ett specialtecken";
            }
            $message = "Det gick inte registrera kontot";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <?php include (__DIR__ . '/../includes/head.php'); ?>

</head>

<body>

    <?php include (__DIR__ . '/../views/Navbar.php'); ?>
    <div class="login-wrapper">

        <div class="login-container">

            <h2>Registrera</h2>
            <form method="POST">
                <label for="email">Epostadress:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="username">Namn:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Lösenord:</label>
                <input type="password" id="password" name="password" required>
                <?php if ($passwordMessage): ?>
                    <p style="color: red;"><?php echo $passwordMessage; ?></p>
                <?php endif; ?>
                <br>
                <button type="submit" name="create">Registrera</button>
                <p><?php echo "$message"; ?></p>
            </form>
            <p> Har du redan ett konto? <a href="/login">Logga in här!</a></p>
        </div>
    </div>

    <?php include (__DIR__ . '/../views/Footer.php'); ?>
</body>

</html>
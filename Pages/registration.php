<?php
ob_start();
require_once ('Models/Database.php');
require_once ('functions/auth.php');
require_once ("Utils/Validator.php");

$v = new Validator($_POST);
$dbContext = new DBContext();
$message = $_GET['message'] ?? "";
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$passwordAgain = $_POST['passwordAgain'] ?? '';


if (isset($_POST['create'])) {

    if (!$password || !$username) {
        $message = "Vänligen fyll i alla fält";
    } else {
        $v->field('username')->required()->email()->min_val(1)->max_len(100);
        ;
        $v->field('password')->required()->match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/");
        if ($v->is_valid()) {
            $message = auth();
            if ($message === 'Tack för din registering, kolla mailet och verifiera ditt konto') {
                $dbContext->getUsersDatabase()->makeConsumer($username);
            }
        } else {
            $message = "Det gick inte registrera kontot";
        }
    }
}
?>


<!DOCTYPE html>

<head>

<?php include(__DIR__ . '/../includes/head.php'); ?>

</head>

<body>

    <div class="registration-container">
        <?php include (__DIR__ . '/../views/Navbar.php'); ?>

        <form class="from" method="POST">
            <section class="fromInputs">
                <label>Användarnamn: </label>
                <input name="username" type="text"  />
                <label>Lösenord: </label>
                <input name="password" type="password" />
            </section>
            <section class='fromBtnMessage'>
                <button name='create'>Registrera</button>
                <p><?php echo "$message"; ?></p>
            </section>
        </form>






        <div class="background">
            <img src="../img/cloud-with-ai-generated-free-png.webp">
        </div>
    </div>

    <?php include (__DIR__ . '/../views/Footer.php'); ?>
</body>

</html>
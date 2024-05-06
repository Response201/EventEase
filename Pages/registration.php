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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>EventEase</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway&family=Roboto:wght@300&display=swap" rel="stylesheet">


    <link rel="icon" type="image/ico" href="assets/favicon.ico" />
    <link href="/css/navigation.css" rel="stylesheet" />
    <link href="/css/footer.css" rel="stylesheet" />
    <link href="/css/registration.css" rel="stylesheet" />

</head>

<body>

    <div class="container">
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
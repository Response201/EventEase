

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
<form action="service/LogInHandler" method="post">
        <label for="username">Användarnamn:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Lösenord:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Logga In</button>
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
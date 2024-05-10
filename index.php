<?php
// globala initieringar !
require_once (dirname(__FILE__) . "/Utils/Router.php");
require_once ("vendor/autoload.php");


$router = new Router();


$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();



$router->addRoute('/', function () {
    require __DIR__ . '/Pages/index.php';
});


$router->addRoute('/login', function () {
    require __DIR__ . '/Pages/login.php';
});



$router->addRoute('/registration', function () {
    require __DIR__ . '/Pages/registration.php';
});


$router->addRoute('/verify_email', function () {
    require __DIR__ . '/functions/verify.php';
});


$router->addRoute('/contact', function () {
    require __DIR__ . '/Pages/contact.php';
});

$router->addRoute('/guidance', function () {
    require __DIR__ . '/Pages/guidance.php';
});

$router->addRoute('/admin', function () {
    require __DIR__ . '/Pages/admin.php';
});

$router->addRoute('/meeting', function () {
    require __DIR__ .'/Pages/teacherLandingPage.php';
});


$router->addRoute('/logout', function () {
    require __DIR__ .'/Pages/logout.php';
});



$router->dispatch();
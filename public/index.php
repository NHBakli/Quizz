<?php 

session_start();

ob_start();

require_once("../Controllers/errorController.php");
require_once("../Controllers/homeController.php");
require_once("../Controllers/lagoutController.php");
require_once("../Controllers/loginController.php");
require_once("../Controllers/registerController.php");

require_once("../Controllers/layout/HeaderController.php");

headerpage();

$url = '';
if(isset($_GET['url'])) {
    $url = $_GET['url'];
}

if(($url == '') || ($url == 'home') || ($url == 'accueil')) {
    homepage();
} elseif(($url == 'register') || ($url == 'inscription')){
    registerpage();
} elseif(($url == 'login') || ($url == 'connexion')){
    loginpage();
} elseif(($url == 'lagout') || ($url == 'deconnexion')){
    lagoutPage();
}else {
    errorpage();
}

$url = '';
if(isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}
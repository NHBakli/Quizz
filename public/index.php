<?php 

session_start();

ob_start();

require_once("./autoload.php");


$url = '';
if(isset($_GET['url'])) {
    $url = $_GET['url'];
}


if(($url == '') || ($url == 'home')) {
    HomeController::homepage();
} else {
    echo "ERROR 404";
}

$url = '';
if(isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}
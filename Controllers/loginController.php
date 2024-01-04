<?php 

include_once('../config/db.php');
include_once("../Model/loginModel.php");

function loginpage(){
    include_once("../View/loginView.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $login = new LoginModel($db);

    $authenticated = $login->authenticate($email, $password);

    if ($authenticated) {
        header('Location: home');
        exit();
    } else {
        echo "Échec de la connexion. Veuillez réessayer.";
        header('Location: login');
        exit();
    }
}
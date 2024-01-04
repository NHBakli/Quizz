<?php

include_once('../config/db.php');
include_once("../Model/registerModel.php");

function registerpage(){
    include_once("../View/registerView.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {

    $username = isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8') : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $userModel = new RegisterModel($db);

    $register = $userModel->createAccount($username, $email, $password);


    if ($register) {
        header('Location: login');
        exit();
    } else {
        echo "Échec de l'inscription. Veuillez réessayer.";
    }
}
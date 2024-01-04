<?php

include_once('../Model/lagoutModel.php');

function lagoutPage(){
    include_once("../View/lagoutView.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lagout'])) {

    session_unset();
    header("Location: home"); 
    exit();
}
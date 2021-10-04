<?php 

require('../core/init.php');

if(!isLogged()){
    header('Location:/web_agency/index.php');
}

$user = getUser($_SESSION["id"]);


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!isset($_POST["full_name"]) || empty($_POST["full_name"])) {
        $full_name_error = "Name is required!";
        array_push($errors,$full_name_error);
    } else {
        $full_name = $_POST["full_name"];
    }

    if(!isset($_POST["email"]) || empty($_POST["email"])) {
        $email_error = "Email is required!";
        array_push($errors,$email_error);
    } else {
        $email = $_POST["email"];
    }

    if(!isset($_POST["message"]) || empty($_POST["message"])) {
        $message_error = "Message is required!";
        array_push($errors,$message_error);
    } else {
        $message = $_POST["message"];
    }

    if(count($errors) == 0) {
        contactMsg($full_name,$email,$message);
        $msg = "Successfully.Thanck you";
    }
}

require('./views/home.view.php');






?>
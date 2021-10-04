<?php


require_once('core/init.php');
$title = "Travel agency";

if(!isLogged()){
    header('views/login.php');
}

require("views/includes/head.php");
require("views/includes/header.php");
require("views/includes/navbar.php");


require('views/login.view.php');

require("views/includes/footer.php");
require("views/includes/bottom.php");
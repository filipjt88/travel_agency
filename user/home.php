<?php 

$title = "Travel Agency";
require('../core/init.php');

if(!isLogged()){
    header('Location:/web_agency/index.php');
}



$user = getUser($_SESSION["id"]);


require('./views/home.view.php');


?>
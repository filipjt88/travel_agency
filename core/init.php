<?php 

require("config.php");
require("connection.php");
require("db_functions.php");

if(session_status() == PHP_SESSION_NONE){
    session_start();
}
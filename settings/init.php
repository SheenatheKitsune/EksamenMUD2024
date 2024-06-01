<?php
require "classes/classDB.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_STRICT);


define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "eksamenmud2024";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql15.unoeuro.com";
    $DB_NAME = "kitsunee_dk_db";
    $DB_USER = "kitsunee_dk";
    $DB_PASS = "Fmzk3E2phRxt5geaGfBr";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
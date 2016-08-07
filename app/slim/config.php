<?php
//Slim Configuration
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$config['db']['host']   = "localhost";
$config['db']['user']   = "root";
$config['db']['pass']   = "";
$config['db']['dbname'] = "beyonderme_landingpage";

//Custom Autoload
spl_autoload_register(function ($classname) {
    require ("classes/" . $classname . ".php");
});
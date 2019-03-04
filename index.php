<?php
session_start();
require_once "vendor/autoload.php";
require_once "app/config/constants.php";
new Router();
echo "Page end"; 
?>
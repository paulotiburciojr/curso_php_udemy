<?php


session_id('w44yuwe8we89r789723');
require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);



?>
<?php
session_start();
$username = $_POST["name"];
$password = $_POST["pwd"];

if($name!="u10116054" && $password="u10116054"){
	echo $name."HELLO";
	exit;
}


?>
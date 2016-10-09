<?php
# FileName="ConnectDB.php"
# Type="MYSQL"
# HTTP="true"
$hostname = "localhost";
$database = "rcl";
$username = "root";
$password = "12345678";
$connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES utf8");
mysql_select_db(“user”, $connect);
?>


